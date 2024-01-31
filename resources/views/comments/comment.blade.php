<li>
    <div class="bg-slate-900 md:px-4 px-2 py-2">

        <div class="flex items-center mb-2">
            <div>
                <img class="mr-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="https://i.pravatar.cc/200" alt="">
            </div>
            <div class="leading-relaxed text-white">
                <strong>{{ $comment->author->name }}</strong>
                <p class="text-sm text-gray-400 mb-2">{{ $comment->created_at->formatLocalized('%A %d %B %Y') }}</p>
            </div>
        </div>

        {{-- messaggio --}}
        <div class="w-1/3 bg-slate-800 text-white border rounded-lg pl-2 py-1 sm:py-2 leading-relaxed">
            <p class="text-md">{!! nl2br($comment->body) !!}</p>
            @can('delete', $comment)
                <div class="flex justify-end mr-2">
                    @include ('comments.deleteform', ['post' => $post, 'comment' => $comment])
                </div>
            @endcan
        </div>

        @if (Auth::check())
            @include ('comments.form', ['parentId' => $comment->id])
            {{-- @can('delete', $comment)
                @include ('comments.deleteform', ['post' => $post, 'comment' => $comment])
            @endcan --}}
        @endif

        <div class="ml-10">
            @if (isset($comments[$comment->id]))
                @include ('comments.list', ['collection' => $comments[$comment->id]])
            @endif
        </div>

    </div>
</li>
