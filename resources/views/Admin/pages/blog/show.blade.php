<!DOCTYPE html>
<html>

<head>
    <title>Chi tiết bài blog</title>
</head>

<body>
    <h2>{{ $blog->title }}</h2>
    <img src="{{ asset('assets/blog/' . $blog->image) }}" alt="Post Image">
    <div>{!! $blog->content !!}</div>
</body>

</html>
