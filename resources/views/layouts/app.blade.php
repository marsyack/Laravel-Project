<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JejakKenangan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-rose-50 to-purple-100 min-h-screen">
    <nav class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-rose-600">🌹 JejakKenangan</h1>
            <a href="{{ route('memorials.create') }}"
               class="bg-rose-500 text-white px-4 py-2 rounded-lg hover:bg-rose-600">
                + Tambah Kenangan
            </a>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto p-6">
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>