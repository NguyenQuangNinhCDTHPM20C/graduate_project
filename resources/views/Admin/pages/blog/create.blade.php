<!DOCTYPE html>
<html>

<head>
    <title>Tạo bài blog</title>
</head>

<body>
    <h2>Tạo bài post</h2>
    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">

        <label for="image">Image:</label>
        <input type="file" name="image" id="image">

        <label for="content">Content:</label>
        <textarea name="content" id="content"></textarea>

        <button type="submit">Tạo bài blog</button>
    </form>

    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
