<x-app-layout>

    {{-- <div class="max-w-7xl mx-auto p-6 lg:p-8"> --}}
    <div class="">

        <x-banner />

        <section class="px-6 py-4 bg-white">

            <div class="pt-8 md:pt-10 pb-10 text-xl text-center">
                <p>Saremo noi a portare il vostro peso.</p>
                <p>Siamo ciò che siamo e vogliamo più di quel che abbiamo.</p>
                <p>Saremo presenti quando altri saranno assenti.</p>
                <br />
                <p>La rivoluzione comincia dal basso,</p>
                <p>la reazione proviene dall'alto,</p>
                <p>la virtù sta nel mezzo.</p>
                <br />
                <p>Noi ci poniamo in verticale,</p>
                <p>attraversando tutto, vedendo tutto.</p>
                <br />
                <p>Noi viviamo in orizzontale,</p>
                <p>sentendo le persone ai lati.</p>
                <br />
                <p>Saremo quello che vorremo.</p>
            </div>
        </section>

        <div id="posts" class="m-8">
            <p class="text-center text-2xl text-white mb-4">LISTA DEI POST</p>

            <div class="max-w-7xl m-auto">
                <div class="md:grid md:grid-cols-3 justify-items-center">
                    @foreach ($posts as $post)
                        <x-postlist :post=$post></x-postlist>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="text-center mx-auto mt-10">
            <a href="posts"
                class="px-6 py-4 rounded-md border border-green-800 text-2xl  text-slate-300 hover:text-slate-100 bg-green-950 hover:bg-lime-950">Vedi
                tutti i post</a>
        </div>

    </div>

</x-app-layout>
