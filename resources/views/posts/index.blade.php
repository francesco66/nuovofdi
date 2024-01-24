<x-app-layout>
    <div class="m-auto pt-10">
        <p class="text-center text-xl text-white">
            POST INDEX
        </p>

        <div class="max-w-7xl m-auto">
            <div class="md:grid md:grid-cols-3 ">
                @foreach ($posts as $post)
                    <x-postlist :post=$post></x-postlist>
                @endforeach
            </div>
        </div>

        <div class="m-auto px-6 py-4">
            {{ $posts->links() }}
        </div>

    </div>
</x-app-layout>
