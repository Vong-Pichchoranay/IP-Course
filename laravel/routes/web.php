<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/upload_file', function () {
    return view('upload_file');
});

Route::post('/upload', [UploadController::class, 'upload'])->name('upload');

Route::get('/upload_image', function () {
    return view('upload_image');
});

Route::post('/upload_2', [UploadController::class, 'store'])->name('store');

Route::get('/upload_thumbnail', function () {
    return view('upload_thumbnail');
});

Route::post('/upload_3', [UploadController::class, 'thumbnail'])->name('thumbnail');

require __DIR__.'/auth.php';
