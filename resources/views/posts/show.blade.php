<!-- resources/views/posts/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Show Post</title>
</head>
<body>
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p>Summary: {{ $post->summary }}</p>
<p>Request response: {{ $resultat_request }}</p>
<a href="{{ route('posts.index') }}">Back to Posts</a>
</body>
</html>

