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
                            <p class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-4 text-black">
                                STRÁŽCOVIA <span class="text-blue-800">POHYBU</span>
                            </p>
                            <div class="mb-12 mx-6 rounded-3xl px-8 ">
                                <div class="max-w-5xl mx-auto space-y-10 text-gray-900">
                                    <h2 class="text-4xl md:text-5xl font-extrabold text-center mb-24 text-blue-900 leading-tight">
                                        viac než len kniha
                                    </h2>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-gray-900">

                                        <div class="text-center md:text-left space-y-4">
                                            <p class="text-lg md:text-2xl leading-relaxed">
                                                Nie je len kniha do police. Je to <span class="italic">dobrodružstvo</span>,
                                                ktoré učí deti, že
                                                <span class="font-semibold text-green-700">pohyb je energia života</span> –
                                                viac než len šport či tréning.
                                            </p>
                                            <p class="text-lg md:text-2xl leading-relaxed">
                                                Každý hrdina, každá nová výzva motivuje deti vstať, skúmať, behať, skákať a
                                                hýbať sa s radosťou.
                                            </p>
                                        </div>

                                        <div class="flex justify-center md:justify-end">
                                            <img src="storage/imgs/artwork.png" alt="Ilustrácia knihy Strážcovia pohybu"
                                                class="rounded-2xl shadow-md max-w-md w-full object-cover">
                                        </div>

                                    </div>


                                    <div class="rounded-2xl p-8 md:p-10 text-gray-800 space-y-6">
                                        <p class="text-xl md:text-2xl leading-relaxed">
                                            Hrdinovia ukazujú, že <span class="underline decoration-green-700">sila, odvaha
                                                a priateľstvo</span>
                                            sa rodia v pohybe – nie pri obrazovke. Každý príbeh posúva dieťa bližšie k
                                            objaveniu vlastného potenciálu.
                                        </p>

                                        <p class="text-xl md:text-2xl leading-relaxed">
                                            Každá kapitola prináša nové dobrodružstvo – beh na lúke, prekážkovú dráhu či
                                            tímové hry, ktoré učia
                                            trpezlivosti, empatii a spolupráci.
                                        </p>
                                    </div>

                                    <div class="pl-6 space-y-4">
                                        <p class="text-lg md:text-xl leading-relaxed italic">
                                            Rodičia sa môžu zapojiť, zdieľať zážitky s deťmi a rozprávať sa o hodnotách,
                                            ktoré kniha otvára.
                                        </p>
                                        <p class="text-lg md:text-xl leading-relaxed">
                                            Spoločné čítanie vytvára priestor pre <span
                                                class="font-semibold text-green-700">rodinné prepojenie</span>
                                            cez zábavu, pohyb a rozhovor.
                                        </p>
                                    </div>

                                    <div class="text-center">
                                        <p class="text-2xl md:text-3xl font-bold text-blue-900 leading-relaxed">
                                            STRÁŽCOVIA POHYBU je cesta plná radosti, emócií a objavovania vlastnej sily.
                                        </p>
                                        <p class="text-lg md:text-xl mt-4 text-gray-700">
                                            Každý krok, skok či výzva posúva dieťa bližšie k lepšej verzii seba samého.
                                        </p>
                                    </div>

                                </div>
                            </div>

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
