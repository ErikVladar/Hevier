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

    #merch {
        position: relative;
        /* Gradient overlay: transparent top → light blue bottom */
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(191, 219, 254, 1));

        /* Blur the content behind */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);

        /* Optional for better layering */
        border-radius: 0;
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
    <div class=" min-h-full">
        <nav id="navbar" class="fixed top-0 z-30 w-full text-xl bg-blue-200 transition-all duration-300">
            <x-navbar />
        </nav>
    </div>
    <div
        class="bg-hero md:pt-20 bg-scroll md:bg-fixed md:bg-cover bg-center bg-repeat items-center md:bg-no-repeat [@media(min-width:1080px)]:px-20">
        <div class="w-full relative bg-cover bg-centerm-32 px-20 mt-12 items-center justify-center text-center">
            <section id="about" class="grid grid-cols-1 md:grid-cols-2 items-stretch min-h-screen">
                <div id="title" class="flex flex-col h-full p-12">
                    <!-- Title -->
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
                        <h1 class="text-black text-8xl text-left mb-4">{{ $content['about']['title'] }}</h1>
                    @endauth

                    <!-- Body -->
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
                        <p class="text-gray-800 text-3xl text-left">
                            {{ $content['about']['body'] }}
                        </p>
                    @endauth
                </div>

                <div id="cover" class="flex flex-col h-full w-full items-center justify-center p-12">
                    <img src="/imgs/TITULKA.jpg" alt="Book Cover" style="max-height:60vh; height:auto; width:auto;"
                        class="shadow-2xl shadow-black/90 object-contain">

                    <button type="button" onclick="window.location.href='/shop'" class="cta-button">
                        Kúpiť
                    </button>
                </div>
            </section>
        </div>
        <section class="relative w-full overflow-hidden px-20">
            <section id="merch"
                class="relative w-full min-h-screen grid grid-cols-1 md:grid-cols-1 gap-10 items-center justify-center text-center px-6">

                <section id="about-parents" class="text-left text-gray-900 py-12 px-6 md:px-16">
                    <div class="max-w-4xl p-8 mx-auto">

                        {{-- Lead paragraph / editable --}}
                        @auth
                            <form method="POST" action="{{ route('content.update') }}" class="mb-6">
                                @csrf
                                <input type="hidden" name="field" value="about_parents_lead">
                                <textarea name="lead" rows="4" class="w-full border rounded px-3 py-2 mb-3">{{ $content['about_parents']['lead'] ?? 'STRÁŽCOVIA POHYBU nie je len ďalšia kniha do police. Je to príbeh, ktorý učí deti, že pohyb je viac než šport či tréning – je to energia, ktorá nás drží pri živote. Hrdinovia knihy ukazujú, že sila, odvaha a priateľstvo sa budujú v pohybe, nie pri obrazovke.' }}</textarea>
                                <button type="submit"
                                    class="px-4 py-2 bg-green-600 text-white rounded shadow-sm hover:bg-green-700">
                                    Uložiť
                                </button>
                            </form>
                        @else
                            <div class="mb-6 space-y-4 text-black">
                                <p class="text-5xl font-extrabold tracking-tight">
                                    STRÁŽCOVIA <span class="text-blue-800">POHYBU</span>
                                </p>

                                <p class="text-2xl md:text-3xl leading-relaxed max-w-3xl">
                                    Nie je len kniha do police.
                                    Je to <span class="italic">dobrodružstvo</span>, ktoré učí deti, že
                                    <span class="font-semibold text-green-700">pohyb je energia života</span> – viac než len
                                    šport či tréning.
                                </p>

                                <p class="text-2xl md:text-3xl leading-relaxed max-w-3xl">
                                    Hrdinovia ukazujú, že <span class="underline decoration-green-700">sila, odvaha a
                                        priateľstvo</span>
                                    sa rodia v pohybe – nie pri obrazovke.
                                </p>
                            </div>

                        @endauth

                        {{-- Why parents section --}}
                        <div class="rounded-lg bg-blue-200 p-6 md:p-8">
                            <h3 class="text-5xl text-gray-600 font-semibold mb-4">Prečo to ocenia rodičia?</h3>

                            {{-- Editable list --}}
                            @auth
                                <form method="POST" action="{{ route('content.update') }}" class="space-y-4">
                                    @csrf
                                    <input type="hidden" name="field" value="about_parents_points">
                                    <textarea name="points" rows="6" class="w-full border rounded px-3 py-2">{{ $content['about_parents']['points'] ?? "Zdravý vzor: Dieťa dostane hrdinov, ktorí inšpirujú k aktívnemu životu namiesto pasívneho sedenia.\n\nDobrodružstvo + ponaučenie: Nie je to suché moralizovanie, ale napínavý príbeh, v ktorom sa deti učia nenápadne – cez emócie a zážitky.\n\nSpojenie rodiny: Kniha vytvára priestor na rozhovory o zdravom životnom štýle, pohybe a hodnotách." }}</textarea>
                                    <div>
                                        <button type="submit"
                                            class="px-4 py-2 bg-green-600 text-white rounded shadow-sm hover:bg-green-700">
                                            Uložiť
                                        </button>
                                    </div>
                                </form>
                            @else
                                <div class="mt-4 p-4 text-2xl border-l-4 border-blue-500 text-gray-900 rounded">
                                    <ul class="list-disc pl-5 space-y-3 mb-4">
                                        <li><strong>Zdravý vzor:</strong> Dieťa dostane hrdinov, ktorí inšpirujú k aktívnemu
                                            životu namiesto pasívneho sedenia.</li>
                                        <li><strong>Dobrodružstvo + ponaučenie:</strong> Nie je to suché moralizovanie, ale
                                            napínavý príbeh, v ktorom sa deti učia nenápadne – cez emócie a zážitky.</li>
                                        <li><strong>Spojenie rodiny:</strong> Kniha vytvára priestor na rozhovory o zdravom
                                            životnom štýle, pohybe a hodnotách.</li>
                                    </ul>
                                </div>
                            @endauth
                        </div>
                    </div>
                </section>
            </section>

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
        </section>
    </div>

    <!-- full-width band with vertical spacing -->
    {{-- <section class="bg-blue-200">
        <div class="max-w-7xl mx-auto px-6 py-6">
            <!-- content container (centered & constrained) -->
            <main class="space-y-0">
                <section id="reviews" class="flex flex-col justify-center space-y-12 m-6">
                    @auth
                        <form method="POST" action="{{ route('content.update') }}" class="mb-4">
                            @csrf
                            <input type="hidden" name="field" value="reviews">
                            <input type="text" name="reviews" value="{{ $content['about']['reviews'] }}"
                                class="w-full text-4xl font-bold border rounded px-2 py-1 mb-2">
                            <button type="submit"
                                class="px-6 py-3 bg-green-600 text-white font-semibold rounded-xl shadow-md 
                                       hover:bg-blue-700 transform hover:scale-105 transition duration-200">
                                Uložiť
                            </button>
                        </form>
                    @else
                        <h2 class="text-4xl font-bold text-center mb-4">{{ $content['about']['reviews'] }}</h2>
                    @endauth

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach ($reviews as $review)
                            <article
                                class="bg-white dark:bg-gray-200 rounded-2xl shadow-lg p-6 flex flex-col items-center text-center">
                                <img src="{{ $review->photo ?? '/images/default-avatar.png' }}"
                                    alt="{{ $review->name }}"
                                    class="w-20 h-20 rounded-full object-cover mb-4 shadow-md">
                                <h3 class="text-lg font-bold mb-2">{{ $review->name }}</h3>

                                <!-- IMPORTANT: add leading-relaxed for readable line-height -->
                                <p class="mt-2 text-gray-500 text-xl leading-relaxed">
                                    "{{ $review->text }}"
                                </p>

                                @auth
                                    <div class="mt-4 flex space-x-2">
                                        <a href="{{ route('reviews.edit', $review) }}"
                                            class="px-3 py-1 bg-yellow-500 text-white rounded-lg text-sm">Upraviť</a>
                                        <form method="POST" action="{{ route('reviews.destroy', $review) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1 bg-red-600 text-white rounded-lg text-sm">X</button>
                                        </form>
                                    </div>
                                @endauth
                            </article>
                        @endforeach
                    </div>

                    @auth
                        <div class="text-center">
                            <a href="{{ route('reviews.create') }}"
                                class="inline-block px-8 py-4 bg-green-600 text-white text-lg font-semibold rounded-2xl shadow-lg transform hover:scale-105 hover:bg-green-700">
                                Pridať
                            </a>
                        </div>
                    @endauth
                </section>
            </main>
        </div>
    </section> --}}
    <section class="w-full bg-blue-200 py-12">
        <!-- Section heading -->
        <h2 class="text-4xl font-bold text-center mb-12">Recenzie</h2>

        <!-- Reviews grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-6">

            <!-- Review 1 -->
            <article class="bg-blue-100 rounded-2xl shadow-lg p-6 flex flex-col items-center text-center">
                <img src="/imgs/review2.png" alt="Mária Nováková"
                    class="w-20 h-20 rounded-full object-cover mb-4 shadow-md">
                <h3 class="text-lg font-bold mb-2">Mária Nováková</h3>
                <p class="mt-2 text-gray-700 text-xl leading-relaxed">
                    "Táto kniha úplne zmenila prístup môjho dieťaťa k pohybu – teraz sa teší na každý deň!"
                </p>
            </article>

            <!-- Review 2 -->
            <article class="bg-blue-100 rounded-2xl shadow-lg p-6 flex flex-col items-center text-center">
                <img src="/imgs/review1.png" alt="Peter Horváth"
                    class="w-20 h-20 rounded-full object-cover mb-4 shadow-md">
                <h3 class="text-lg font-bold mb-2">Peter Horváth</h3>
                <p class="mt-2 text-gray-700 text-xl leading-relaxed">
                    "Úžasný príbeh a inšpirácia pre deti, aby sa hýbali a objavovali nové aktivity."
                </p>
            </article>

            <!-- Review 3 -->
            <article class="bg-blue-100 rounded-2xl shadow-lg p-6 flex flex-col items-center text-center">
                <img src="/imgs/lara.png" alt="Lara Kováčová"
                    class="w-20 h-20 rounded-full object-cover mb-4 shadow-md">
                <h3 class="text-lg font-bold mb-2">Lara Kováčová</h3>
                <p class="mt-2 text-gray-700 text-xl leading-relaxed">
                    "Moje deti sa do knihy úplne ponorili a každý deň skúšajú nové pohybové výzvy."
                </p>
            </article>

        </div>
    </section>


    <x-footer />
</body>

</html>
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
