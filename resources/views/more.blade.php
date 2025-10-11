<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hevier</title>

    <link href="{{ asset('css/my.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Lightbox2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />
    <!-- Lightbox2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

</head>

<body class="font-[Kaushan] antialiased">

    <button id="scrollToTopBtn"
        class="fixed bottom-16 right-6 z-50 w-12 h-12 bg-gray-800 text-white text-xl rounded-full shadow-lg 
         opacity-0 pointer-events-none hover:opacity-100 transition-opacity duration-300 
         flex items-center justify-center"
        aria-label="Scroll to top">
        ↑
    </button>

    <div class="min-h-full">
        <nav id="navbar" class="fixed top-0 z-30 w-full text-xl transition-all duration-300">
            <x-navbar />
        </nav>
    </div>

    <div
        class="bg-hero md:pt-20 bg-scroll md:bg-fixed md:bg-cover bg-center bg-repeat items-center md:bg-no-repeat [@media(min-width:1080px)]:px-20">
        <div id="more-main" class="bg-white/40 rounded-t-3xl">

            <!-- Lara Section -->
            <section class="min-h-[50vh] grid py-0 md:grid-cols-3">
                <div class="flex mx-20 items-center p-10 md:col-span-2" data-aos="fade-right">
                    <div>
                        <h2 class="text-5xl md:text-6xl text-black font-bold mb-6">Lara Sprintová</h2>
                        <hr class="border-t mb-8 mt-8 border-gray-600 w-full">
                        <p class="text-2xl md:text-3xl text-gray-800 text-justify break-words max-w-prose">
                            Lara miluje beh a skákanie, a vždy hľadá nové spôsoby, ako sa zabaviť s kamarátmi.
                            Najradšej vymýšľa vlastné hry a súťaže, v ktorých každý môže byť víťaz.
                            Je rýchla, zvedavá a jej smiech znie po celom ihrisku.
                        </p>
                    </div>
                </div>

                <div class="flex items-center justify-center p-8 md:col-span-1" data-aos="fade-left">
                    <div class="flex flex-col items-center gap-6">
                        <img src="/imgs/lara.png" alt="Lara Sprintová"
                            class="w-80 h-80 rounded-full object-cover shadow-lg">
                        <ul class="list-disc text-lg md:text-xl text-gray-800 space-y-2">
                            <li>Prebehla svoj prvý školský beh</li>
                            <li>Vymyslela zábavnú hru pre kamarátov</li>
                            <li>Postavila domček na strome</li>
                        </ul>
                    </div>
                </div>
            </section>

            <hr class="border-t border-gray-300 w-full">

            <!-- Peter Section -->
            <section class="min-h-[50vh] grid md:grid-cols-3">
                <div class="flex items-center justify-center p-8 md:col-span-1" data-aos="fade-right">
                    <div class="flex flex-col items-center gap-6">
                        <img src="/imgs/Peto.png" alt="Peter Kováč"
                            class="w-80 h-80 rounded-full object-cover shadow-lg">
                        <ul class="list-disc text-lg md:text-xl text-gray-800 space-y-2">
                            <li>Objavil nové miesta v parku pri hre</li>
                            <li>Usporiadal miniturnaj s kamarátmi</li>
                            <li>Vyrobil vlastnú športovú hračku</li>
                        </ul>
                    </div>
                </div>

                <div class="flex mx-20 items-center p-10 md:col-span-2" data-aos="fade-left">
                    <div>
                        <h2 class="text-6xl text-black font-bold mb-4">Peter Kováč</h2>
                        <hr class="border-t mb-8 mt-8 border-gray-600 w-full">
                        <p class="text-3xl text-gray-800 break-words text-justify max-w-prose">
                            Peter je energický chlapec, ktorý nikdy nevydrží sedieť. Vymýšla nové hry na
                            dvore,
                            rád behá, skáče a skúša prekážkové dráhy. Jeho obľúbené slovo je „dobrodružstvo“ a
                            svoju radosťou z pohybu prenesie aj kamarátov.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Benefits Section -->
            <div class="w-full py-16 px-6" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-blue-800 mb-12 text-center">Ako ti pohyb pomáha</h2>

                <div class="max-w-4xl space-y-4 mx-auto">
                    <div
                        class="bg-gradient-to-r from-blue-100 to-blue-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105 rounded-xl">
                        <div class="text-4xl">😄</div>
                        <div>
                            <p class="font-semibold text-lg text-blue-700">Zlepšuje náladu</p>
                            <p class="text-gray-700 mt-1">Krátka dávka pohybu denne zvyšuje produkciu endorfínov
                                a robí deň veselším.</p>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-r from-green-100 to-green-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105 rounded-xl">
                        <div class="text-4xl">❤️</div>
                        <div>
                            <p class="font-semibold text-lg text-green-700">Silné srdce</p>
                            <p class="text-gray-700 mt-1 text-lg">Pravidelný pohyb zlepšuje obeh a učí deti starať sa o
                                svoje telo.</p>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-r from-yellow-100 to-yellow-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105 rounded-xl">
                        <div class="text-4xl">⚡</div>
                        <div>
                            <p class="font-semibold text-lg text-yellow-700">Zvyšuje energiu</p>
                            <p class="text-gray-700 mt-1 text-lg">Krátke cvičenie ráno naštartuje telo aj myseľ na celý
                                deň.</p>
                        </div>
                    </div>

                    <div
                        class="bg-gradient-to-r from-red-100 to-red-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105 rounded-xl">
                        <div class="text-4xl">🧠</div>
                        <div>
                            <p class="font-semibold text-lg text-red-700">Zlepšuje sústredenie</p>
                            <p class="text-gray-700 mt-1 text-lg">Pohyb podporuje koncentráciu a učenie sa v škole.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activities Section -->
            <div class="w-full py-16 px-6" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-blue-800 mb-12 text-center">Aktivity aj na doma</h2>

                <div class="space-y-4 max-w-4xl mx-auto">
                    <div class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                        <div class="text-4xl">🥾</div>
                        <div>
                            <p class="font-semibold text-lg text-blue-700">Chôdza</p>
                            <p class="text-gray-700 mt-1 text-lg">Zlepší náladu, podporuje kreativitu a dodáva telu energiu.</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                        <div class="text-4xl">🏃‍♂️</div>
                        <div>
                            <p class="font-semibold text-lg text-green-700">Beh</p>
                            <p class="text-gray-700 mt-1 text-lg">Posilní srdce, zlepšuje kondíciu a učí disciplíne.</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                        <div class="text-4xl">🏊‍♀️</div>
                        <div>
                            <p class="font-semibold text-lg text-yellow-700">Plávanie</p>
                            <p class="text-gray-700 mt-1 text-lg">Posilní celé telo, zlepšuje koordináciu a zdravé plúca.</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                        <div class="text-4xl">🤸‍♂️</div>
                        <div>
                            <p class="font-semibold text-lg text-red-700">Cvičenie</p>
                            <p class="text-gray-700 mt-1 text-lg">Zvyšuje flexibilitu, rovnováhu a správne držanie tela.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Merch Section -->
            <div class="relative overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/imgs/merch.JPG');"></div>
                <div class="absolute inset-0 bg-black/50"></div>
                <div class="relative z-10 flex flex-col items-center justify-center min-h-[400px] space-y-6 p-8">
                    <button type="button" onclick="window.location.href='/shop'" class="cta-button" data-aos="zoom-in">
                        E-shop merch
                    </button>
                </div>
            </div>

        </div>
    </div>

    <x-footer />

    <script>
        AOS.init({
            duration: 500,
            once: true,
            easing: 'ease-in-out'
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.3.0/dist/flowbite.min.js"></script>
</body>
</html>
