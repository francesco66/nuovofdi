<x-app-layout>
    {{-- CORPO CENTRALE DELLA PAGINA --}}
    <div class="">
        <h1 class="text-6xl text-white text-center m-auto pt-12">ManifestO</h1>
    </div>

    {{-- MANIFESTO --}}
    <main class="container mx-auto pb-4">

        <div
            class="lg:p-4 p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 lg:mt-10 mt-6">

            <img class="w-full" src="{{ asset('img/csm_fardello_c7318303cf.jpg') }}" alt="">

            <div class="text-xl text-center px-6 bg-white overflow-hidden md:col-span-2">
                <div class="text-xl py-20">
                    <p>Stufi dei conflitti binari, bianco/nero, bello/brutto, bene/male,</p>
                    <p>vogliamo idee universali con tutte le sfumature e le differenze.</p>
                    <p>Vogliamo pensare tridimensionalmente.</p>
                    <br />
                    <p>Vogliamo che la persona sia libera nella scelta qualunque essa sia</p>
                    <p>e vogliamo che questa libertà sia responsabile.</p>
                    <p>Vogliamo essere consapevoli delle nostre vite</p>
                    <p>e potere agire di conseguenza.</p>
                    <br />
                    <p>Vogliamo consapevolmente vivere.</p>
                    <p>Vogliamo consapevolmente esserci.</p>
                </div>
            </div>

            <img class="w-full" src="{{ asset('img/pexels-artsy-solomon-1108822.jpg') }}" alt="">

            <img class="w-full" src="{{ asset('img/pexels-the-lost-ninja-3849640.jpg') }}" alt="">

            <img class="w-full" src="{{ asset('img/pexels-ln-dangol-2409958.jpg') }}" alt="">

        </div>
    </main>

    {{-- FOOTER --}}
    {{-- <div class="mx-auto p-6 bg-blue-100">
        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                Footer left
            </div>
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Footer right
            </div>
        </div>
    </div> --}}

</x-app-layout>
