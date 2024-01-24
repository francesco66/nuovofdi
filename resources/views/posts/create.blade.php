<x-app-layout>
    <div class="m-auto pt-10">
        <p class="text-center text-xl text-white">
            POST CREATE
        </p>

        {{-- <div class="flex flex-col text-white gap-4 m-10">
            <form action={{ route('posts.store') }} method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="title" class="text-xl pb-2">TITOLO</label>
                </div>
                <div>
                    <input class="text-black" name="title" type="text" value="{{ old('title') }}">
                </div>

                <div>
                    <label for="body" class="text-xl pb-2">TESTO</label>
                </div>
                <div>
                    <textarea class="text-black" id="body" name="body" required
                        class="h-80 rounded border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('body') }}</textarea>
                </div>
                <div>
                    <button action="submit">SAVE</button>
                </div>
            </form>
        </div> --}}

    </div>


    <div class="w-4/5 pt-5 md:pt-10 m-auto">

        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- TITOLO -->
            <div class="mt-4 flex flex-col">
                <label for="title" class="text-white text-xl pb-2">TITOLO</label>
                <input name="title" type="text" value="{{ old('title') }}"
                    class="border-0 border-b-2 border-gray-400 shadow-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <!-- DESCRIZIONE - opzionale -->
            <div class="mt-4 flex flex-col">
                <label for="excerpt" class="text-white text-xl pb-2">DESCRIZIONE (opzionale)</label>
                <input name="excerpt" type="text" value="{{ old('excerpt') }}"
                    class="border-0 border-b-2 border-gray-400 shadow-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <!-- TESTO -->
            {{-- <x-fardelli.textarea name="body" nome="testo" /> --}}
            <div class="mt-4 flex flex-col">
                <label for="body" class="text-white text-xl pb-2">TESTO</label>
                <!-- rows="30" -->
                <textarea id="body" name="body" required
                    class="h-80 rounded border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('body') }}</textarea>

            </div>

            <!-- IMMAGINE -->
            <div class="mt-4 flex flex-col border-b-2 border-slate-500 pb-8">
                <label for="image" class="text-white text-xl pb-2">IMMAGINE</label>
                <div class="flex justify-between gap-6">
                    <input name="image" type="file" id="selectImage"
                        class="file-input file-input-bordered file-input-sm shadow-md max-w-xl" />
                    {{-- preview --}}
                    <img id="preview" name="preview" class="object-cover h-48 w-80">

                </div>

                <div class="mt-4 flex flex-col">
                    <label for="image_author" class="text-white text-xl pb-2">AUTORE DELL'IMMAGINE (opzionale)</label>
                    <input name="image_author" type="text" value="{{ old('image_author') }}"
                        class="border-0 border-b-2 border-gray-400 shadow-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

            </div>

            <!-- INVIA -->
            <button action="submit" class="my-4 px-4 py-2 rounded-md border border-green-800 text-xl  text-slate-300 hover:text-slate-100 bg-green-950 hover:bg-lime-950">
                Salva
            </button>

        </form>

        @if ($errors->any())
            <div class="w-4/5 m-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
    @push('script')
        <script>
            selectImage.onchange = evt => {
                preview = document.getElementById('preview');
                preview.style.display = 'block';
                const [file] = selectImage.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
    @endpush

</x-app-layout>
