<x-app-layout>

    <div class="flex flex-col items-center justify-center gap-8">

        <p class="text-white text-center mt-10">Ciao {{ Auth::user()->name }}</p>

        <div class="text-center my-6">
            <a href={{ route('posts.create') }}
                class="px-6 py-4 rounded-md border border-green-800 text-2xl  text-slate-300 hover:text-slate-100 bg-green-950 hover:bg-lime-950">Scrivi
                un post</a>
        </div>

        {{-- gestione dei post --}}
        <div class="w-4/5 bg-slate-200">
            <table class="table-auto w-full">
                <thead class="border-b border-slate-400 text-lg">
                    <tr>
                        <th>Id</th>
                        <th>Titolo</th>
                        <th>Data di pubblicazione</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <h1 class="p-2 text-md">{{ $loop->iteration }} - id: {{ $post->id }}</h1>
                            </td>
                            <td>
                                <h1 class="text-md">{{ $post->title }}</h1>
                            </td>
                            <td>
                                <h1 class="text-md">{{ $post->created_at->formatLocalized('%d %B %Y') }}</h1>
                            </td>
                            <td>
                                {{-- UPDATE --}}
                                <button class="px-2 rounded-md border border-blue-800 text-md  text-slate-300 hover:text-slate-100 bg-blue-600 hover:bg-blue-800">
                                    <a href="/posts/{{ $post->id }}/edit">Modifica</a>
                                </button>
                            </td>
                            <td>
                                {{-- DELETE --}}
                                <form action="/posts/{{ $post->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-2 rounded-md border border-red-800 text-md  text-slate-300 hover:text-slate-100 bg-red-500 hover:bg-red-600" onclick="return confirm('Sei sicuro?')">Cancella</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>

{{-- <x-app-layout>
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
                            <a href="/posts/{{ $post->id }}/edit" class="px-4 text-sm text-slate-500">Modifica</a>
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
</x-app-layout> --}}
