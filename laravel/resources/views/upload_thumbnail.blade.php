<html>
    <body>
        <h3>Upload Thumbnail</h3>
        <form action="/upload_3" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" />
            <button type="submit">Upload</button>
        </form>
    </body>
</html>