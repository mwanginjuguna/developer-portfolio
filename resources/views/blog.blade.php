<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kanothe') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-slate-900 antialiased">
    <div class="min-h-screen flex flex-col pt-6 sm:pt-0 bg-white dark:bg-gray-900">
        <div class="sm:max-w-5xl sm:w-full mx-2 md:mx-6 place-self-center mt-6 px-6 py-12 dark:bg-gray-800 shadow-sm shadow-green-100 dark:shadow-lime-900 overflow-hidden rounded-sm sm:rounded-lg">
            <h1 class="font-semibold text-5xl text-slate-800 text-center md:font-extrabold md:text-7xl dark:text-gray-200 font-serif">
                {{ __('Blog') }}
            </h1>

            <div class="py-12">
                <div class="max-w-7xl md:mx-auto lg:px-8">
                    <div class="dark:bg-gray-800 bg-white overflow-hidden p-1">
                        <div class="grid grid-cols-3 gap-2 shadow-md shadow-green-800 rounded-md p-4 md:px-8 md:py-12 text-white">
                            <div
                                style="background-image: url('{{ Vite::asset('resources/images/Vervet-monkey-masai-mara-wildlife.jpg') }}')"
                                class="py-3 px-6 col-span-3 md:col-span-1 rounded-md h-60 my-4 mx-6 md:h-72 bg-no-repeat bg-cover bg-center">
                            </div>
                            <div class="col-span-3 md:col-span-2 py-3 px-6 md:py-8 bg-green-900  rounded-md w-full place-self-center text-justify max-w-md">
                                <p class="text-xs text-yellow-400 py-4 underline underline-offset-4 decoration-dashed font-serif uppercase">Featured</p>
                                <h2 class="text-2xl font-bold pb-4"><a href="#" class="font-semibold hover:text-lime-300 text-lime-400 hover:underline">Watch "Jeopardy! ", Alex Trebek's fun TV quiz game.</a></h2>
                                <p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy.</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-x-6 gap-y-12 mt-8 md:py-12">

                            <div class="col-span-3 md:col-span-1">
                                <div class="grid grid-cols-3 bg-lime-900 shadow-md rounded-md px-4 py-6 md:px-8 md:py-8 text-white">
                                    <div
                                        style="background-image: url('{{ Vite::asset('resources/images/Vervet-monkey-masai-mara-wildlife.jpg') }}')"
                                        class="py-3 px-3 col-span-3 rounded-md h-48 my-4 mx-6 md:mx-2 md:h-48 bg-no-repeat bg-cover bg-center">
                                    </div>
                                    <div class="col-span-3 py-3 px-3 md:px-1 rounded-md w-full place-self-center text-justify max-w-md">
                                        <h2 class="text-lg text-lime-400 font-bold pb-4 leading-tight"><a href="#" class="font-semibold hover:text-lime-300 hover:underline">Watch "Jeopardy! ", Alex Trebek's fun TV quiz game.</a></h2>
                                        <p class="text-sm leading-tight">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
                                            Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy.</p>
                                        <p class="text-xs text-lime-400 font-semibold pt-4 font-serif">Category:<a href="#" class="text-white pl-3 underline underline-offset-4 decoration-dashed ">{{ "Movie" }}</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-3 md:col-span-1">
                                <div class="grid grid-cols-3 bg-lime-900 shadow-md rounded-md px-4 py-6 md:px-8 md:py-8 text-white">
                                    <div
                                        style="background-image: url('{{ Vite::asset('resources/images/Vervet-monkey-masai-mara-wildlife.jpg') }}')"
                                        class="py-3 px-3 col-span-3 rounded-md h-48 my-4 mx-6 md:mx-2 md:h-48 bg-no-repeat bg-cover bg-center">
                                    </div>
                                    <div class="col-span-3 py-3 px-3 md:px-1 rounded-md w-full place-self-center text-justify max-w-md">
                                        <h2 class="text-lg text-lime-400 font-bold pb-4">Watch "Jeopardy! ", Alex Trebek's fun TV quiz game.</h2>
                                        <p class="text-sm">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
                                            Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy.</p>
                                        <p class="text-xs text-lime-400 font-semibold pt-4 font-serif">Category:<a href="#" class="text-white pl-3 underline underline-offset-4 decoration-dashed ">{{ "Movie" }}</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-3 md:col-span-1">
                                <div class="grid grid-cols-3 bg-lime-900 shadow-md rounded-md px-4 py-6 md:px-8 md:py-8 text-white">
                                    <div
                                        style="background-image: url('{{ Vite::asset('resources/images/Vervet-monkey-masai-mara-wildlife.jpg') }}')"
                                        class="py-3 px-3 col-span-3 rounded-md h-48 my-4 mx-6 md:mx-2 md:h-48 bg-no-repeat bg-cover bg-center">
                                    </div>
                                    <div class="col-span-3 py-3 px-3 md:px-1 rounded-md w-full place-self-center text-justify max-w-md">
                                        <h2 class="text-lg text-lime-400 font-bold pb-4">Watch "Jeopardy! ", Alex Trebek's fun TV quiz game.</h2>
                                        <p class="text-sm">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
                                            Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy.</p>
                                        <p class="text-xs text-lime-400 font-semibold pt-4 font-serif">Category:<a href="#" class="text-white pl-3 underline underline-offset-4 decoration-dashed ">{{ "Movie" }}</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-3 md:col-span-1">
                                <div class="grid grid-cols-3 bg-lime-900 shadow-md rounded-md px-4 py-6 md:px-8 md:py-8 text-white">
                                    <div
                                        style="background-image: url('{{ Vite::asset('resources/images/Vervet-monkey-masai-mara-wildlife.jpg') }}')"
                                        class="py-3 px-3 col-span-3 rounded-md h-48 my-4 mx-6 md:mx-2 md:h-48 bg-no-repeat bg-cover bg-center">
                                    </div>
                                    <div class="col-span-3 py-3 px-3 md:px-1 rounded-md w-full place-self-center text-justify max-w-md">
                                        <h2 class="text-lg text-lime-400 font-bold pb-4">Watch "Jeopardy! ", Alex Trebek's fun TV quiz game.</h2>
                                        <p class="text-sm">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
                                            Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy.</p>
                                        <p class="text-xs text-lime-400 font-semibold pt-4 font-serif">Category:<a href="#" class="text-white pl-3 underline underline-offset-4 decoration-dashed ">{{ "Movie" }}</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-3 md:col-span-1">
                                <div class="grid grid-cols-3 bg-lime-900 shadow-md rounded-md px-4 py-6 md:px-8 md:py-8 text-white">
                                    <div
                                        style="background-image: url('{{ Vite::asset('resources/images/Vervet-monkey-masai-mara-wildlife.jpg') }}')"
                                        class="py-3 px-3 col-span-3 rounded-md h-48 my-4 mx-6 md:mx-2 md:h-48 bg-no-repeat bg-cover bg-center">
                                    </div>
                                    <div class="col-span-3 py-3 px-3 md:px-1 rounded-md w-full place-self-center text-justify max-w-md">
                                        <h2 class="text-lg text-lime-400 font-bold pb-4">Watch "Jeopardy! ", Alex Trebek's fun TV quiz game.</h2>
                                        <p class="text-sm">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
                                            Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy.</p>
                                        <p class="text-xs text-lime-400 font-semibold pt-4 font-serif">Category:<a href="#" class="text-white pl-3 underline underline-offset-4 decoration-dashed ">{{ "Movie" }}</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-3 md:col-span-1">
                                <div class="grid grid-cols-3 bg-lime-900 shadow-md rounded-md px-4 py-6 md:px-8 md:py-8 text-white">
                                    <div
                                        style="background-image: url('{{ Vite::asset('resources/images/Vervet-monkey-masai-mara-wildlife.jpg') }}')"
                                        class="py-3 px-3 col-span-3 rounded-md h-48 my-4 mx-6 md:mx-2 md:h-48 bg-no-repeat bg-cover bg-center">
                                    </div>
                                    <div class="col-span-3 py-3 px-3 md:px-1 rounded-md w-full place-self-center text-justify max-w-md">
                                        <h2 class="text-lg text-lime-400 font-bold pb-4">Watch "Jeopardy! ", Alex Trebek's fun TV quiz game.</h2>
                                        <p class="text-sm">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
                                            Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy.</p>
                                        <p class="text-xs text-lime-400 font-semibold pt-4 font-serif">Category:<a href="#" class="text-white pl-3 underline underline-offset-4 decoration-dashed ">{{ "Movie" }}</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-3 md:col-span-1">
                                <div class="grid grid-cols-3 bg-lime-900 shadow-md rounded-md px-4 py-6 md:px-8 md:py-8 text-white">
                                    <div
                                        style="background-image: url('{{ Vite::asset('resources/images/Vervet-monkey-masai-mara-wildlife.jpg') }}')"
                                        class="py-3 px-3 col-span-3 rounded-md h-48 my-4 mx-6 md:mx-2 md:h-48 bg-no-repeat bg-cover bg-center">
                                    </div>
                                    <div class="col-span-3 py-3 px-3 md:px-1 rounded-md w-full place-self-center text-justify max-w-md">
                                        <h2 class="text-lg text-lime-400 font-bold pb-4">Watch "Jeopardy! ", Alex Trebek's fun TV quiz game.</h2>
                                        <p class="text-sm">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
                                            Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy.</p>
                                        <p class="text-xs text-lime-400 font-semibold pt-4 font-serif">Category:<a href="#" class="text-white pl-3 underline underline-offset-4 decoration-dashed ">{{ "Movie" }}</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-3 md:col-span-1">
                                <div class="grid grid-cols-3 bg-lime-900 shadow-md rounded-md px-4 py-6 md:px-8 md:py-8 text-white">
                                    <div
                                        style="background-image: url('{{ Vite::asset('resources/images/Vervet-monkey-masai-mara-wildlife.jpg') }}')"
                                        class="py-3 px-3 col-span-3 rounded-md h-48 my-4 mx-6 md:mx-2 md:h-48 bg-no-repeat bg-cover bg-center">
                                    </div>
                                    <div class="col-span-3 py-3 px-3 md:px-1 rounded-md w-full place-self-center text-justify max-w-md">
                                        <h2 class="text-lg text-lime-400 font-bold pb-4">Watch "Jeopardy! ", Alex Trebek's fun TV quiz game.</h2>
                                        <p class="text-sm">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
                                            Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy.</p>
                                        <p class="text-xs text-lime-400 font-semibold pt-4 font-serif">Category:<a href="#" class="text-white pl-3 underline underline-offset-4 decoration-dashed ">{{ "Movie" }}</a></p>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
