<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Album example · Bootstrap v5.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

</head>

<body>
    <x-slot name="title">
        Postni o'zgartirish #{{ $post->id }}
    </x-slot>

    <div class="p-5 mb-4 bg-light rounded-3">
        <form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}" class="container-fluid py-5"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Sarlavha</label>
                <input name="title" type="text" value="{{ old('title', $post->title) }}" class="form-control">
                @error('title')
                    <p class="help-block text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Matn</label>
                <textarea name="text" class="form-control" rows="3">{{ old('text', $post->text) }}</textarea>
                @error('text')
                    <p class="help-block text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Saqlash</button>
        </form>
    </div>
</body>

</html>
