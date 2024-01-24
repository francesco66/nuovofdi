<li>
    <div class="bg-slate-900 md:px-4 px-2 py-2">
        <div class="flex flex-col">
            <div class="flex items-center pl-2">
                <div class="flex-shrink-0">
                    <img class="mr-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="https://i.pravatar.cc/200" alt="">
                </div>
                <div class="bg-slate-100 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>{{ $comment->author->name }}</strong> <span class="text-xs text-gray-400">&#8226;
                        {{ $comment->created_at->formatLocalized('%A %d %B %Y') }}</span>
                    <p class="mt-2 text-sm">{{ $comment->body }}</p>
                </div>
            </div>

            @if (Auth::check())
                @include ('comments.form', ['parentId' => $comment->id])
            @endif

            @if (isset($comments[$comment->id]))
                @include ('comments.list', ['collection' => $comments[$comment->id]])
            @endif

        </div>
    </div>
</li>
