<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kanothe') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-slate-100 antialiased bg-slate-800">
<div class="min-h-screen flex flex-col pt-6 sm:pt-0">
    <div class="sm:max-w-5xl lg:max-w-6xl sm:w-full mx-2 md:mx-6 place-self-center px-6 py-12 overflow-hidden">

        <!--navigation-->

        <!-- Page Heading -->
        @if (isset($header))
            <header class="max-w-7xl mx-auto pt-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </header>
        @endif


        <!--body-->
        <div class="py-12 shadow-sm shadow-lime-100 rounded-sm sm:rounded-md">
            {{ $slot }}
        </div>

        <!--footer-->
        @livewire('contact-me')


        <!--credits-->
        @livewire('credits')

    </div>
</div>
</body>
</html>
