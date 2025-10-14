<x-app-layout>
    <div id="book-modal"
        class="fixed inset-0 hidden justify-center items-center bg-black bg-opacity-70 z-50 transition-opacity duration-300">

        <!-- Close button -->
        <button id="close-book" class="absolute top-6 right-8 text-white text-4xl font-bold z-[60] hover:text-gray-300">
            ×
        </button>

        <!-- Flipbook -->
        <div id="flipbook" class="shadow-2xl" style="width:900px; height:650px;">

            <!-- Cover -->
            <div class="hard">
                <img src="storage/imgs/TITULKA.jpg" class="w-full h-full object-cover" />
            </div>

            <div class="bg-gray-200 hard"></div>

            <div class="bg-white w-full h-full overflow-hidden text-gray-900">
                <div class="p-10">
                    <h2 class="text-4xl font-bold text-center mb-6 text-blue-900">Úvod</h2>
                    <p class="text-lg leading-relaxed mb-4">
                        Vitaj, mladý strážca! Pred tebou sa otvára cesta, na ktorej objavíš, že
                        <span class="font-semibold text-green-700">pohyb je viac než len hra alebo šport</span>.
                        Je to energia, ktorá prebúdza tvoju silu, odvahu a radosť zo života.
                    </p>
                    <p class="text-lg leading-relaxed mb-4">
                        Každý krok, každý skok a každý pád ťa učí niečo nové. V tejto knihe sa stretneš s priateľmi,
                        ktorí ti ukážu,
                        že aj malé víťazstvá majú veľký význam – ak sa na ne pozeráš s otvoreným srdcom.
                    </p>
                    <p class="text-lg leading-relaxed italic text-gray-700">
                        Si pripravený pridať sa k Strážcom pohybu? Potom otoč stránku… dobrodružstvo sa začína.
                    </p>
                </div>
            </div>

            <div class="bg-blue-50 w-full h-full overflow-hidden text-gray-900">
                <div class="p-10">
                    <h2 class="text-3xl font-bold mb-4 text-blue-800">Kapitola 1: Volanie lesa</h2>
                    <p class="text-lg leading-relaxed mb-4">
                        Slnečné lúče sa predierali cez koruny stromov. Eliáš stál na začiatku úzkej lesnej cesty a v
                        ruke
                        držal starú mapu.
                        Na jej okraji bolo napísané:
                        <span class="italic text-green-700">„Kto sa hýbe, nájde, čo hľadá.“</span>
                    </p>
                    <p class="text-lg leading-relaxed mb-4">
                        Zhlboka sa nadýchol a vykročil. Každý krok v lese znel ako šepot – akoby ho stromy vítali späť.
                        Po chvíli uvidel medzi papradím niečo zvláštne – malé svetielko, ktoré sa hýbalo ako živé.
                    </p>
                    <p class="text-lg leading-relaxed">
                        „Poď za mnou,“ ozvalo sa tichým hlasom. Eliáš sa usmial. Dobrodružstvo sa práve začalo.
                    </p>
                    <p class="text-right text-sm italic text-gray-600 mt-6">Pokračovanie na ďalšej strane →</p>
                </div>
            </div>

            <div class="bg-green-50 w-full h-full overflow-hidden text-gray-900">
                <div class="p-10">
                    <h2 class="text-3xl font-bold mb-4 text-green-800">Kapitola 1: Strážca lúky</h2>
                    <p class="text-lg leading-relaxed mb-4">
                        Svetielko ho priviedlo na lúku plnú motýľov. Uprostred stál starý dub a pri ňom sedela dievčina
                        s
                        prútenou paličkou.
                        Keď ho zbadala, usmiala sa: „Volám sa Mira. Strážim pohyb – aby nezmizol zo sveta.“
                    </p>
                    <p class="text-lg leading-relaxed mb-4">
                        Eliáš nechápal. „Ako môže pohyb zmiznúť?“
                        Mira sa postavila a spravila krok vpred. Zem pod nimi sa zablysla – a na okamih všetko ožilo:
                        vietor, tráva, dokonca aj kamene.
                    </p>
                    <p class="text-lg leading-relaxed">
                        „Pretože ľudia zabúdajú hýbať sa srdcom,“ odpovedala.
                        „A práve preto si tu ty. Nauč ich to znova.“
                    </p>
                    <p class="text-right text-sm italic text-gray-600 mt-6">— Koniec ukážky —</p>
                </div>
            </div>
            <div class="bg-gray-200 hard"></div>
        </div>
    </div>

    <x-foreground>
        <div
            class="relative w-full min-h-screen rounded-3xl grid grid-cols-1 md:grid-cols-1 gap-10 items-center justify-center text-center rounded-t-3xl">

            <div class="w-full relative bg-cover bg-centerm-32 px-20 mt-12 items-center justify-center text-center">
                <section id="about" class="grid grid-cols-1 md:grid-cols-2 items-stretch min-h-screenx">
                    <div id="title" class="flex flex-col h-full p-12 items-center text-center">
                        @auth
                            <form method="POST" action="{{ route('content.update') }}" class="mb-4">
                                @csrf
                                <input type="hidden" name="field" value="title">
                                <input type="text" name="title" value="{{ $content['about']['title'] }}"
                                    class="w-full text-4xl font-bold border rounded px-2 py-1 mb-2">
                                <button type="submit"
                                    class="px-6 py-3 bg-green-600 text-white font-semibold rounded-xl shadow-md 
                                       hover:bg-blue-700 transform hover:scale-105 transition duration-200">
                                    Uložiť
                                </button>
                            </form>
                        @else
                            <div>
                                <h1 class="animate__animated animate__slideInLeft text-black text-5xl sm:text-5xl md:text-6xl lg:text-8xl xl:text-8xl mb-4 text-center"
                                    style="transform: rotate(-2deg); transform-origin: left;">
                                    {{ $content['about']['title_1'] }}
                                </h1>
                            </div>
                            <div>
                                <h1 class="animate__animated animate__slideInRight text-black text-5xl sm:text-5xl md:text-6xl lg:text-8xl xl:text-8xl mb-4 text-center"
                                    style="transform: rotate(-2deg); transform-origin: rigth;">
                                    {{ $content['about']['title_2'] }}
                                </h1>
                            </div>
                        @endauth

                        @auth
                            <form method="POST" action="{{ route('content.update') }}">
                                @csrf
                                <input type="hidden" name="field" value="body">
                                <textarea name="body" class="w-full border rounded px-2 py-1 mb-2">{{ $content['about']['body'] }}</textarea>
                                <button type="submit"
                                    class="px-6 py-3 bg-green-600 text-white font-semibold rounded-xl shadow-md 
                                       hover:bg-green-700 transform hover:scale-105 transition duration-200">
                                    Uložiť
                                </button>
                            </form>
                        @else
                            <div>
                                <p class="animate__animated animate__slideInUp text-gray-800 text-3xl text-center"
                                    style="transform: rotate(-1deg); transform-origin: left;">
                                    {{ $content['about']['body'] }}
                                </p>
                            </div>
                        @endauth
                    </div>

                    <div id="cover" class="flex flex-col h-full mt-32 w-full items-center justify-center">

                        <div id="book-cover"
                            class="animate__animated animate__slideInDown cursor-pointer transition-transform hover:scale-105">
                            <img src="storage/imgs/TITULKA.jpg" alt="Book Cover"
                                style="width:24rem; max-width:80vw; height:auto; border-radius:10px; box-shadow:0 10px 20px rgba(0,0,0,0.3);">
                        </div>

                        <button type="button" onclick="window.location.href='/shop'"
                            class="cta-button-black mt-12 mb-20">
                            Kúpiť
                        </button>
                    </div>

                </section>
            </div>


        </div>
    </x-foreground>
    <div class="relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('storage/imgs/merch.JPG');">
        </div>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 flex flex-col items-center justify-center min-h-[400px] space-y-6 p-8">
            <a href="https://shop.hevi.sk/" target="_blank" rel="noopener noreferrer" class="cta-button"
                data-aos="zoom-in">
                E-shop merch
            </a>
        </div>
    </div>
    <section id="reviews" class="w-full bg-white/20 py-12">
        <h2 class="text-6xl font-bold text-center mb-20 text-black">Recenzie</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-7xl mx-auto px-20">
            @foreach ($reviews as $review)
                <x-review-card :review="$review" />
            @endforeach
        </div>
    </section>
</x-app-layout>
