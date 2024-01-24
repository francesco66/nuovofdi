<x-app-layout>

    <div class="text-center xl:text-9xl lg:text-8xl md:text-6xl sm:text-5xl text-4xl py-6 font-semibold"
        style="text-shadow: 2px 2px 4px black;">
        <h1 class="text-green-700">FARDE<span class="inline text-white">LLI D'</span><span
                class="inline text-red-600">ITALIA</span>
        </h1>
    </div>

    <div class="flex flex-row mx-10">

        <div class="w-1/2">
            <div class="flex justify-center sm:items-center py-4 sm:pt-0">
                <div class="flex flex-col items-center">
                    <div class="w-fit px-6">
                        <img src="{{ asset('img/logo2_copy.png') }}"
                            alt="Logo del movimento - uomo stilizzato piegato che porta il peso dell'Italia">
                    </div>
                    <h2 class="text-3xl md:text-5xl text-white py-6" style="text-shadow: 2px 2px 4px black;">porteremo
                        il vostro peso</h2>
                </div>
            </div>
        </div>

        <div class="w-1/2 text-white m-20">
            <p class="text-xl">Lato destro</p>
            <p class="text-xl">Info</p>
            <p class="text-xl">Chi siamo</p>
            <p class="text-xl">Contatti</p>
            <p class="text-xl">Idee</p>
        </div>

        {{-- <div class="mt-4 md:mx-20 p-10 text-center text-2xl text-white border-t-2 border-t-white">
            <p class="pb-6">Per informazioni: <span class="hover:text-blue-700"><a href="mailto:info@fardelliditalia.eu" class="underline">info@fardelliditalia.eu</a></span></p>
            <p class="pb-6">Per proposte: <span class="hover:text-blue-700"><a href="mailto:proposte@fardelliditalia.eu" class="underline">proposte@fardelliditalia.eu</a></span></p>
        </div> --}}

    </div>
</x-app-layout>
