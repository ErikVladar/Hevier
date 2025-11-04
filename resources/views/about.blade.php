<x-app-layout>
    <x-foreground>
        <section class="relative w-full min-h-screenitems-center justify-center text-center rounded-t-3xl">
            <div class="w-full relative bg-cover bg-centerm-32 items-center justify-center"> </div>
            <section class="relative w-full overflow-hidden">
                <section class="text-gray-900 py-12">
                    <div style="border:12px solid rgb(122, 122, 122)"
                        class="relative flex flex-col items-center space-y-8 mt-32 mb-12 w-full mt-32 bg-stone-100 rounded-2xl">
                        <div class="py-4 md:px-8">
                            <section>
                                <div class="space-y-16 mt-12 mx-4 max-w-7xl">

                                    <div
                                        class="animate__animated animate__zoomIn animate__slow p-10 rounded-2xl bg-gradient-to-br">
                                        <div class="">

                                            <div x-data="{ editing: false }" class="relative transform -mt-20">
                                                <div x-show="!editing"
                                                    class="relative inline-block bg-gradient-to-br from-yellow-400 to-yellow-200 text-white p-6 rounded-xl shadow-2xl transform -rotate-1">
                                                    <h2
                                                        class="text-3xl md:text-4xl text-black font-extrabold leading-tight">
                                                        {{ $content['about']['about_section_title'] ?: 'O čom je kniha' }}
                                                    </h2>
                                                    @auth
                                                        <button @click.prevent="editing = true"
                                                            class="absolute -top-3 -right-3 p-2 bg-white/90 text-black rounded-full shadow hover:bg-gray-100 z-10">✏️</button>
                                                    @endauth
                                                </div>

                                                <div x-show="editing" class="pt-20 transform rotate-0">
                                                    <form method="POST" action="{{ route('content.update') }}"
                                                        class="bg-white p-4 rounded-2xl shadow-md">
                                                        @csrf
                                                        <input type="hidden" name="field"
                                                            value="about_section_title">
                                                        <input type="text" name="about_section_title"
                                                            value="{{ old('about_section_title', $content['about']['about_section_title']) }}"
                                                            class="w-full border rounded px-3 py-2 text-2xl font-bold text-center mb-3 focus:outline-none focus:ring focus:ring-red-400">
                                                        <div class="flex gap-2 justify-center">
                                                            <button type="submit"
                                                                class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Uložiť</button>
                                                            <button type="button" @click.prevent="editing=false"
                                                                class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Zrušiť</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div x-data="{ editing: false }" class="relative pt-8">
                                                <div x-show="!editing">
                                                    <p
                                                        class="text-xl md:text-2xl text-gray-800 leading-relaxed text-justify">
                                                        {{ $content['about']['about_section_body'] }}
                                                    </p>
                                                    @auth
                                                        <button @click.prevent="editing = true"
                                                            class="absolute -top-4 -right-4 p-2 bg-white text-black rounded-full shadow hover:bg-gray-200 z-10">✏️</button>
                                                    @endauth
                                                </div>

                                                <div x-show="editing">
                                                    <form method="POST" action="{{ route('content.update') }}"
                                                        class="bg-white p-4 rounded-2xl shadow-md">
                                                        @csrf
                                                        <input type="hidden" name="field" value="about_section_body">
                                                        <textarea name="about_section_body"
                                                            class="w-full border rounded px-3 py-2 text-lg leading-relaxed text-center focus:outline-none focus:ring focus:ring-red-400">{{ old('about_section_body', $content['about']['about_section_body']) }}</textarea>
                                                        <div class="flex gap-2 mt-3 justify-center">
                                                            <button type="submit"
                                                                class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Uložiť</button>
                                                            <button type="button" @click.prevent="editing=false"
                                                                class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Zrušiť</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>




                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center ">
                                        <div
                                            class="animate__animated animate__slideInLeft animate__slow p-8 rounded-2xl bg-gradient-to-br">
                                            {{--  from-blue-100 to-blue-200"> --}}
                                            <div x-data="{ editing: false }" class="-mt-12 relative w-full">
                                                <div x-show="!editing">
                                                    <div x-show="!editing"
                                                        class="relative bg-gradient-to-br from-yellow-400 to-yellow-200 text-white p-4 rounded-xl shadow-2xl transform rotate-2">

                                                        <h2 class="text-4xl md:text-5xl font-semibold text-black mb-4">
                                                            Pre
                                                            koho
                                                            je určená</h2>
                                                    </div>
                                                    <ul
                                                        class="text-xl pt-8 md:text-2xl list-disc text-justify list-inside text-black space-y-2">
                                                        <li>{{ $content['about']['for_whom_1'] ?? '' }}</li>
                                                        <li>{{ $content['about']['for_whom_2'] ?? '' }}</li>
                                                        <li>{{ $content['about']['for_whom_3'] ?? '' }}</li>
                                                    </ul>
                                                    @auth
                                                        <button @click.prevent="editing = true"
                                                            class="absolute -top-4 -right-4 p-2 bg-white text-black rounded-full shadow hover:bg-gray-200 z-10">
                                                            ✏️
                                                        </button>
                                                    @endauth
                                                </div>

                                                <div x-show="editing">
                                                    <form method="POST" action="{{ route('content.update') }}"
                                                        class="flex flex-col gap-2">
                                                        @csrf
                                                        <input type="hidden" name="field" value="for_whom">
                                                        <input type="text" name="for_whom_1"
                                                            value="{{ old('for_whom_1', $content['about']['for_whom_1'] ?? '') }}"
                                                            class="w-full border rounded px-2 py-1 text-center mb-1">
                                                        <input type="text" name="for_whom_2"
                                                            value="{{ old('for_whom_2', $content['about']['for_whom_2'] ?? '') }}"
                                                            class="w-full border rounded px-2 py-1 text-center mb-1">
                                                        <input type="text" name="for_whom_3"
                                                            value="{{ old('for_whom_3', $content['about']['for_whom_3'] ?? '') }}"
                                                            class="w-full border rounded px-2 py-1 text-center">
                                                        <div class="flex gap-2 mt-2 justify-center">
                                                            <button type="submit"
                                                                class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Uložiť</button>
                                                            <button type="button" @click.prevent="editing=false"
                                                                class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Zrušiť</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="animate__animated animate__slideInRight animate__slow flex items-center justify-center transform -rotate-2">
                                            <div class="relative inline-block">
                                                <div
                                                    class="absolute -top-2 -right-2 w-5 h-5 bg-yellow-500 rounded-full shadow-md border border-yellow-700 z-10">
                                                </div>
                                                <div
                                                    class="absolute -top-2 -left-2 w-5 h-5 bg-yellow-500 rounded-full shadow-md border border-yellow-700 z-10">
                                                </div>

                                                <img src="storage/imgs/artwork.png"
                                                    alt="Ilustrácia: Strážcovia pohybu — kniha a deti v pohybe"
                                                    class="rounded-2xl shadow-md max-w-sm object-cover" />
                                            </div>
                                        </div>

                                    </div>


                                    <div
                                        class="animate__animated animate__zoomIn animate__slow lg:col-span-2 space-y-2 p-8 rounded-2xl bg-gradient-to-br from-blue-100 to-blue-200">
                                        <div x-data="{ editing: false }" class="relative w-full -mt-12">
                                            <div x-show="!editing">
                                                <div
                                                    class="relative inline-block bg-gradient-to-br from-yellow-400 to-yellow-200 text-white px-6 py-3 mb-12 rounded-xl shadow-2xl transform -rotate-2">
                                                    <h2 class="text-4xl md:text-5xl font-semibold text-black">
                                                        Prečo kúpiť
                                                    </h2>
                                                </div>

                                                <p class="text-xl text-justify md:text-2xl text-black leading-relaxed">
                                                    {{ $content['about']['why_buy_body'] }}</p>
                                                @auth
                                                    <button @click.prevent="editing = true"
                                                        class="absolute -top-4 -right-4 p-2 bg-white text-black rounded-full shadow hover:bg-gray-200 z-10">✏️</button>
                                                @endauth
                                            </div>
                                            <div x-show="editing">
                                                <form method="POST" action="{{ route('content.update') }}">
                                                    @csrf
                                                    <input type="hidden" name="field" value="why_buy">
                                                    <input type="text" name="why_buy_title"
                                                        value="{{ old('why_buy_title', $content['about']['why_buy_title'] ?? '') }}"
                                                        class="w-full border rounded px-2 py-1 text-center mb-1">
                                                    <textarea name="why_buy_body" class="w-full border rounded px-2 py-1 text-center">{{ old('why_buy_body', $content['about']['why_buy_body'] ?? '') }}</textarea>
                                                    <div class="flex gap-2 mt-2 justify-center">
                                                        <button type="submit"
                                                            class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Uložiť</button>
                                                        <button type="button" @click.prevent="editing=false"
                                                            class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Zrušiť</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                            </section>
                        </div>
                    </div>

                    
                    <div style="border:12px solid rgb(122, 122, 122)"
                        class="relative flex flex-col items-center space-y-8 mt-32 mb-12 w-full mt-32 bg-stone-100 rounded-2xl">
                        <div class="-mt-20">
                            <div
                                class="relative inline-block bg-gradient-to-br from-yellow-400 to-yellow-200 text-white px-6 py-3 rounded-xl shadow-2xl transform rotate-1 mt-12">
                                <h3
                                    class="animate__animated animate__zoomIn animate__slow text-5xl text-black font-semibold mt-4 mb-4">
                                    Prečo to ocenia rodičia?
                                </h3>
                            </div>
                        </div>

                        <div class="flex space-x-8">

                            <div
                                class="flex items-center text-black justify-center bg-yellow-200 text-2xl md:text-4xl content-justify shadow-xl font-semibold text-right w-48 md:w-64 h-28 md:h-32 flex-shrink-0 rotate-1">

                                <div
                                    class="absolute -top-2 w-5 h-5 bg-red-500 rounded-full shadow-md border border-red-700 z-10">
                                </div>
                                <h3>Zdravý vzor</h3>
                            </div>

                            <div
                                class="flex items-center text-black justify-center bg-white w-64 md:w-[28rem] shadow-xl text-left text-sm md:text-lg px-8 h-28 md:h-32 leading-relaxed -rotate-1">

                                <div
                                    class="absolute -top-2 w-5 h-5 bg-red-500 rounded-full shadow-md border border-red-700 z-10">
                                </div>
                                <p>Nie je to suché moralizovanie, ale napínavý príbeh, v ktorom sa deti učia nenápadne –
                                    cez emócie a zážitky.</p>
                            </div>

                            {{-- <x-text-extend-left title="Zdravý vzor"
                                description="Nie je to suché moralizovanie, ale napínavý príbeh, v ktorom sa deti učia nenápadne – cez emócie a zážitky." /> --}}
                        </div>

                        <div class="-rotate-1">
                            <div
                                class="absolute -top-3 -right-3 w-5 h-5 bg-blue-500 rounded-full shadow-md border border-blue-700 z-10">
                            </div>
                            <x-text-extend-right title="Dobrodružstvo + ponaučenie"
                                description="Príbeh, ktorý deti vtiahne a zároveň ich vedie k pohybu a zdraviu." />
                        </div>
                        <div class="rotate-1">
                            <div
                                class="absolute -top-3 -left-3 w-5 h-5 bg-green-500 rounded-full shadow-md border border-green-700 z-10">
                            </div>
                            <x-text-extend-left title="Spojenie rodiny"
                                description="Kniha vytvára priestor na rozhovory o zdravom životnom štýle, pohybe a hodnotách." />
                        </div>
                    </div>



                    <div style="border:12px solid rgb(159, 151, 139)"
                        class="relative flex flex-col items-center space-y-8 mt-32 mb-12  w-full rounded-2xl bg-stone-300">
                        <div class="-mt-20">
                            <div
                                class="relative inline-block bg-gradient-to-br from-yellow-400 to-yellow-200 text-white px-6 py-3 rounded-xl shadow-2xl transform -rotate-1 mt-12">

                                <h3 class="text-5xl text-black font-semibold ">Kľúčové témy
                                </h3>
                            </div>
                        </div>
                        {{-- <div class="absolute inset-0 flex justify-center pointer-events-none">
                            <div class="relative w-96 h-full">
                                <svg class="absolute inset-0 w-full h-full text-blue-700" viewBox="0 0 100 200"
                                    fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                    <path d="M50 0
                                           C50 20, 48 50, 50 80
                                           C52 110, 49 140, 50 170
                                           C51 185, 50 200, 50 200" stroke="currentColor" stroke-width="6"
                                        stroke-linecap="round" fill="none" />
                                    <path d="M50 15 C65 25, 65 35, 83 45" stroke="currentColor" stroke-width="5"
                                        stroke-linecap="round" />
                                    <path d="M50 40 C35 50, 25 65, 20 85" stroke="currentColor" stroke-width="5"
                                        stroke-linecap="round" />
                                    <path d="M50 85 C65 75, 70 90, 83 125" stroke="currentColor" stroke-width="5"
                                        stroke-linecap="round" />
                                    <path d="M50 130 C35 135, 30 150, 20 175" stroke="currentColor" stroke-width="5"
                                        stroke-linecap="round" />
                                </svg>

                                <svg class="absolute inset-0 w-full h-full text-gray-300" viewBox="0 0 100 200"
                                    fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                    <path d="M50 0
                                           C50 20, 48 50, 50 80
                                           C52 110, 49 140, 50 170
                                           C51 185, 50 200, 50 200" stroke="currentColor" stroke-width="4"
                                        stroke-linecap="round" fill="none" />
                                    <path d="M50 15 C65 25, 65 35, 83 45" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" />
                                    <path d="M50 40 C35 50, 25 65, 20 85" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" />
                                    <path d="M50 85 C65 75, 70 90, 83 125" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" />
                                    <path d="M50 130 C35 135, 30 150, 20 175" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg>
                            </div>

                        </div> --}}

                        <div class="-rotate-1">
                            <div
                                class="absolute -top-3 -right-3 w-5 h-5 bg-yellow-500 rounded-full shadow-md border border-yellow-700 z-10">
                            </div>
                            <x-text-extend-right title="Energia a radosť"
                                description="Príbehy znázorňujú pohyb ako prirodzený zdroj radosti a energie — nie ako povinnosť. Deti sa učia, že pohyb zlepšuje náladu, sústredenie a zdravie." />
                        </div>

                        <div class="rotate-1">
                            <div
                                class="absolute -top-3 -left-3 w-5 h-5 bg-blue-500 rounded-full shadow-md border border-blue-700 z-10">
                            </div>
                            <x-text-extend-left title="Sila priateľstva"
                                description="Hrdinovia riešia úlohy spoločne. Dôraz je na tímovej práci, vzájomnej podpore a empatii — jednoduché lekcie, ktoré dieťa môže praktizovať v hre." />
                        </div>

                        <div class="-rotate-1">
                            <div
                                class="absolute -top-3 -right-3 w-5 h-5 bg-green-500 rounded-full shadow-md border border-green-700 z-10">
                            </div>
                            <x-text-extend-right title="Prekonávanie strachu"
                                description="Každá výzva v knihe rozpráva o odvahu v malých krokoch — ako čeliť obavám, skúšať nové veci a rásť cez skúsenosť." />
                        </div>
                        <div class="rotate-1">
                            <div
                                class="absolute -top-3 -left-3 w-5 h-5 bg-red-500 rounded-full shadow-md border border-red-700 z-10">
                            </div>
                            <x-text-extend-left title="Rodinné prepojenie"
                                description="Kniha obsahuje jednoduché aktivity a otázky pre rodičov, ktoré podporujú rozhovor po čítaní a budovanie spoločných spomienok." />
                        </div>
                    </div>

                </section>
            </section>
        </section>
    </x-foreground>
    <x-eshop />
</x-app-layout>
