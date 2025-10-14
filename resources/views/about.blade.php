<x-app-layout>
    <x-foreground>
        <section class="relative w-full min-h-screenitems-center justify-center text-center rounded-t-3xl">
            <div class="w-full relative bg-cover bg-centerm-32 items-center justify-center"> </div>
            <section class="relative w-full overflow-hidden">
                <section id="about-parents" class="text-gray-900 py-12 px-6">
                    <div class="p-8"> @auth <form method="POST" action="{{ route('content.update') }}" class="mb-6">
                                @csrf <input type="hidden" name="field" value="about_parents_lead">
                                <textarea name="lead" rows="4" class="w-full border rounded px-3 py-2 mb-3">{{ $content['about_parents']['lead'] ?? 'STRÁŽCOVIA POHYBU nie je len ďalšia kniha do police. Je to príbeh, ktorý učí deti, že pohyb je viac než šport či tréning – je to energia, ktorá nás drží pri živote. Hrdinovia knihy ukazujú, že sila, odvaha a priateľstvo sa budujú v pohybe, nie pri obrazovke.' }}</textarea> <button type="submit"
                                    class="px-4 py-2 bg-green-600 text-white rounded shadow-sm hover:bg-green-700"> Uložiť
                                </button>
                            </form>
                        @else
                            <section class="py-16">
                                <div class="max-w-7xl mx-auto px-6">

                                    <div class="text-center mb-20">
                                        <p
                                            class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight text-black">
                                            STRÁŽCOVIA <span class="text-blue-800">POHYBU</span>
                                        </p>
                                        <p class="mt-4 text-lg md:text-xl text-black max-w-2xl mx-auto">
                                            Interaktívna detská kniha, ktorá spája príbeh, pohyb a hodnoty — navrhnutá tak,
                                            aby dieťa aj rodič získali návod na spoločné aktivity.
                                        </p>
                                    </div>


                                    <div class="space-y-6 bg-white p-8 rounded-2xl shadow-sm">
                                        <h2 class="text-2xl md:text-3xl font-bold text-black">O čom je kniha</h2>
                                        <p class="text-lg md:text-xl text-gray-800 leading-relaxed">
                                            „Strážcovia pohybu“ je interaktívna dobrodružná kniha pre deti (6–12 rokov),
                                            ktorá premieňa čítanie na výzvu k pohybu.
                                            Každá kapitola má svoj príbeh aj jednoduchú aktivitu, ktorú môže dieťa
                                            vyskúšať doma alebo vonku — beh, skákanie,
                                            prekážková dráha či tímová hra. Kniha učí, že pohyb je radosť, nástroj
                                            sebapoznania a cesta k budovaniu odvahy a spolupráce.
                                        </p>
                                    </div>


                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 my-8 items-start">
                                        <div class="bg-white p-8 rounded-2xl shadow-sm">
                                            <h3 class="text-xl font-semibold text-black mt-4">Pre koho je určená</h3>
                                            <ul class="list-disc list-inside text-gray-800 space-y-2">
                                                <li>Deti 6–12 rokov, ktoré milujú príbehy a dobrodružstvo.</li>
                                                <li>Rodičia, ktorí chcú aktívne tráviť čas s deťmi a znižovať čas pri
                                                    obrazovkách.</li>
                                                <li>Učitelia, tréneri a animátori hľadajúci jednoduché nápady na pohybové
                                                    aktivity viazané k príbehu.</li>
                                            </ul>
                                        </div>

                                        <div class="flex items-center justify-center">
                                            <img src="storage/imgs/artwork.png"
                                                alt="Ilustrácia: Strážcovia pohybu — kniha a deti v pohybe"
                                                class="rounded-2xl shadow-md h-full max-w-sm object-cover">
                                        </div>

                                    </div>


                                    <div class="lg:col-span-2 space-y-6 bg-white p-8 rounded-2xl shadow-sm">
                                        <h3 class="text-xl font-semibold text-black mt-4">Prečo kúpiť</h3>
                                        <p class="text-lg text-gray-800 leading-relaxed">
                                            Nie je to len kniha — je to nástroj pre rodičov: prepojí čítanie s reálnou
                                            aktivitou, formuje návyky a posilňuje sebavedomie.
                                            Každá kapitola prináša konkrétnu aktivitu, ktorú rodič môže jednoducho
                                            zrealizovať bez špeciálneho vybavenia.
                                        </p>
                                    </div>

                                    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                                        <div class="p-6 bg-white rounded-2xl shadow hover:shadow-md transition">
                                            <h4 class="text-lg font-bold text-black mb-2">Pohyb = Energia a radosť</h4>
                                            <p class="text-sm text-gray-700 leading-relaxed">
                                                Príbehy znázorňujú pohyb ako prirodzený zdroj radosti a energie — nie ako
                                                povinnosť. Deti sa učia, že pohyb zlepšuje náladu, sústredenie a zdravie.
                                            </p>
                                        </div>

                                        <div class="p-6 bg-white rounded-2xl shadow hover:shadow-md transition">
                                            <h4 class="text-lg font-bold text-black mb-2">Sila priateľstva a spolupráce</h4>
                                            <p class="text-sm text-gray-700 leading-relaxed">
                                                Hrdinovia riešia úlohy spoločne. Dôraz je na tímovej práci, vzájomnej
                                                podpore a empatii — jednoduché lekcie, ktoré dieťa môže praktizovať v hre.
                                            </p>
                                        </div>

                                        <div class="p-6 bg-white rounded-2xl shadow hover:shadow-md transition">
                                            <h4 class="text-lg font-bold text-black mb-2">Odvaha a prekonávanie strachu</h4>
                                            <p class="text-sm text-gray-700 leading-relaxed">
                                                Každá výzva v knihe rozpráva o odvahu v malých krokoch — ako čeliť obavám,
                                                skúšať nové veci a rásť cez skúsenosť.
                                            </p>
                                        </div>

                                        <div class="p-6 bg-white rounded-2xl shadow hover:shadow-md transition">
                                            <h4 class="text-lg font-bold text-black mb-2">Rodinné prepojenie cez hru</h4>
                                            <p class="text-sm text-gray-700 leading-relaxed">
                                                Kniha obsahuje jednoduché aktivity a otázky pre rodičov, ktoré podporujú
                                                rozhovor po čítaní a budovanie spoločných spomienok.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mt-10 bg-gradient-to-r from-green-50 to-blue-50 p-6 rounded-2xl">
                                        <div class="max-w-4xl mx-auto text-center">
                                            <p class="text-xl md:text-2xl font-semibold text-gray-900">
                                                Každá kapitola = príbeh + jednoduchá aktivita. Premeňte čítanie na spoločnú
                                                hru bez obrazoviek.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </section>


                        @endauth
                        <h3 class="text-5xl text-black font-semibold mb-4">Prečo to ocenia rodičia?
                        </h3>
                        @auth <form method="POST" action="{{ route('content.update') }}" class="space-y-4"> @csrf
                                <input type="hidden" name="field" value="about_parents_points">
                                <textarea name="points" rows="6" class="w-full border rounded px-3 py-2">{{ $content['about_parents']['points'] ?? "Zdravý vzor: Dieťa dostane hrdinov, ktorí inšpirujú k aktívnemu životu namiesto pasívneho sedenia.\n\nDobrodružstvo + ponaučenie: Nie je to suché moralizovanie, ale napínavý príbeh, v ktorom sa deti učia nenápadne – cez emócie a zážitky.\n\nSpojenie rodiny: Kniha vytvára priestor na rozhovory o zdravom životnom štýle, pohybe a hodnotách." }}</textarea>
                                <div> <button type="submit"
                                        class="px-4 py-2 bg-green-600 text-white rounded shadow-sm hover:bg-green-700">
                                        Uložiť
                                    </button> </div>
                            </form>
                        @else
                        </div>
                        <div class="flex flex-col items-center space-y-8 w-full">
                            <x-text-extend title="Zdravý vzor"
                                description="Nie je to suché moralizovanie, ale napínavý príbeh, v ktorom sa deti učia nenápadne – cez emócie a zážitky." />

                            <x-text-extend title="Dobrodružstvo + ponaučenie"
                                description="Príbeh, ktorý deti vtiahne a zároveň ich vedie k pohybu a zdraviu." />

                            <x-text-extend title="Spojenie rodiny"
                                description="Kniha vytvára priestor na rozhovory o zdravom životnom štýle, pohybe a hodnotách." />
                        </div>

                    @endauth
                </section>
            </section>
        </section>
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
</x-app-layout>
