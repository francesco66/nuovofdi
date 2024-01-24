<form method="POST" action="/posts/{{ $post->id }}/comments" class="my-2 rounded-lg">
    @csrf

    @if (isset($parentId))
        <input name="parent_id" type="hidden" value="{{ $parentId }}">
    @endif

    <div class="flex gap-4 items-center">
        <textarea name="body" id="body"
            class="resize-none h-10 text-sm rounded-lg outline-none focus:outline-none focus:ring bg-slate-300 text-slate-700"
            {{-- style="resize-none" --}}
            placeholder="Vuoi commentare?" required></textarea>

        @error('body')
            <span class="text-sm text-red-600">{{ $message }}</span>
        @enderror

        <button type="submit"
            class="h-10 p-2 my-2 md:text-md text-slate-100 bg-blue-500 hover:bg-blue-700 rounded-xl">Rispondi</button>
    </div>
</form>
