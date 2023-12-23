<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <form action="{{route('create-scan')}}" method="post">
                @csrf
                <button class="bg-gray-900 dark:bg-gray-100 w-96 text-gray-100 dark:text-gray-900">New Scan</button>
            </form>
            <a href="{{route('scans')}}">
                <button class="bg-gray-900 dark:bg-gray-100 w-96 text-gray-100 dark:text-gray-900">Scan history</button>
            </a>
        </div>
    </body>
</html>
