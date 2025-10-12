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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="/turn/turn.js"></script>
</head>

@php
    use App\Models\Review;

    $reviews = [
        new Review([
            'photo' => 'review2.png',
            'name' => 'Mária Nováková',
            'rating' => 4.5,
            'text' => 'Táto kniha úplne zmenila prístup môjho dieťaťa k pohybu – teraz sa teší na každý deň!',
        ]),
        new Review([
            'photo' => 'review1.png',
            'name' => 'Peter Horváth',
            'rating' => 4,
            'text' => 'Úžasný príbeh a inšpirácia pre deti, aby sa hýbali a objavovali nové aktivity.',
        ]),
        new Review([
            'photo' => 'lara.png',
            'name' => 'Lara Kováčová',
            'rating' => 5,
            'text' => 'Skvelá kniha',
        ]),
    ];
@endphp



<body class="font-[Kaushan] antialiased">
    <div id="book-modal"
        class="fixed inset-0 hidden justify-center items-center bg-black bg-opacity-70 z-50 transition-opacity duration-300">

        <!-- Close button (absolute to viewport) -->
        <button id="close-book" class="absolute top-6 right-8 text-white text-4xl font-bold z-[60] hover:text-gray-300">
            ×
        </button>

        <!-- Flipbook centered -->
        <div id="flipbook" class="shadow-2xl" style="width: 900px; height: 650px;">
            <div class="hard">
                <img src="/imgs/TITULKA.jpg" class="w-full h-full object-cover" />
            </div>
            <div class="bg-gray-200 hard"></div>
            <div class="bg-white flex items-center justify-center text-2xl">Page 1</div>
            <div class="bg-white flex items-center justify-center text-2xl">Page 2</div>
            <div class="bg-white flex items-center justify-center text-2xl">Page 3</div>
            <div class="bg-white flex items-center justify-center text-2xl">Page 4</div>
            <div class="bg-gray-200 hard"></div>
            <div class="bg-gray-200 hard"></div>
        </div>
    </div>
    <div class=" min-h-full">
        <nav id="navbar" class="fixed top-0 z-30 w-full text-xl transition-all duration-300">
            <x-navbar />
        </nav>
    </div>
    <div
        class="bg-hero md:pt-20 bg-scroll md:bg-fixed md:bg-cover bg-center bg-repeat items-center md:bg-no-repeat [@media(min-width:1080px)]:px-20">
        <div id="merch"
            class="relative w-full min-h-screen rounded-3xl grid grid-cols-1 md:grid-cols-1 gap-10 items-center justify-center text-center rounded-t-3xl">

            <div class="w-full relative bg-cover bg-centerm-32 px-20 mt-12 items-center justify-center text-center">
                <section id="about" class="grid grid-cols-1 md:grid-cols-2 items-stretch min-h-screenx">
                    <div id="title" class="flex flex-col h-full p-12">
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
                            <div class="animate-on-scroll slide-left">
                                <h1 class="text-black text-5xl sm:text-5xl md:text-6xl lg:text-8xl xl:text-9xl text-left mb-4"
                                    style="transform: rotate(-1deg); transform-origin: left;">
                                    {{ $content['about']['title_1'] }}
                                </h1>
                            </div>
                            <div class="animate-on-scroll slide-right">
                                <h1 class="text-black text-5xl sm:text-5xl md:text-6xl lg:text-8xl xl:text-9xl text-left mb-4"
                                    style="transform: rotate(-1deg); transform-origin: rigth;">
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
                            <div class="animate-on-scroll zoom-in">
                                <p class="text-gray-800 text-3xl text-left animate-on-scroll zoom-in"
                                    style="transform: rotate(-1deg); transform-origin: left;">
                                    {{ $content['about']['body'] }}
                                </p>
                            </div>
                        @endauth
                    </div>

                    <div id="cover"
                        class="flex flex-col h-full mt-32 w-full items-center justify-center animate-on-scroll slide-right">

                        <div id="book-cover" class="cursor-pointer transition-transform hover:scale-105">
                            <img src="/imgs/TITULKA.jpg" alt="Book Cover"
                                style="width:24rem; max-width:80vw; height:auto; border-radius:10px; box-shadow:0 10px 20px rgba(0,0,0,0.3);">
                        </div>

                        <button type="button" onclick="window.location.href='/shop'" class="cta-button mt-+ľ mb-20">
                            Kúpiť
                        </button>
                    </div>

                </section>
            </div>

            <div class="relative overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/imgs/merch.JPG');">
                </div>

                <div class="absolute inset-0 bg-black/50"></div>

                <div class="relative z-10 flex flex-col items-center justify-center min-h-[400px] space-y-6 p-8">
                    <button type="button" onclick="window.location.href='/shop'" class="cta-button" data-aos="zoom-in">
                        E-shop merch
                    </button>
                </div>
            </div>
        </div>
        <section id="reviews" class="w-full bg-white/20 py-12 animate-on-scroll zoom-in">
            <h2 class="text-4xl font-bold text-center mb-12">Recenzie</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-6">
                @foreach ($reviews as $review)
                    <x-review-card :review="$review" />
                @endforeach
            </div>
        </section>

    </div>

    <x-footer />
</body>

</html>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        document.querySelectorAll(".animate-on-scroll").forEach(el => observer.observe(el));
    });
</script>

<script>
    // Initialize flipbook only once
    $("#flipbook").turn({
        width: 900,
        height: 650,
        autoCenter: true
    });

    const cover = document.getElementById('book-cover');
    const modal = document.getElementById('book-modal');
    const closeBtn = document.getElementById('close-book');

    // Open modal
    cover.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex', 'opacity-100');
        document.body.style.overflow = 'hidden';
    });

    // Close modal
    closeBtn.addEventListener('click', () => {
        modal.classList.remove('opacity-100');
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }, 300);
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeBtn.click();
        }
    });
</script>

<script>
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
