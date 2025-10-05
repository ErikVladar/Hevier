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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> --}}

    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Lightbox2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />
    <!-- Lightbox2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


</head>
<style>
    @font-face {
        font-family: 'Allan';
        src: url('/Allan/Allan-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
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
                rgba(255, 255, 255, 0.7),
                rgba(0, 0, 0, 0.1));

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
        <nav id="navbar" class="fixed top-0 z-50 w-full text-xl bg-blue-200 transition-all duration-300">
            <x-navbar />
        </nav>
    </div>

    <div x-data="gallerySlideshow({{ Js::from($images) }})">
        <div
            class="bg-hero md:pt-20 bg-scroll md:bg-fixed md:bg-cover bg-center bg-repeat items-center md:bg-no-repeat [@media(min-width:1080px)]:px-20">
            <div class="bg-white/70 z-40">

                <!-- Gallery Grid -->
                <section class="py-20">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h2 class="text-6xl font-bold text-center mb-12 text-blue-900">Galéria</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                            @foreach ($images as $index => $image)
                                <button @click="show({{ $index }})">
                                    <div
                                        class="group relative overflow-hidden rounded-2xl shadow-lg hover:scale-[1.02] transition duration-300">
                                        <img src="{{ asset($image) }}" alt="Fotka {{ $index + 1 }}"
                                            class="w-full h-60 object-cover group-hover:opacity-80 transition duration-300">
                                        <div
                                            class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                                            <p class="text-white text-lg font-medium">Fotka {{ $index + 1 }}</p>
                                        </div>
                                    </div>
                                </button>
                            @endforeach

                        </div>
                    </div>
                </section>
                <!-- Slideshow Overlay -->
            </div>

        </div>
        <x-footer />
        <div x-show="open" x-transition.opacity
            class="fixed inset-0 bg-black bg-opacity-90 z-[1000] flex items-center justify-center" x-cloak>
            <!-- Close button -->
            <button @click="close"
                class="absolute top-6 right-8 text-white text-4xl hover:text-red-400">&times;</button>

            <!-- Prev Button (Left) -->
            <button @click="prev"
                class="absolute left-4 md:left-10 top-1/2 -translate-y-1/2 text-white text-5xl font-bold hover:text-blue-400 transition duration-200"
                aria-label="Previous slide">
                &lt;
            </button>

            <!-- Next Button (Right) -->
            <button @click="next"
                class="absolute right-4 md:right-10 top-1/2 -translate-y-1/2 text-white text-5xl font-bold hover:text-blue-400 transition duration-200"
                aria-label="Next slide">
                &gt;
            </button>

            <!-- Slideshow Content -->
            <div
                class="max-w-7xl w-full h-[90vh] flex flex-col md:flex-row gap-6 px-4 md:px-10 items-center justify-center">

                <!-- Left: Image -->
                <div class="w-full md:w-1/2 h-full flex items-center justify-center">
                    <img :src="currentSlide.image" alt=""
                        class="object-contain h-full max-h-full rounded-lg shadow-lg">
                </div>

                <!-- Right: Title & Description -->
                <div class="w-full md:w-1/2 text-white text-center md:text-left space-y-4">
                    <h2 class="text-3xl font-bold" x-text="currentSlide.title"></h2>
                    <p class="text-lg" x-text="currentSlide.text"></p>
                </div>

            </div>
        </div>
    </div>

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

    function gallerySlideshow(images) {
        return {
            open: false,
            slides: images.map((img, i) => ({
                image: img,
                title: `Fotka ${i + 1}`,
                text: '',
            })),
            currentIndex: 0,
            get currentSlide() {
                return this.slides[this.currentIndex];
            },
            show(index) {
                this.currentIndex = index;
                this.open = true;
                document.body.classList.add('overflow-hidden');
            },
            close() {
                this.open = false;
                document.body.classList.remove('overflow-hidden');
            },
            next() {
                this.currentIndex = (this.currentIndex + 1) % this.slides.length;
            },
            prev() {
                this.currentIndex =
                    (this.currentIndex - 1 + this.slides.length) % this.slides.length;
            },
        };
    }


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
