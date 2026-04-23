<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite("resources/css/app.css")
        <title>@yield("title")</title>
</head>
<body>
    <nav class="flex items-center gap-4 p-4 bg-gray-800 text-white">
        <a href="/">websiteku</a>
        <a href="/">home</a>
        <a href="/about">About</a>
        <a href="/pegawai.pegawai">pegawai</a>
</nav>
@yield("content")
</body>
</html>