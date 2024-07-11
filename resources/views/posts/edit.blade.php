<!-- resources/views/posts/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
<h1>Edit Post</h1>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" id="content" required>{{ $post->content }}</textarea>
    <br>
    <button type="submit">Update</button>
</form>
</body>
</html>

