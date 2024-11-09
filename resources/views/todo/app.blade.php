<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-do List</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>

        </style>
    @endif
    <!-- CDN TailwindCSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/heroicons@2.0.13/dist/outline.min.js"></script>
</head>

<body class="font-sans antialiased">
    <div class="p-7 bg-blue-950 w-screen h-24">
        <h1 class="text-3xl font-semibold ml-24 text-white">Simple App</h1>
    </div>

    <div class="w-full h-24">
        <h2 class="text-center text-4xl font-semibold text-gray-700 mt-11">Todo List</h2>

        <!-- Form untuk menambahkan tugas -->
        <div class="p-5 w-3/5 md:w-2/5 h-fit bg-transparent border border-slate-300 rounded m-auto mt-8">
            <form class="flex items-center gap-2" method="POST" action="">
                @csrf
                <input type="text" id="task" name="task" placeholder="Tambah tugas"
                    class="w-full border border-black rounded p-2" required />
                <input type="submit" value="Submit" class="bg-blue-700 px-4 py-2 text-white rounded cursor-pointer" />
            </form>
        </div>

        <!-- Form untuk mencari kata kunci -->
        <div class="h-fit p-5 bg-transparent border border-slate-300 rounded m-auto mt-4 w-3/5 md:w-2/5">
            <form class="flex items-center gap-2" method="POST" action="{{url('/todo')}}">
                @csrf
                <input type="text" name="keyword" id="keyword" placeholder="Cari kata kunci"
                    class="w-full border border-black rounded p-2" required />
                <input type="submit" value="Cari" class="bg-blue-400 px-4 py-2 text-white rounded cursor-pointer" />
            </form>
            <div class="flex items-center border mt-3 p-3 justify-between rounded">
                <div>
                    <h3 class="font-semibold">Coding</h3>
                </div>
                <div class="flex items-center gap-2">
                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 3.487a2.25 2.25 0 113.181 3.181L6.32 20.39a4.5 4.5 0 01-1.591.954l-3.23.968.969-3.23a4.5 4.5 0 01.954-1.59L16.862 3.487z" />
                        </svg>
                        Edit
                    </button>

                    <!-- Button Hapus dengan Icon -->
                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
