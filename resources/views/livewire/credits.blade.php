<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="max-w-5xl text-sm mx-auto px-6 my-8 py-12 text-slate-300 text-center">
        <div class="mb-6 italic">
            @if(!$garveyQuotes->isEmpty())
                @foreach($garveyQuotes as $quote)
                    <p class="text-lime-300">"{{ $quote }}."<span class="font-semibold font-serif">~ Marcus Garvey.</span></p>
                @endforeach
            @else
                <p class="text-lime-300">"We are determined to be somebody, someday, somehow."<span class="font-semibold font-serif">~ Marcus Garvey.</span></p>
            @endif

        </div>
        <p class="inline-flex px-px"><a href="https://github.com/mwanginjuguna">Mwangi Njuguna (Kanothe)</a><span class="align-super">&copy</span> ~ ({{ now()->year }})</p>
    </div>
</div>
