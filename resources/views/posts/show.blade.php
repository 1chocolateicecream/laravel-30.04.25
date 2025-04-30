<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $post->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="post-card">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>

        <p style="color: gray; font-size: 0.9rem;">
            Izveidots: {{ $post->created_at->format('Y-m-d H:i') }} <br>
            Atjaunināts: {{ $post->updated_at->format('Y-m-d H:i') }}
        </p>

        <div class="button-row">
    <a href="{{ route('posts.edit', $post->id) }}">
        <button>✐ Rediģēt</button>
    </a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-form">
        @csrf
        @method('DELETE')
        <button type="submit" style="background-color: #ef9a9a;">☠ Dzēst</button>
    </form>
</div>
    </div>
</body>
</html>
