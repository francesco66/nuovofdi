<x-app-layout>
    <div class="m-auto pt-10">
        <p class="text-center text-xl text-white">
            POST EDIT
        </p>

        <div class="flex flex-col text-white gap-4 m-10">
            {{-- title, body,  --}}
            <form action={{ route('posts.update', $post) }} method="POST" enctype="multipart/form-data">
                {{-- <form action="/posts/{{ $post->id }}/update" method="POST" enctype="multipart/form-data"> --}}
                @csrf
                @method('patch')

                <div>
                    <label for="title" class="text-xl pb-2">TITOLO</label>
                </div>
                <div>
                    <input class="text-black" name="title" type="text" value="{{ $post->title }}">
                </div>

                <div>
                    <label for="body" class="text-xl pb-2">TESTO</label>
                </div>
                <div>
                    <textarea class="text-black" id="body" name="body" required
                        class="h-80 rounded border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ $post->body }}</textarea>
                </div>
                <div>
                    <button action="submit">SAVE</button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>
