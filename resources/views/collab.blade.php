<x-app-layout>
    <div id="hevier-modal" class="fixed inset-0 hidden bg-black bg-opacity-80 z-50 flex items-center justify-center">
        <div class="relative w-full h-full flex items-center justify-center">
            <button
                class="absolute top-6 right-8 text-white text-4xl font-bold z-50 hover:text-gray-300 close-modal">×</button>
            <div class="w-full h-full flex items-center justify-center p-6">
                <iframe class="w-[90vw] h-[80vh] rounded-2xl shadow-2xl" src="https://www.youtube.com/embed/hlY7cZGFzZo"
                    frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div id="toth-modal" class="fixed inset-0 hidden bg-black bg-opacity-80 z-50 flex items-center justify-center">
        <div class="relative w-full h-full flex items-center justify-center">
            <button
                class="absolute top-6 right-8 text-white text-4xl font-bold z-50 hover:text-gray-300 close-modal">×</button>
            <div class="w-full h-full flex items-center justify-center p-6">
                <iframe class="w-[90vw] h-[80vh] rounded-2xl shadow-2xl" src="storage/imgs/IMG_3675.mov" {{-- src="https://www.youtube.com/embed/WH9LYP4FkOs" --}} 
                    frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <x-foreground>
        <section class="pt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <h2
                    class="antialiased animate__animated animate__zoomIn animate__slow text-6xl font-bold text-center text-black">
                    O autoroch</h2>

                <section class="stack-section">
                    <div class="stack">
                        <div class="card pt-8">
                            <div
                                class="relative animate__animated animate__slideInLeft animate__slow max-w-7xl mx-auto bg-white rounded-3xl shadow-lg overflow-hidden m-12 flex flex-col md:flex-row transition-transform duration-300">

                                <div id="hevier-card" class="absolute top-4 right-4 z-20">
                                    <div
                                        class="flex cursor-pointer hover:scale-[1.05]  items-center justify-center w-12 h-12 bg-black/70 rounded-full shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>

                                <div
                                    class="w-full md:w-2/3 p-8 md:p-12 flex flex-col justify-center text-center md:text-left">
                                    <h2 class="antialiased text-4xl md:text-6xl p-4 text-black font-bold mb-8">Daniel
                                        Hevier
                                    </h2>
                                    <p class="text-m md:text-2xl p-4 text-gray-800 leading-relaxed">
                                        Daniel Hevier je jeden z najvýznamnejších slovenských spisovateľov, známy
                                        predovšetkým
                                        svojou tvorbou pre deti a mládež. Počas svojej bohatej kariéry napísal desiatky
                                        kníh,
                                        básní,
                                        piesní
                                        aj divadelných hier. Jeho štýl je hravý, pútavý a zároveň hlboký – vďaka čomu
                                        dokáže
                                        zaujať
                                        malých aj veľkých čitateľov. Okrem literatúry sa venuje aj vzdelávaniu a
                                        motivácii
                                        mladých
                                        ľudí,
                                        pričom prepája svet tvorivosti, hodnotového myslenia a rozvoja osobnosti.
                                    </p>
                                </div>
                                <div class="w-full md:w-1/3 relative">
                                    <img src="storage/imgs/daniel-hevier.png" alt="Daniel Hevier"
                                        class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div
                                class="relative animate__animated animate__slideInRight animate__slow max-w-7xl mx-auto bg-white rounded-3xl shadow-lg overflow-hidden m-12 flex flex-col md:flex-row transition-transform duration-300">

                                <div id="toth-card" class="absolute top-4 left-4 z-20">
                                    <div
                                        class="flex cursor-pointer hover:scale-[1.05] items-center justify-center w-12 h-12 bg-black/70 rounded-full shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="w-full md:w-1/3 relative">
                                    <img src="storage/imgs/MATEJ_TÓTH_2016.jpg" alt="Matej Tóth"
                                        class="w-full h-full object-cover">
                                </div>

                                <div
                                    class="w-full md:w-2/3 p-8 md:p-12 flex flex-col justify-center text-center md:text-left">
                                    <h2 class="text-4xl md:text-6xl p-4 text-black font-bold mb-8">Matej
                                        Tóth</h2>
                                    <p class="text-m md:text-2xl p-4 text-gray-800 leading-relaxed">
                                        Matej Tóth je jeden z najvýznamnejších slovenských športovcov, špecialista na
                                        chôdzu na
                                        dlhé
                                        trate, známy predovšetkým svojimi úspechmi na medzinárodných súťažiach. Počas
                                        svojej
                                        kariéry
                                        získal množstvo medailí z majstrovstiev sveta, Európy aj Olympijských hier. Jeho
                                        disciplína,
                                        vytrvalosť a odhodlanie robia z neho vzor pre mladých športovcov, ktorí sa chcú
                                        učiť, že
                                        pravidelný tréning, obetavosť a srdce pre šport prinášajú výnimočné výsledky.
                                        Okrem
                                        športu
                                        sa venuje aj motivácii mladých ľudí a šíreniu povedomia o zdravom životnom
                                        štýle.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="px-8">
                    <div
                        class="animate__animated animate__backInUp animate__slow max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                        <div class="mt-6 content-center">
                            <h2 class="antialiased text-6xl font-bold mb-12">Prečo vznikla táto kniha?</h2>
                            <p class="text-2xl text-black mb-12">
                                Spojením odbornosti O2 Športovej akadémie Mateja Tótha a tvorivého pera známeho
                                spisovateľa
                                Daniela Heviera vznikol pútavý a motivačný príbeh, ktorý hravou formou približuje deťom
                                aj
                                rodičom význam pohybu, vytrvalosti a zdravého životného štýlu. Kniha prepája svet športu
                                a
                                literatúry tak, aby inšpirovala mladých čitateľov k aktívnemu životu a pomáhala budovať
                                pozitívny vzťah k telu aj k sebe samému.
                            </p>
                        </div>
                        <img src="storage/imgs/149A2447.png" alt="foto k veci"
                            class="w-3/4 md:w-2/3 lg:w-1/2 xl:w-[40vw] mb-0 pb-0 object-cover mx-auto">
                    </div>
                </section>
            </div>
        </section>
    </x-foreground>
</x-app-layout>
