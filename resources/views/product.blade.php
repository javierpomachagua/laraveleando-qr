<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl bg-blue-400 px-10 py-20 rounded-xl text-center flex flex-col gap-2 items-center text-white">
        <p>Nombre: <span class="block font-semibold">{{ $product->name }}</span></p>
        <p>Descripción: <span class="block font-semibold">{{ $product->description }}</span></p>
        <p>Precio: <span class="block font-semibold">{{ $product->price }}</span></p>
        <p>Uuid: <span class="block font-semibold">{{ $product->uuid }}</span></p>
    </div>
</div>
</body>
</html>
