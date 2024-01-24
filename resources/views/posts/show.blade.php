<x-app-layout>
    <div class="m-auto pt-10">
        <x-postpanel :post=$post></x-postpanel>

        {{-- <div>
            <p class="text-center mx-auto mt-10 text-white">Check: {{ Auth::check() }}</p>
            <p class="text-center mx-auto mt-10 text-white">Guest: {{ Auth::guest() }}</p>
        </div> --}}

        <div>
            <p class="pt-10 text-3xl text-white text-center">Commenti</p>
            {{-- <p class="pt-1 text-lg text-white text-center">Devi essere registrato per commentare</p> --}}
        </div>

        {{-- form per commentare il post (comments['root']) --}}
        @if (Auth::check())
            <div class="p-6">
                {{-- <h3 class="text-white">Vuoi commentare?</h3> --}}
                @include ('comments.form')
            </div>
        @else
            <p class="pt-1 text-lg text-white text-center">Devi essere registrato per commentare</p>
        @endif

        <div class="border-t-2 border-white"></div>

        {{-- lista dei commenti al post con relativa form per replicare al commento --}}
        <div id="commenti" name="commenti">
            @if ($comments->count())
                @include ('comments.list', ['collection' => $comments['root']])
            @else
                <p class="text-md text-white p-6">Non ci sono ancora commenti</p>
            @endif
        </div>

    </div>
</x-app-layout>
