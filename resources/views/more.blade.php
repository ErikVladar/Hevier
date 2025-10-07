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

</head>

<style>
    @font-face {
        font-family: 'Allan';
        src: url('/Allan/Allan-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
    }

    .cta-button {
        margin-top: 2rem;
        cursor: pointer;
        position: relative;
        padding: 10px 24px;
        font-size: 18px;
        color: rgb(250, 250, 250);
        border: 2px solid rgb(255, 255, 255);
        border-radius: 10px;
        background-color: transparent;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
    }

    .cta-button::before {
        content: '';
        position: absolute;
        inset: 0;
        margin: auto;
        width: 50px;
        height: 50px;
        border-radius: inherit;
        scale: 0;
        z-index: -1;
        background-color: rgb(250, 250, 250);
        transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
    }

    .cta-button:hover::before {
        scale: 5;
    }

    .cta-button:hover {
        color: #212121;
        scale: 1.1;
        box-shadow: 0 0px 20px rgba(193, 163, 98, 0.4);
    }

    .cta-button:active {
        scale: 1;
    }

    .cta-button-black {
        margin-top: 2rem;
        cursor: pointer;
        position: relative;
        padding: 10px 24px;
        font-size: 18px;
        color: rgb(0, 0, 0);
        border: 2px solid rgb(0, 0, 0);
        border-radius: 10px;
        background-color: transparent;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
    }

    .cta-button-black::before {
        content: '';
        position: absolute;
        inset: 0;
        margin: auto;
        width: 50px;
        height: 50px;
        border-radius: inherit;
        scale: 0;
        z-index: -1;
        background-color: rgb(0, 0, 0);
        transition: all 0.6s cubic-bezier(255, 255, 255, 1);
    }

    .cta-button-black:hover::before {
        scale: 5;
    }

    .cta-button-black:hover {
        color: #FFFFFF;
        scale: 1.1;
        box-shadow: 0 0px 20px rgba(255, 255, 255, 0.4);
    }

    .cta-button-black:active {
        scale: 1;
    }

    .bg-hero {
        position: relative;
        background-image: url('imgs/bg.png');
        background-repeat: repeat-y;
        background-position: top center;
        background-size: 100% auto;
        overflow-x: hidden;
    }

    .bg-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to right,
                rgba(255, 255, 255, 0.9),
                rgba(255, 255, 255, 0.4));

        pointer-events: none;
        z-index: 1;
    }

    .bg-hero>* {
        position: relative;
        z-index: 2;
    }

    #navbar {
        /* background: linear-gradient(to right, rgba(24, 76, 139), rgba(191, 219, 254, 0)); */
    }

    #more-main {
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }
    
    @font-face {
        font-family: 'Kaushan';
        src: url('/Kaushan/KaushanScript-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
    }
</style>

<body class="font-[Kaushan] antialiased">
    {{-- <body class="font-[Tagesschrift]"> --}}

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
        <div id="more-main" class="bg-white/40  rounded-3xl">
            <section class="min-h-[50vh] grid py-0  md:grid-cols-3">
                <!-- Left: Text/Story (2/3) -->
                <div class="flex mx-20 items-center p-10 md:col-span-2">
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

                <!-- Right: Photo + Achievements (1/3) -->
                <div class="flex items-center justify-center p-8 md:col-span-1">
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
            <section class="min-h-[50vh] grid md:grid-cols-3">
                <!-- Left: Photo + Achievements -->
                <div class="flex items-center justify-center p-8 md:col-span-1">
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

                <!-- Right: Text/Story -->
                <div class="flex mx-20 items-center p-10 md:col-span-2">
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

            <div class="w-full py-16 px-6">
                <h2 class="text-4xl font-bold text-blue-800 mb-12 text-center">Ako ti pohyb pomáha</h2>

                <!-- Fun Facts Stacked -->
                <div class="max-w-4xl space-y-4 mx-auto">

                    <!-- Card 1 -->
                    <div
                        class="bg-gradient-to-r from-blue-100 rounded-xl to-blue-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105">
                        <div class="text-4xl">😄</div>
                        <div>
                            <p class="font-semibold text-lg text-blue-700">Zlepšuje náladu</p>
                            <p class="text-gray-700 mt-1 v">Krátka dávka pohybu denne zvyšuje produkciu endorfínov
                                a robí deň veselším.</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-gradient-to-r from-green-100 rounded-xl to-green-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105">
                        <div class="text-4xl">❤️</div>
                        <div>
                            <p class="font-semibold text-lg text-green-700">Silné srdce</p>
                            <p class="text-gray-700 mt-1 text-lg">Pravidelný pohyb zlepšuje obeh a učí deti starať sa o
                                svoje telo.</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-gradient-to-r from-yellow-100 rounded-xl to-yellow-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105">
                        <div class="text-4xl">⚡</div>
                        <div>
                            <p class="font-semibold text-lg text-yellow-700">Zvyšuje energiu</p>
                            <p class="text-gray-700 mt-1 text-lg">Krátke cvičenie ráno naštartuje telo aj myseľ na celý
                                deň.</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="bg-gradient-to-r from-red-100 rounded-xl to-red-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105">
                        <div class="text-4xl">🧠</div>
                        <div>
                            <p class="font-semibold text-lg text-red-700">Zlepšuje sústredenie</p>
                            <p class="text-gray-700 mt-1 text-lg">Pohyb podporuje koncentráciu a učenie sa v škole.</p>
                        </div>
                    </div>
                </div>

                <!-- Optional Infographic -->
                <div class="w-full py-16 px-6">
                    <h2 class="text-4xl font-bold text-blue-800 mb-12 text-center">Aktivity aj na doma</h2>
                
                    <div class="space-y-4 max-w-4xl mx-auto">
                
                        <!-- Walking -->
                        <div class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                            <div class="text-4xl">🥾</div>
                            <div>
                                <p class="font-semibold text-lg text-blue-700">Chôdza</p>
                                <p class="text-gray-700 mt-1 text-lg">Zlepší náladu, podporuje kreativitu a dodáva telu energiu na celý deň.</p>
                            </div>
                        </div>
                
                        <!-- Running -->
                        <div class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                            <div class="text-4xl">🏃‍♂️</div>
                            <div>
                                <p class="font-semibold text-lg text-green-700">Beh</p>
                                <p class="text-gray-700 mt-1 text-lg">Posilní srdce, zlepšuje kondíciu a učí disciplíne aj vytrvalosti.</p>
                            </div>
                        </div>
                
                        <!-- Swimming -->
                        <div class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                            <div class="text-4xl">🏊‍♀️</div>
                            <div>
                                <p class="font-semibold text-lg text-yellow-700">Plávanie</p>
                                <p class="text-gray-700 mt-1 text-lg">Posilní celé telo, zlepšuje koordináciu a udržiava zdravé plúca.</p>
                            </div>
                        </div>
                
                        <!-- Exercise / Gymnastics -->
                        <div class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                            <div class="text-4xl">🤸‍♂️</div>
                            <div>
                                <p class="font-semibold text-lg text-red-700">Cvičenie</p>
                                <p class="text-gray-700 mt-1 text-lg">Zvyšuje flexibilitu, zlepšuje rovnováhu a učí deti správnemu držaniu tela.</p>
                            </div>
                        </div>
                
                    </div>
                </div>                
            </div>




            <div class="relative overflow-hidden">
                <!-- Background image -->
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/imgs/merch.JPG');">
                </div>

                <!-- Overlay -->
                <div class="absolute inset-0 bg-black/50"></div>

                <!-- Content -->
                <div class="relative z-10 flex flex-col items-center justify-center min-h-[400px] space-y-6 p-8">
                    <button type="button" onclick="window.location.href='/shop'" class="cta-button">
                        E-shop merch
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.3.0/dist/flowbite.min.js"></script>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.querySelector('[aria-controls="mobile-menu"]');
        const mobileMenu = document.getElementById("mobile-menu");

        toggleButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    });

    const scrollBtn = document.getElementById("scrollToTopBtn");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            scrollBtn.classList.add("opacity-60");
            scrollBtn.classList.remove("opacity-0", "pointer-events-none");
        } else {
            scrollBtn.classList.add("opacity-0", "pointer-events-none");
            scrollBtn.classList.remove("opacity-60");
        }
    });

    scrollBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

    const toggleBtn = document.getElementById('menu-toggle');
    const menu = document.getElementById('desktop-menu');

    toggleBtn.addEventListener('click', () => {
        const isHidden = menu.classList.contains('hidden');

        if (isHidden) {
            // Show
            menu.classList.remove('hidden', 'max-h-0');
            menu.classList.add('max-h-[1000px]');
        } else {
            // Hide
            menu.classList.add('max-h-0');
            setTimeout(() => menu.classList.add('hidden'), 500); // match duration
            menu.classList.remove('max-h-[1000px]');
        }
    });
</script>
