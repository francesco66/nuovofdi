<x-app-layout>
    <div class="py-12">
        <div class="text-center mx-auto m-10">
            <a href={{ route('posts.create') }}
                class="px-6 py-4 rounded-md border border-green-800 text-2xl  text-slate-300 hover:text-slate-100 bg-green-950 hover:bg-lime-950">Scrivi
                un post</a>
        </div>
        <p class="text-white text-center">Lista dei post di {{ Auth::user()->name }} - admin</p>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <div class="flex justify-between m-auto p-6 bg-white border-b-2 border-slate-500">
                        <div>
                            <h1 class="px-4 text-xl">{{ $loop->iteration }} - id: {{ $post->id }}</h1>
                        </div>
                        <div>
                            <h1 class="px-4 text-xl">{{ $post->title }}</h1>
                        </div>
                        <div>
                            {{-- UPDATE --}}
                            <a href="/posts/{{ $post->id }}/edit" class="px-4 text-sm text-slate-500">Modifica</a>
                            {{-- DELETE --}}
                            <form action="/posts/{{ $post->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Sei sicuro?')">Cancella</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
