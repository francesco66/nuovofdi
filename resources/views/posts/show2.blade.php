<x-app-layout>
    <div class="m-auto pt-10 px-6">
        <p class="text-center text-xl text-white">
            POST SHOW
        </p>

        <h1 class="text:md text-white">{{ $post->title }}</h1>
        <h1 class="text:md text-white">{{ $post->author->name }}</h1>
        <h1 class="text:md text-white">{{ $post->body }}</h1>

        <div>
            <p class="text-center mx-auto mt-10 text-white">Check: {{ Auth::check() }}</p>
            <p class="text-center mx-auto mt-10 text-white">Guest: {{ Auth::guest() }}</p>
        </div>

        <div>
            <p class="pt-10 text-3xl text-white text-center">Commenti</p>
            <p class="pt-1 text-lg text-white text-center">Devi essere registrato per commentare</p>
        </div>

        {{-- form per commentare il post --}}
        <x-comments.form :post=$post></x-comments.form>
        {{-- lista dei commenti al post --}}
        {{-- @include ('comments.list', ['collection' => $comments['root']]) --}}
        <x-comments.list :collection="$comments['root']" :post=$post></x-comments.list>
        {{-- <ul>
            @foreach ($comments as $comment)
                <x-comments.comment :comment=$comment :post=$post></x-comments.comment> --}}
                {{-- <x-comments.form :post=$post :parentId="$comment->id"></x-comments.form> --}}
            {{-- @endforeach
        </ul> --}}

    </div>
</x-app-layout>
