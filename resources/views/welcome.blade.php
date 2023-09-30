<!doctype html>
<html lang="en" class="bg-slate-800 font-sans text-slate-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I am Francis Njuguna: This is my Developer Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen">
    <main id="top" class="min-h-full">
        <!--navbar-->
        @livewire('navbar')
        <section
            class="relative">
            <!--Introduction-->
            @livewire('welcome-again')

            <!--About-->
            @livewire('about-me')

            <!--Skills-->
            @livewire('skills')

        </section>
        <!--Projects-->
        @livewire('projects')
        <!--Contacts/Credits-->
        @livewire('contact-me')

        <!--credits-->
        @livewire('credits')
    </main>

@livewireScripts
</body>
</html>
