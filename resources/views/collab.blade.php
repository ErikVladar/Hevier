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
        background: linear-gradient(to right, rgba(24, 76, 139), rgba(191, 219, 254, 0));
    }

    #bio {
        background: linear-gradient(to top, rgb(191, 219, 254,0), rgb(191, 219, 254));
    }

</style>

<body class="font-[Allan] antialiased">
    {{-- <body class="font-[Tagesschrift]"> --}}

    <button id="scrollToTopBtn"
        class="fixed bottom-16 right-6 z-50 w-12 h-12 bg-gray-800 text-white text-xl rounded-full shadow-lg 
         opacity-0 pointer-events-none hover:opacity-100 transition-opacity duration-300 
         flex items-center justify-center"
        aria-label="Scroll to top">
        ↑
    </button>
    <div class="min-h-full">
        <nav id="navbar" class="fixed top-0 z-30 w-full text-xl bg-blue-200 transition-all duration-300">
            <x-navbar />
        </nav>
    </div>
    <div class="bg-hero w-full px-32 relative bg-cover bg-center">
        <section class="px-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="mt-6 content-center">
                    <h1 class="text-8xl font-bold mb-4">Spolupráca</h1>
                    <p class="text-3xl text-black">
                        Spojením odbornosti O2 Športovej akadémie Mateja Tótha a tvorivého pera známeho spisovateľa
                        Daniela Heviera vznikol pútavý a motivačný príbeh, ktorý hravou formou približuje deťom aj
                        rodičom význam pohybu, vytrvalosti a zdravého životného štýlu. Kniha prepája svet športu a
                        literatúry tak, aby inšpirovala mladých čitateľov k aktívnemu životu a pomáhala budovať
                        pozitívny vzťah k telu aj k sebe samému.
                    </p>

                </div>
                <div class="text-center md:flex md:justify-end">
                    <img src="imgs/149A2447.png" alt="foto k veci" class="w-96 object-cover">
                </div>
            </div>
        </section>
        <section id="bio" class="py-16 px-8 rounded-3xl">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="mt-12 flex justify-center">
                    <img src="https://m.smedata.sk/api-media/media/image/sme/2/85/8538902/8538902_1200x.jpg?rev=3"
                        alt="foto autora" class="w-[30rem] h-[30rem] object-cover rounded-full shadow-lg mb-4">
                </div>
                <div class="text-center md:text-left">
                    <h2 class="text-6xl text-white font-bold mb-4">Daniel Hevier</h2>
                    <p class="text-3xl text-gray-800 mb-6">
                        Daniel Hevier je jeden z najvýznamnejších slovenských spisovateľov, známy predovšetkým svojou
                        tvorbou pre deti a mládež. Počas svojej bohatej kariéry napísal desiatky kníh, básní, piesní aj
                        divadelných hier. Jeho štýl je hravý, pútavý a zároveň hlboký – vďaka čomu dokáže zaujať malých
                        aj veľkých čitateľov. Okrem literatúry sa venuje aj vzdelávaniu a motivácii mladých ľudí, pričom
                        prepája svet tvorivosti, hodnotového myslenia a rozvoja osobnosti.
                    </p>

                </div>
            </div>
        </section>
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
