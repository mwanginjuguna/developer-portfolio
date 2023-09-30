<div class="px-4 md:px-8 py-6 text-justify leading-relaxed md:leading-8 max-w-4xl mx-auto">

    <x-image-paragraph-card>
        <x-slot name="imagePath">
            resources/images/african-hare-wildlife.jpg
        </x-slot>
        <x-slot:paragraphText>
            Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls.
            Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack!
        </x-slot:paragraphText>
    </x-image-paragraph-card>

    {!! '<p style="color: red;" >I can use the mustache escape characters to past preformatted html content into the body</p>' !!}

    <x-big-h3-quote>

        <x-slot:quote>The biggest battle is the war against ignorance.</x-slot:quote>

        <x-slot:author>Mustafa Kemal Atatürk</x-slot:author>

    </x-big-h3-quote>

    <x-primary-button>
        Primary Button
    </x-primary-button>

    <div>
        <x-blog-paragraph>
            The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz.
            Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack.
            Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack! " my brave ghost pled.
            Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch "Jeopardy! ", Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz.
            Brawny gods just flocked up to quiz and vex him.
            Adjusting quiver and bow, Zompyc[1] killed the fox. <x-link href="{{ route('blog') }}">My faxed joke won a pager in the cable TV quiz show</x-link>. Amazingly few discotheques provide jukeboxes.
            My girl wove six dozen plaid jackets before she quit. Six big devils from Japan quickly forgot how
        </x-blog-paragraph>

        <x-primary-button>Primary Button</x-primary-button>

        <img src="{{ Vite::asset('resources/images/masai-giraffe-masai-mara-kenya.jpg') }}" alt="image" class="mx-auto rounded-lg shadow-lime-600 shadow-sm md:shadow-md md:col-span-1 my-8 max-h-[28rem]">

        <x-blog-paragraph>
            The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz.
            Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack.

            Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack! " my brave ghost pled.

            Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch "Jeopardy! ", Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz.
            Brawny gods just flocked up to quiz and vex him.
            Adjusting quiver and bow, Zompyc[1] killed the fox. <x-link href="{{ route('blog') }}">My faxed joke won a pager in the cable TV quiz show</x-link>. Amazingly few discotheques provide jukeboxes.
            My girl wove six dozen plaid jackets before she quit. Six big devils from Japan quickly forgot how
        </x-blog-paragraph>

        <x-nav-link>
            Link that can be labelled as active or inactive?
        </x-nav-link>

    </div>
    <x-secondary-button class="py-1 my-4">
        Secondary Button
    </x-secondary-button>
    <x-big-h3-quote>
        <x-slot:quote>The best way to take care of the future is to take care of the present moment.</x-slot:quote>

        <x-slot:author>Thich Nhat Hanh</x-slot:author>
    </x-big-h3-quote>
</div>
