<x-app-layout>
    <div
        class="bg-white/60 backdrop-blur relative w-full min-h-screen grid grid-cols-1 md:grid-cols-1 gap-10 items-center justify-center text-center rounded-t-3xl">
        <div class="w-full relative bg-cover bg-center px-20 mt-12 items-center justify-center text-center">
            <section id="about" class="grid grid-cols-1 md:grid-cols-2 items-stretch min-h-screen">
                <div id="title" class="flex flex-col h-full p-12 items-center text-center space-y-12">

                    <div x-data="{ editing: false }" class="w-full relative mb-6">
                        <div x-show="!editing" class="relative flex flex-col items-center justify-center">
                            @auth
                                <div class="absolute -top-4 -right-4 z-10">
                                    <button @click.prevent="editing=true"
                                        class="p-2 bg-white text-black rounded-full shadow hover:bg-gray-200">
                                        ✏️
                                    </button>
                                </div>
                            @endauth

                            <h1 class="font-[Franklin] antialiased text-black text-6xl sm:text-6xl md:text-6xl lg:text-7xl xl:text-8xl mb-2 animate__animated animate__slideInLeft animate__slow"
                                style="transform: rotate(-2deg); transform-origin: left;">
                                {{ $content['about']['title_1'] }}
                            </h1>
                            <h1 class="font-[Franklin] antialiased text-black text-6xl sm:text-6xl md:text-6xl lg:text-7xl xl:text-8xl mb-2 animate__animated animate__slideInRight animate__slow"
                                style="transform: rotate(-2deg); transform-origin: right;">
                                {{ $content['about']['title_2'] }}
                            </h1>
                        </div>

                        <div x-show="editing">
                            <form method="POST" action="{{ route('content.update') }}" class="flex flex-col gap-2">
                                @csrf
                                <input type="hidden" name="field" value="title">
                                <input type="text" name="title_1"
                                    value="{{ old('title_1', $content['about']['title_1']) }}"
                                    class="w-full text-4xl font-bold border rounded px-2 py-1 text-center">
                                <input type="text" name="title_2"
                                    value="{{ old('title_2', $content['about']['title_2']) }}"
                                    class="w-full text-4xl font-bold border rounded px-2 py-1 text-center">

                                <div class="flex gap-2 mt-2 justify-center">
                                    <button type="submit"
                                        class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Uložiť</button>
                                    <button type="button" @click.prevent="editing=false"
                                        class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Zrušiť</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div x-data="{ editing: false }" class="w-full relative">
                        <div x-show="!editing" class="relative flex flex-col items-center text-center">

                            <p class="text-gray-800 text-3xl animate__animated animate__slideInUp animate__slow"
                                style="transform: rotate(-1deg); transform-origin: left;">
                                {{ $content['about']['body'] }}
                            </p>

                            <a href="https://youtube.com/@strazcoviapohybu?si=zS3xwfofZIPZ3-pD" target="_blank"
                                rel="noopener noreferrer"
                                class="animate__animated animate__pulse animate__infinite animate__slow
                                        inline-flex mt-12 items-center justify-center 
                                        text-black bg-gradient-to-br from-white to-gray-100 
                                        hover:from-gray-200 hover:to-gray-400 hover:text-white
                                        rounded-full w-24 h-24 
                                        shadow-sm hover:shadow-lg
                                        border border-gray-300 hover:border-gray-500
                                        hover:scale-110 transition-all duration-300 ease-out active:scale-95">
                                <span class="text-7xl leading-none font-[Noto_Music] drop-shadow-md">𝄞</span>
                            </a>


                            @auth
                                <div class="absolute -top-4 -right-4">
                                    <button @click.prevent="editing=true"
                                        class="p-2 bg-white text-black rounded-full shadow hover:bg-gray-200 z-10">
                                        ✏️
                                    </button>
                                </div>
                            @endauth

                        </div>
                    </div>

                </div>

                <div id="cover" class="flex flex-col h-full mt-32 w-full items-center justify-center">
                    <div class="text-center space-y-4">
                        <div id="book-cover"
                            class="relative animate__animated animate__zoomIn animate__slow cursor-pointer inline-block">
                            <img src="storage/imgs/front.jpg" alt="Book Cover"
                                class="transition-transform duration-150 hover:scale-105"
                                style="width:24rem; max-width:80vw; height:auto; border-radius:10px; box-shadow:0 10px 20px rgba(0,0,0,0.3);">
                            <div
                                class="hidden md:block absolute -bottom-12 -right-12 inline-flex items-center gap-2 bg-white/90 backdrop-blur px-4 py-2 rounded-full text-gray-800 text-lg font-semibold shadow-md">
                                <span>Kliknite pre ukážku</span>
                                <img src="storage/imgs/cursor.png" alt="Cursor icon"
                                    class="animate__animated animate__bounce animate__slower animate__infinite absolute -top-7 -left-7 w-12 pointer-events-none" />
                            </div>
                        </div>
                    </div>


                    <a href="https://shop.hevi.sk/" target="_blank" rel="noopener noreferrer"
                        class="cta-button-black mt-12 mb-32">
                        Kúpiť
                    </a>
                </div>
            </section>

        </div>

    </div>

    <x-eshop />

    <section class="bg-white/60 backdrop-blur w-full py-12">
        <h2 class="text-6xl font-bold text-center mb-20 text-black">Čo o knihe povedali</h2>
        <div class="grid grid-cols-1 md:grid-cols-1 gap-12 space-y-8 max-w-7xl mx-auto mb-6 mx-4 px-4 xl:px-64">
            @foreach ($reviews as $review)
                <x-review-card :review="$review" />
            @endforeach
        </div>
        @auth
            <div class="text-center">
                <a href="{{ route('reviews.create') }}"
                    class="inline-block px-8 py-4 bg-green-600 text-white text-lg font-semibold rounded-2xl shadow-lg transform hover:scale-105 hover:bg-green-700">
                    Pridať
                </a>
            </div>
        @endauth
    </section>
</x-app-layout>

<div id="book-modal"
    class="fixed inset-0 hidden justify-center items-center bg-black bg-opacity-70 z-50 transition-opacity duration-300">

    <div x-data="{ visible: true }" x-show="visible" @click="visible = false"
        class="absolute top-16 right-0 inline-flex items-center gap-2 bg-white/90 backdrop-blur px-6 py-3
           rounded-full text-gray-800 text-xs md:text-sm z-50 font-semibold shadow-md cursor-pointer
           transition-opacity duration-500"
        x-transition.opacity style="pointer-events: auto;">

        <img src="storage/imgs/cursor.png" alt="Cursor icon"
            class="hidden md:block animate__animated animate__slideInRight animate__slower animate__infinite 
                absolute -top-7 -left-14 w-12" />

        <span class="text-xs md:text-sm select-none">Potiahnite roh pre listovanie</span>
    </div>


    <button id="close-book"
        class="absolute top-6 right-8 text-white text-3xl md:text-4xl font-bold z-[60] hover:text-gray-300">
        ×
    </button>

    <div id="flipbook" class="shadow-2xl">

        <div class="hard">
            <img src="storage/imgs/front.jpg" class="w-full h-full object-cover" />
        </div>
        <div class="bg-gray-200 hard"></div>

        <!-- Page 1 -->
        <div class="bg-white w-full h-full overflow-hidden text-gray-900">
            <div class="p-6 md:p-10">
                <h2 class="text-md md:text-4xl font-bold text-center mb-4 md:mb-6 text-blue-900">Úvod</h2>
                <p class="text-xs md:text-lg leading-relaxed mb-2 md:mb-4">
                    Vitaj, mladý strážca! Pred tebou sa otvára cesta, na ktorej objavíš, že
                    <span class="font-semibold text-green-700">pohyb je viac než len hra alebo šport</span>.
                    Je to energia, ktorá prebúdza tvoju silu, odvahu a radosť zo života.
                </p>
                <p class="text-[8px] md:text-lg leading-relaxed mb-2 md:mb-4">
                    Každý krok, každý skok a každý pád ťa učí niečo nové. V tejto knihe sa stretneš s priateľmi,
                    ktorí ti ukážu, že aj malé víťazstvá majú veľký význam – ak sa na ne pozeráš s otvoreným srdcom.
                </p>
                <p class="text-[8px] md:text-lg leading-relaxed italic text-gray-700">
                    Si pripravený pridať sa k Strážcom pohybu? Potom otoč stránku… dobrodružstvo sa začína.
                </p>
            </div>
        </div>

        <!-- Page 2 -->
        <div class="bg-blue-50 w-full h-full overflow-hidden text-gray-900">
            <div class="p-6 md:p-10">
                <h2 class="text-md md:text-3xl font-bold mb-2 md:mb-4 text-blue-800">Kapitola 1: Volanie lesa</h2>
                <p class="text-[8px] md:text-lg leading-relaxed mb-2 md:mb-4">
                    Slnečné lúče sa predierali cez koruny stromov. Eliáš stál na začiatku úzkej lesnej cesty a v ruke
                    držal starú mapu.
                    Na jej okraji bolo napísané:
                    <span class="italic text-green-700">„Kto sa hýbe, nájde, čo hľadá.“</span>
                </p>
                <p class="text-[8px] md:text-lg leading-relaxed mb-2 md:mb-4">
                    Zhlboka sa nadýchol a vykročil. Každý krok v lese znel ako šepot – akoby ho stromy vítali späť. Po
                    chvíli uvidel medzi papradím malé svetielko, ktoré sa hýbalo ako živé.
                </p>
                <p class="text-[8px] md:text-lg leading-relaxed">
                    „Poď za mnou,“ ozvalo sa tichým hlasom. Eliáš sa usmial. Dobrodružstvo sa práve začalo.
                </p>
                <p class="text-right text-[8px] md:text-sm italic text-gray-600 mt-4 md:mt-6">Pokračovanie na ďalšej
                    strane →</p>
            </div>
        </div>

        <!-- Page 3 -->
        <div class="bg-green-50 w-full h-full overflow-hidden text-gray-900">
            <div class="p-6 md:p-10">
                <h2 class="text-md md:text-3xl font-bold mb-2 md:mb-4 text-green-800">Kapitola 1: Strážca lúky</h2>
                <p class="text-[8px] md:text-lg leading-relaxed mb-2 md:mb-4">
                    Svetielko ho priviedlo na lúku plnú motýľov. Uprostred stál starý dub a pri ňom sedela dievčina s
                    prútenou paličkou. Keď ho zbadala, usmiala sa: „Volám sa Mira. Strážim pohyb – aby nezmizol zo
                    sveta.“
                </p>
                <p class="text-[8px] md:text-lg leading-relaxed mb-2 md:mb-4">
                    Eliáš nechápal. „Ako môže pohyb zmiznúť?“ Mira sa postavila a spravila krok vpred. Zem pod nimi sa
                    zablysla – a na okamih všetko ožilo: vietor, tráva, dokonca aj kamene.
                </p>
                <p class="text-[8px] md:text-lg leading-relaxed">
                    „Pretože ľudia zabúdajú hýbať sa srdcom,“ odpovedala. „A práve preto si tu ty. Nauč ich to znova.“
                </p>
                <p class="text-right text-[10px] md:text-sm italic text-gray-600 mt-4 md:mt-6">— Koniec ukážky —</p>
            </div>
        </div>

        <div class="bg-gray-200 hard">
            <img src="storage/imgs/back.jpg" class="w-full h-full object-cover" />
        </div>
    </div>
</div>
