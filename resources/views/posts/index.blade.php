<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Visi ieraksti</title>
</head>
<body>
    <h1>Bloga ieraksti</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <hr>
            </li>
        @endforeach
    </ul>
</body>
</html>