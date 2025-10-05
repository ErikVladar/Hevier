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
        background-color: rgba(255, 255, 255, 0.9);
        pointer-events: none;
        z-index: 1;
    }

    .bg-hero>* {
        position: relative;
        z-index: 2;
    }

    #navbar {
        background: linear-gradient(to bottom, rgba(24, 76, 139), rgba(191, 219, 254, 0.5));
    }
</style>

<body class="font-[Quicksand]">
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
    <div
        class="bg-hero md:pt-20 bg-scroll md:bg-fixed md:bg-cover bg-center bg-repeat items-center md:bg-no-repeat [@media(min-width:1080px)]:px-20">
        <div class="">
            <section class="min-h-[50vh]  grid md:grid-cols-2">
                <!-- Left: Text/Story -->
                <div class="flex items-center p-10">
                    <div>
                        <h2 class="text-4xl font-bold mb-4">Meno 1</h2>
                        <p class="text-lg text-gray-800 break-words max-w-prose">
                            Popis...
                            ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp
                        </p>
                    </div>
                </div>

                <!-- Right: Photo + Achievements -->
                <div class="flex items-center justify-center p-8">
                    <div class="flex flex-col items-center gap-6">
                        <!-- Circular Photo -->
                        <img src="https://placehold.co/200x200" alt="Peter Kováč"
                            class="w-80 h-80 rounded-full object-cover shadow-lg">

                        <!-- Achievements -->
                        <ul class="list-disc text-gray-700 space-y-2">
                            <li>uspech 1</li>
                            <li>uspech 2</li>
                            <li>uspech 3</li>
                        </ul>
                    </div>
                </div>
            </section>

            <hr class="border-t border-gray-300 w-full">

            <section class="min-h-[50vh] grid md:grid-cols-2">
                <!-- Left: Circular Photo + Achievements -->
                <div class="flex items-center justify-center p-8">
                    <div class="flex flex-col items-center gap-6">
                        <!-- Circular Photo -->
                        <img src="https://placehold.co/200x200" alt="Peter Kováč"
                            class="w-80 h-80 rounded-full object-cover shadow-lg">

                        <!-- Achievements -->
                        <ul class="list-disc text-gray-700 space-y-2">
                            <li>uspech 1</li>
                            <li>uspech 2</li>
                            <li>uspech 3</li>
                        </ul>
                    </div>
                </div>

                <!-- Right: Text/Story -->
                <div class="flex items-center p-10">
                    <div>
                        <h2 class="text-4xl font-bold mb-4">Meno 2</h2>
                        <p class="text-lg text-gray-800 break-words max-w-prose">
                            Popis...
                            ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp
                        </p>
                    </div>
            </section>
            <div class="w-full bg-blue-200 text-center text-black overflow-hidden py-16">
                {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-20">
        <div class="flex flex-col items-center">
          <h3 class="text-2xl font-semibold mb-4">športovec 1</h3>
          <img src="tyler.png" alt="športovec 1" class="h-40 w-40 rounded-full object-cover mb-4 shadow-lg" />
          <p class="text-base leading-relaxed text-justify">športovec 1 opis</p>
        </div>
        <div class="flex flex-col items-center">
          <h3 class="text-2xl font-semibold mb-4">športovec 2</h3>
          <img src="tyler.png" alt="športovec 1" class="h-40 w-40 rounded-full object-cover mb-4 shadow-lg" />
          <p class="text-base leading-relaxed text-justify">športovec 2 opis</p>
        </div>
        <div class="flex flex-col items-center">
          <h3 class="text-2xl font-semibold mb-4">športovec 3</h3>
          <img src="tyler.png" alt="športovec 3" class="h-40 w-40 rounded-full object-cover mb-4 shadow-lg" />
          <p class="text-base leading-relaxed text-justify">športovec 3 opis</p>
        </div>
      </div> --}}
                <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                    <a href="https://externy-eshop.sk/merch" target="_blank">
                        <div class="flex justify-center gap-6">
                            <div class="flex flex-col gap-4">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/041/714/543/small_2x/ai-generated-black-blank-t-shirt-front-mockup-on-a-transparent-background-png.png"
                                    alt="Merch 7" class="w-24 h-24 object-cover rotate-[-6deg] rounded">
                            </div>

                            <div class="flex flex-col gap-4">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/041/714/543/small_2x/ai-generated-black-blank-t-shirt-front-mockup-on-a-transparent-background-png.png"
                                    alt="Merch 8" class="w-24 h-24 object-cover rotate-[3deg] rounded">
                            </div>

                            <div class="flex flex-col gap-4">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/041/714/543/small_2x/ai-generated-black-blank-t-shirt-front-mockup-on-a-transparent-background-png.png"
                                    alt="Merch 9" class="w-24 h-24 object-cover rotate-[-4deg] rounded">
                            </div>
                        </div>
                        <button class="cta-button-black">
                            e-shop s merchandise
                        </button>
                    </a>
                    <div class="text-center md:text-left">
                        <p class="text-xl text-gray-400 mb-6">
                            • infografika (content zatial neznamy?)
                            • Ako ti pohyb pomáha (funfacts) – infografika – pohyblivá + text 4-5 viet
                        </p>
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
