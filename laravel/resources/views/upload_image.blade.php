<html>
    <body>
        <h3>Upload Image</h3>
        <form action="/upload_2" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" />
            <button type="submit">Upload</button>
        </form>
    </body>
</html>