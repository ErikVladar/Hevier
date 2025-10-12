<x-app-layout>
    <x-foreground>
        <section id="merch" class="relative w-full min-h-screenitems-center justify-center text-center rounded-t-3xl">
            <div class="w-full relative bg-cover bg-centerm-32 px-20 items-center justify-center"> </div>
            <section class="relative w-full overflow-hidden">
                <section id="about-parents" class="text-gray-900 py-12 px-6">
                    <div class="max-w-4xl p-8 mx-auto"> @auth <form method="POST" action="{{ route('content.update') }}"
                                class="mb-6"> @csrf <input type="hidden" name="field" value="about_parents_lead">
                                <textarea name="lead" rows="4" class="w-full border rounded px-3 py-2 mb-3">{{ $content['about_parents']['lead'] ?? 'STRÁŽCOVIA POHYBU nie je len ďalšia kniha do police. Je to príbeh, ktorý učí deti, že pohyb je viac než šport či tréning – je to energia, ktorá nás drží pri živote. Hrdinovia knihy ukazujú, že sila, odvaha a priateľstvo sa budujú v pohybe, nie pri obrazovke.' }}</textarea> <button type="submit"
                                    class="px-4 py-2 bg-green-600 text-white rounded shadow-sm hover:bg-green-700"> Uložiť
                                </button>
                            </form>
                        @else
                            <div class="bg-white my-12 mx-6 rounded-xl p-6 md:p-12">
                                <div class="max-w-5xl mx-auto px-6 md:px-0 space-y-6 text-gray-900">
                                    <p
                                        class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-20 text-black">
                                        STRÁŽCOVIA <span class="text-blue-800">POHYBU</span>
                                    </p>

                                    <p class="text-xl md:text-2xl leading-relaxed">
                                        Nie je len kniha do police. Je to <span class="italic">dobrodružstvo</span>, ktoré
                                        učí deti, že
                                        <span class="font-semibold text-green-700">pohyb je energia života</span> – viac než
                                        len šport či tréning.
                                        Každý hrdina, každá situácia, každá nová výzva je navrhnutá tak, aby deti spontánne
                                        motivovala vstať,
                                        skúmať, behať, skákať a hýbať sa s radosťou.
                                    </p>

                                    <p class="text-xl md:text-2xl leading-relaxed">
                                        Hrdinovia ukazujú, že <span class="underline decoration-green-700">sila, odvaha a
                                            priateľstvo</span>
                                        sa rodia v pohybe – nie pri obrazovke. Či už sa vydávajú do lesa, prekonávajú
                                        vlastné obavy alebo
                                        spolupracujú s kamarátmi, každý príbeh posúva dieťa o krok bližšie k objavovaniu
                                        vlastného potenciálu.
                                    </p>

                                    <p class="text-xl md:text-2xl leading-relaxed">
                                        Každá kapitola otvára nové dobrodružstvá: beh na lúke, horolezecké prekážky, alebo
                                        tvorivé hry,
                                        ktoré učia trpezlivosti, tímovej práci a empatii. Deti sa nenápadne učia, že aktívny
                                        život prináša
                                        radosť, energiu a pocit vlastnej sily.
                                    </p>

                                    <p class="text-xl md:text-2xl leading-relaxed">
                                        Rodičia sa môžu zapojiť a zdieľať tieto zážitky s deťmi, diskutovať o rozhodnutiach
                                        hrdinov,
                                        rozvíjať rozhovory o hodnotách a zdravom životnom štýle. Kniha vytvára priestor pre
                                        spoločné
                                        aktivity, kde sa rodina učí spolu, cez zábavu a pohyb, bez nátlaku.
                                    </p>

                                    <p class="text-xl md:text-2xl leading-relaxed">
                                        STRÁŽCOVIA POHYBU nie je len kniha. Je to komplexná cesta, ktorá kombinuje
                                        dobrodružstvo,
                                        emócie a pohyb do jedinečného zážitku. Dieťa sa učí, že aktívny život je plný
                                        možností,
                                        radosti a objavovania vlastnej sily – a že každý krok, skok či výzva ho približuje k
                                        lepšej verzii seba samého.
                                    </p>
                                </div>
                            </div>
                        @endauth
                        <h3 class="text-5xl text-gray-600 font-semibold mb-4">Prečo to ocenia rodičia?
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
                        <div class="flex flex-col items-left space-y-6 px-20">
                            <x-text-extend title="Zdravy vzor"
                                description="Nie je to suché moralizovanie, ale napínavý príbeh, v ktorom sa deti učia nenápadne – cez emócie a zážitky." />
                            <x-text-extend title="Dobrodružstvo + ponaučenie"
                                description="Nie je to suché moralizovanie, ale napínavý príbeh, v ktorom sa deti učia nenápadne – cez emócie a zážitky." />
                            <x-text-extend title="Spojenie rodiny"
                                description="Kniha vytvára priestor na rozhovory o zdravom životnom štýle, pohybe a hodnotách." />
                        </div>
                    @endauth
                </section>
            </section>
        </section>
    </x-foreground>
    <div class="relative overflow-hidden"> <!-- Background image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/imgs/merch.JPG');">
        </div>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div> <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center min-h-[400px] space-y-6 p-8">
            <a href="https://shop.hevi.sk/" target="_blank" rel="noopener noreferrer" class="cta-button"
                data-aos="zoom-in">
                E-shop merch
            </a>
        </div>

    </div>
</x-app-layout>
