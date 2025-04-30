<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rediģēt postu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>✎ Rediģēt postu</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nosaukums:</label>
        <input type="text" name="title" value="{{ $post->title }}" required>

        <label>Saturs:</label>
        <textarea name="content" rows="6" required>{{ $post->content }}</textarea>

        <button type="submit">Saglabāt izmaiņas</button>
    </form>
</body>
</html>
