<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Imagick;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the request
        $request->validate([
            'document' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Store the file
        $path = $request->file('document')->store('uploads');
        // Return a response
        return response()->json(['path'=>$path], 200);
    }

    public function store(Request $request)
    {
        // validate the request
        $request->validate([
            'image' => 'required|image|max:2048' // Validation rules for upload
            ]);
        
        // store the image in minio
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
    
            $path = $image->store('uploads', 'minio'); // Store in the 'uploads' directory on MinIO

            return response()->json(['path'=>$path], 200);
            
        }
        return response()->json(['error' => 'No image file provided'], 400);
    }

    public function thumbnail(Request $request)
    {
        // Validate uploaded file
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        // Get the uploaded file
        $file = $request->file('file');
        // Create a new image instance using intervention
        $image = Image::make($file);
        // resize the image
        $image->resize(200,200);
        // save thumbnail tmp to a var
        $thumbnail = $image->stream();
        // upload thumbnail to minio
        $path = Storage::disk('minio')->put('thumbnails/' . $file->getClientOriginalName(), $thumbnail);
        // check if thumbnail is uploaded
        if($path) {
            return response()->json([
                'message' => 'Thumbnail successfully uploaded!',
                'path' => $path
            ], 200);
        } else {
            return response()->json([
                'message' => 'Failed to upload thumbnail to minio',
            ], 500);
        }
    }
}