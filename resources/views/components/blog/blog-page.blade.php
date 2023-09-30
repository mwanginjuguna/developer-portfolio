<x-blog.blog-layout>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <x-slot name="header">
        <x-blog.blog-title title="Articles" />
    </x-slot>

    <div class="max-w-6xl md:mx-auto lg:px-8">
        <div class="dark:bg-gray-800 bg-white overflow-hidden p-1">
            <x-blog.blog-featured-item />

            <div class="grid grid-cols-3 gap-x-6 gap-y-12 mt-8 md:py-12">

                <x-blog.blog-item />

                <div class="col-span-3 md:col-span-1">
                    <div class="grid grid-cols-3 dark:bg-lime-900 dark:text-white shadow-md shadow-lime-600 rounded-md px-4 py-6 md:px-8 md:py-8 text-green-900">
                        <div
                            style="background-image: url('{{ Vite::asset('resources/images/Vervet-monkey-masai-mara-wildlife.jpg') }}')"
                            class="py-3 px-3 col-span-3 rounded-md h-48 my-4 mx-6 md:mx-2 md:h-48 bg-no-repeat bg-cover bg-center">
                        </div>
                        <div class="col-span-3 py-3 px-3 md:px-1 rounded-md w-full place-self-center text-justify max-w-md">
                            <h2 class="text-lg text-green-600 dark:text-lime-400 font-bold pb-4">Watch "Jeopardy! ", Alex Trebek's fun TV quiz game.</h2>
                            <p class="text-sm">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps.
                                Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz <x-link href="{{ route('post') }}">Post</x-link>. Brick quiz whangs jumpy.</p>
                            <p class="text-xs text-lime-700 dark:text-lime-400 font-semibold pt-4 font-serif">Category:<a href="#" class="dark:text-white text-green-700 pl-3 underline underline-offset-4 decoration-dashed ">{{ "Movie" }}</a></p>
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
</x-blog.blog-layout>
