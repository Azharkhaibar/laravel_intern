<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>

            </style>
        @endif
    </head>
<body class="font-sans antialiased bg-slate-950">
    @include('components.navbar')
    <div class="container  w-screen m-auto mt-32">
        <div class="flex gap-3 mx-9">
            <h3></h3>
            <h2 class="font-semibold text-center text-slate-200 text-7xl">Rendahnya minat Literasi di Indonesia</h2>
        </div>
    </div>

</body>
</html>
