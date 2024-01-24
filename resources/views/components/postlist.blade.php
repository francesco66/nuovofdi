{{-- tieni presente che è una grid a tre colonne --}}
<div class="flex flex-col m-4">
    {{-- sinistra --}}
    <div class="">
        <img class="" src="{{ asset('storage/' . $post->image_path) }}" alt="Post image" />
    </div>
    {{-- destra --}}
    <div class="grid md:pt-10 pt-6 text-center bg-slate-100">
        <div class="">
            <h2 class="text-4xl font-medium">{{ $post->title }}</h2>
        </div>
        <div>
            @if ($post->excerpt)
                <h2 class="text-2xl">{{ $post->excerpt }}</h2>
            @endif
        </div>
        <div>
            <a href="/posts/?author={{ $post->author->name }}" class="inline-block text-sm text-slate-700">di
                {{ $post->author->name }}</a><span class="text-xs text-slate-500">
                &#8226; {{ $post->created_at->formatLocalized('%A %d %B %Y') }}</span>
        </div>
        <div class="my-4">
            <a href='/posts/{{ $post->id }}'
                class="rounded-xl bg-blue-700 hover:bg-blue-600 text-md px-4 py-2 text-center text-white">Leggi</a>
        </div>
    </div>
</div>
