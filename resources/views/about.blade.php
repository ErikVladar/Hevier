<x-app-layout>
    <x-foreground>
        <section class="relative w-full min-h-screenitems-center justify-center text-center rounded-t-3xl">
            <div class="w-full relative bg-cover bg-centerm-32 items-center justify-center"> </div>
            <section class="relative w-full overflow-hidden">
                <section class="text-gray-900 py-12 px-6">
                    <div class="p-8">
                        <section>
                            <div class="space-y-16 max-w-7xl mx-auto px-6">
                            
                                <div class="animate__animated animate__zoomIn animate__slow space-y-6 p-8 rounded-2xl">
                                    <div x-data="{ editing: false }" class="relative w-full">
                                        <div x-show="!editing">
                                            <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">{{ $content['about']['about_section_title'] ?: 'O čom je kniha' }}</h2>
                                            @auth
                                                <button @click.prevent="editing = true"
                                                    class="absolute -top-4 -right-4 p-2 bg-white text-black rounded-full shadow hover:bg-gray-200 z-10">✏️</button>
                                            @endauth
                                        </div>
                                        <div x-show="editing">
                                            <form method="POST" action="{{ route('content.update') }}">
                                                @csrf
                                                <input type="hidden" name="field" value="about_section_title">
                                                <input type="text" name="about_section_title" value="{{ old('about_section_title', $content['about']['about_section_title']) }}"
                                                    class="w-full border rounded px-2 py-1 text-center text-3xl font-bold mb-2">
                                                <div class="flex gap-2 mt-2 justify-center">
                                                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Uložiť</button>
                                                    <button type="button" @click.prevent="editing=false" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Zrušiť</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            
                                    <div x-data="{ editing: false }" class="relative w-full">
                                        <div x-show="!editing">
                                            <p class="text-xl text-justify md:text-2xl text-black leading-relaxed">{{ $content['about']['about_section_body'] }}</p>
                                            @auth
                                                <button @click.prevent="editing = true"
                                                    class="absolute -top-4 -right-4 p-2 bg-white text-black rounded-full shadow hover:bg-gray-200 z-10">✏️</button>
                                            @endauth
                                        </div>
                                        <div x-show="editing">
                                            <form method="POST" action="{{ route('content.update') }}">
                                                @csrf
                                                <input type="hidden" name="field" value="about_section_body">
                                                <textarea name="about_section_body" class="w-full border rounded px-2 py-1 text-center">{{ old('about_section_body', $content['about']['about_section_body']) }}</textarea>
                                                <div class="flex gap-2 mt-2 justify-center">
                                                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Uložiť</button>
                                                    <button type="button" @click.prevent="editing=false" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Zrušiť</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                                    <div class="animate__animated animate__slideInLeft animate__slow p-8 rounded-2xl">
                                        <div x-data="{ editing: false }" class="relative w-full">
                                            <div x-show="!editing">
                                                <h2 class="text-3xl md:text-4xl font-semibold text-black mb-4">Pre koho je určená</h2>
                                                <ul class="list-disc text-justify list-inside text-black space-y-2">
                                                    <li>{{ $content['about']['for_whom_1'] ?? '' }}</li>
                                                    <li>{{ $content['about']['for_whom_2'] ?? '' }}</li>
                                                    <li>{{ $content['about']['for_whom_3'] ?? '' }}</li>
                                                </ul>
                                                @auth
                                                    <button @click.prevent="editing = true" class="absolute -top-4 -right-4 p-2 bg-white text-black rounded-full shadow hover:bg-gray-200 z-10">✏️</button>
                                                @endauth
                                            </div>
                            
                                            <div x-show="editing">
                                                <form method="POST" action="{{ route('content.update') }}" class="flex flex-col gap-2">
                                                    @csrf
                                                    <input type="hidden" name="field" value="for_whom">
                                                    <input type="text" name="for_whom_1" value="{{ old('for_whom_1', $content['about']['for_whom_1'] ?? '') }}" class="w-full border rounded px-2 py-1 text-center mb-1">
                                                    <input type="text" name="for_whom_2" value="{{ old('for_whom_2', $content['about']['for_whom_2'] ?? '') }}" class="w-full border rounded px-2 py-1 text-center mb-1">
                                                    <input type="text" name="for_whom_3" value="{{ old('for_whom_3', $content['about']['for_whom_3'] ?? '') }}" class="w-full border rounded px-2 py-1 text-center">
                                                    <div class="flex gap-2 mt-2 justify-center">
                                                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Uložiť</button>
                                                        <button type="button" @click.prevent="editing=false" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Zrušiť</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="animate__animated animate__slideInRight animate__slow flex items-center justify-center">
                                        <img src="storage/imgs/artwork.png" alt="Ilustrácia: Strážcovia pohybu — kniha a deti v pohybe" class="rounded-2xl shadow-md h-full mt-8 max-w-sm object-cover">
                                    </div>
                                </div>
                            
                                <div class="animate__animated animate__zoomIn animate__slow lg:col-span-2 space-y-2 p-8 rounded-2xl">
                                    <div x-data="{ editing: false }" class="relative w-full">
                                        <div x-show="!editing">
                                            <h2 class="text-3xl md:text-4xl font-semibold text-black mb-4">Prečo kúpiť</h2>
                                            <p class="text-xl text-justify md:text-2xl text-black leading-relaxed">{{ $content['about']['why_buy_body'] }}</p>
                                            @auth
                                                <button @click.prevent="editing = true" class="absolute -top-4 -right-4 p-2 bg-white text-black rounded-full shadow hover:bg-gray-200 z-10">✏️</button>
                                            @endauth
                                        </div>
                                        <div x-show="editing">
                                            <form method="POST" action="{{ route('content.update') }}">
                                                @csrf
                                                <input type="hidden" name="field" value="why_buy">
                                                <input type="text" name="why_buy_title" value="{{ old('why_buy_title', $content['about']['why_buy_title'] ?? '') }}" class="w-full border rounded px-2 py-1 text-center mb-1">
                                                <textarea name="why_buy_body" class="w-full border rounded px-2 py-1 text-center">{{ old('why_buy_body', $content['about']['why_buy_body'] ?? '') }}</textarea>
                                                <div class="flex gap-2 mt-2 justify-center">
                                                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Uložiť</button>
                                                    <button type="button" @click.prevent="editing=false" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Zrušiť</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                    
                        </section>
                    </div>
                    <h3
                        class="animate__animated animate__zoomIn animate__slow text-5xl text-black font-semibold mt-12 mb-12">
                        Prečo to ocenia rodičia?
                    </h3>
                    <div class="relative flex flex-col items-center space-y-8 mt-24 mb-12 w-full">

                        <div class="absolute inset-0 flex justify-center pointer-events-none">
                            <svg class="h-full w-32 text-yellow-400"
                                viewBox="0 0 40 200" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                <path
                                    d="M20 0 
                                       L10 30 
                                       L25 30 
                                       L15 70 
                                       L30 70 
                                       L18 120 
                                       L28 120 
                                       L15 170 
                                       L25 170 
                                       L20 200"
                                    stroke="currentColor"
                                    stroke-width="6"
                                    stroke-linejoin="round"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                    
                        <x-text-extend-left
                            title="Zdravý vzor"
                            description="Nie je to suché moralizovanie, ale napínavý príbeh, v ktorom sa deti učia nenápadne – cez emócie a zážitky." />
                    
                        <x-text-extend-right
                            title="Dobrodružstvo + ponaučenie"
                            description="Príbeh, ktorý deti vtiahne a zároveň ich vedie k pohybu a zdraviu." />
                    
                        <x-text-extend-left
                            title="Spojenie rodiny"
                            description="Kniha vytvára priestor na rozhovory o zdravom životnom štýle, pohybe a hodnotách." />
                    </div>
                    
                    <h3 class="text-5xl text-black font-semibold mt-32">Kľúčové témy
                    </h3>

                    <div class="relative flex flex-col items-center space-y-8 mt-24 mb-12 w-full">

                        <div class="absolute inset-0 flex justify-center pointer-events-none">
                            <svg class="h-full w-32 text-yellow-400"
                                viewBox="0 0 40 200" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                <path
                                    d="M20 0 
                                       L10 30 
                                       L25 30 
                                       L15 70 
                                       L30 70 
                                       L18 120 
                                       L28 120 
                                       L15 170 
                                       L25 170 
                                       L20 200"
                                    stroke="currentColor"
                                    stroke-width="6"
                                    stroke-linejoin="round"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                    
                        <x-text-extend-right
                            title="Energia a radosť"
                            description="Príbehy znázorňujú pohyb ako prirodzený zdroj radosti a energie — nie ako povinnosť. Deti sa učia, že pohyb zlepšuje náladu, sústredenie a zdravie." />
                    
                        <x-text-extend-left
                            title="Sila priateľstva"
                            description="Hrdinovia riešia úlohy spoločne. Dôraz je na tímovej práci, vzájomnej podpore a empatii — jednoduché lekcie, ktoré dieťa môže praktizovať v hre." />
                    
                        <x-text-extend-right
                            title="Prekonávanie strachu"
                            description="Každá výzva v knihe rozpráva o odvahu v malých krokoch — ako čeliť obavám, skúšať nové veci a rásť cez skúsenosť." />
                    
                        <x-text-extend-left
                            title="Rodinné prepojenie"
                            description="Kniha obsahuje jednoduché aktivity a otázky pre rodičov, ktoré podporujú rozhovor po čítaní a budovanie spoločných spomienok." />
                    </div>
                    
                </section>
            </section>
        </section>
    </x-foreground>
    <x-eshop />
</x-app-layout>
