<div class="flex flex-col justify-center">
    <div class="md:m-6 m-2 px-4 md:py-4 py-2 rounded-xl border-2 border-green-800 bg-slate-100">
        <div class="md:flex flex-row gap-4">
            <div class="">
                <img class="" src="{{ asset('storage/' . $post->image_path) }}" alt="Post image" />
            </div>
            <div class="text-center relative">
                <h2 class="text-4xl mt-10">{{ $post->title }}</h2>
                <!-- excerpt (opzionale) -->
                @if ($post->excerpt)
                    <h2 class="text-2xl mt-8">{{ $post->excerpt }}</h2>
                @endif
                <div class="mt-10">
                    <a href="/posts/?author={{ $post->author->name }}" class="inline-block text-sm text-slate-700">di
                        {{ $post->author->name }}</a><span class="text-xs text-slate-500">
                        &#8226; {{ $post->created_at->formatLocalized('%A %d %B %Y') }}</span>
                </div>
                <div>
                    @if (Route::is('home') or Route::is('posts.index'))
                        <div class="line-clamp-4 mt-10 mb-10">
                            <p class="text-md">{!! nl2br($post->body) !!}</p>
                        </div>
                        <div class="absolute bottom-0 right-0">
                            <a href='/posts/{{ $post->id }}'
                                class="rounded-xl bg-blue-700 hover:bg-blue-600 text-md px-4 py-2 text-center text-white">Leggi</a>
                        </div>
                    @else
                        <div class="mt-10 mb-10">
                            <p class="text-md">{!! nl2br($post->body) !!}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
