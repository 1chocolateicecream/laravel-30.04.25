<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Visi posti</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Visi posti</h1>

        <a href="{{ route('posts.create') }}">
        <button type="button">✐ Izveidot jaunu postu</button>
    </a><br><br>

    @foreach ($posts as $post)
        <div class="post-card">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>

            <form action="{{ route('posts.show', $post->id) }}" method="GET">
                <button type="submit">👁 Apskatīt</button>
            </form>
        </div>
    @endforeach
</body>
</html>
