<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Izveidot postu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>☆ Jauns posts</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Nosaukums:</label>
        <input type="text" name="title" required>

        <label>Saturs:</label>
        <textarea name="content" rows="6" required></textarea>

        <button type="submit">Saglabāt</button>
    </form>
</body>
</html>
