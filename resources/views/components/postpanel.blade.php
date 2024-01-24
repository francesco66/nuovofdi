<div class="grid md:grid-cols-2 md:max-w-7xl m-auto text-center bg-slate-100 rounded-xl">
    <div class="">
        <img class="rounded-xl" src="{{ asset('storage/' . $post->image_path) }}" alt="Post image" />
    </div>
    <div class="grid content-center mt-10 px-10">
        <h2 class="text-4xl">{{ $post->title }}</h2>
        <!-- excerpt (opzionale) -->
        @if ($post->excerpt)
            <h2 class="text-2xl mt-8">{{ $post->excerpt }}</h2>
        @endif
        <div class="mt-10">
            <a href="/posts/?author={{ $post->author->name }}" class="inline-block text-md text-slate-700">di
                {{ $post->author->name }}</a><span class="text-sm text-slate-500">
                &#8226; {{ $post->created_at->formatLocalized('%A %d %B %Y') }}</span>
        </div>
    </div>
    <div class="md:p-20 p-6 md:col-span-2 ">
        <p class="md:text-lg text-md">{!! nl2br($post->body) !!}</p>
    </div>
</div>

</div>
