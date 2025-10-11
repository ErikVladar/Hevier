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


<body class="font-[Kaushan] antialiased">

    <div class=" min-h-full">
        <nav id="navbar" class="fixed top-0 z-30 w-full text-xl transition-all duration-300">
            <x-navbar />
        </nav>
    </div>
    <div
        class="bg-hero md:pt-12 bg-scroll md:bg-fixed md:bg-cover bg-center bg-repeat items-center md:bg-no-repeat [@media(min-width:1080px)]:px-20">
        <section id="merch"
            class="relative w-full min-h-screen grid grid-cols-1 md:grid-cols-1 gap-10 items-center justify-center text-center animate-on-scroll rounded-t-3xl fade-in">

            <div class="w-full relative bg-cover bg-centerm-32 px-20 items-center justify-center text-center">

            </div>
            <section class="relative w-full overflow-hidden">
                <section id="about-parents" class="text-gray-900 py-12 px-6">
                    <div class="max-w-4xl p-8 mx-auto">
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
                        <div class="mb-12 text-black max-w-5xl mx-auto px-6 md:px-0">
                            <p class="text-5xl md:text-6xl font-extrabold tracking-tight leading-tight">
                                STRÁŽCOVIA <span class="text-blue-800">POHYBU</span>
                            </p>

                            <div class="mt-12 space-y-8 text-xl md:text-2xl leading-relaxed text-gray-900">

                                <p>
                                    Nie je len kniha do police. Je to <span class="italic">dobrodružstvo</span>, ktoré učí deti, že
                                    <span class="font-semibold text-green-700">pohyb je energia života</span> – viac než len šport či tréning.
                                    Každý hrdina, každá situácia, každá nová výzva je navrhnutá tak, aby deti spontánne motivovala vstať a skúmať, behať, skákať a hýbať sa s radosťou.
                                </p>

                                <p>
                                    Hrdinovia ukazujú, že <span class="underline decoration-green-700">sila, odvaha a priateľstvo</span>
                                    sa rodia v pohybe – nie pri obrazovke. Či už sa vydávajú do lesa, prekonávajú vlastné obavy alebo spolupracujú s kamarátmi, každý príbeh posúva dieťa o krok bližšie k objavovaniu vlastného potenciálu.
                                </p>

                                <p>
                                    Každá kapitola otvára nové dobrodružstvá: beh na lúke, horolezecké prekážky, alebo tvorivé hry, ktoré učia trpezlivosti, tímovej práci a empatii. Deti sa nenápadne učia, že aktívny život prináša radosť, energiu a pocit vlastnej sily.
                                </p>

                                <p>
                                    Rodičia sa môžu zapojiť a zdieľať tieto zážitky s deťmi, diskutovať o rozhodnutiach hrdinov, rozvíjať rozhovory o hodnotách a zdravom životnom štýle. Kniha vytvára priestor pre spoločné aktivity, kde sa rodina učí spolu, cez zábavu a pohyb, bez nátlaku.
                                </p>

                                <p>
                                    STRÁŽCOVIA POHYBU nie je len kniha. Je to komplexná cesta, ktorá kombinuje dobrodružstvo, emócie a pohyb do jedinečného zážitku. Dieťa sa učí, že aktívny život je plný možností, radosti a objavovania vlastnej sily – a že každý krok, skok či výzva ho približuje k lepšej verzii seba samého.
                                </p>

                                <p>
                                    Tento príbeh je inšpiráciou nielen pre deti, ale aj pre rodičov – ukazuje, že svet mimo obrazoviek je plný radosti, pohybu a možností. Hrdinovia sa stávajú sprievodcami, ktorí odhaľujú, že energia, odhodlanie a priateľstvo sa najlepšie rozvíjajú cez skúsenosti a akciu.
                                </p>

                            </div>
                        </div>


                        @endauth
                        <h3 class="text-5xl text-gray-600 font-semibold mb-4">Prečo to ocenia rodičia?</h3>


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

                    </div>

                    <x-text-extend title="Zdravy vzor" description="Nie je to suché moralizovanie, ale napínavý príbeh, v ktorom sa deti učia nenápadne – cez emócie a zážitky." />

                    <div x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
                        class="bg-white rounded-lg shadow-lg p-6 cursor-pointer w-full max-w-sm md:max-w-md lg:max-w-lg transform transition-all duration-300 hover:scale-105 overflow-hidden">

                        <div class="grid grid-cols-[auto_1fr] items-center gap-x-4">
                            <div class="text-lg font-bold flex-shrink-0 transition-all duration-300"
                                :class="hover ? 'text-xl' : 'text-lg'">
                                Dobrodružstvo + ponaučenie
                            </div>

                            <div x-show="hover" x-transition:enter="transition ease-out duration-300 transform"
                                x-transition:enter-start="opacity-0 translate-x-4"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-200 transform"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 translate-x-4"
                                class="text-gray-700 text-base flex-1">
                                Nie je to suché moralizovanie, ale napínavý príbeh, v ktorom sa deti učia
                                nenápadne
                                – cez emócie a zážitky.
                            </div>
                        </div>
                    </div>

                    <div x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
                        class="bg-white rounded-lg shadow-lg p-6 cursor-pointer w-full max-w-sm md:max-w-md lg:max-w-lg transform transition-all duration-300 hover:scale-105 overflow-hidden">

                        <div class="grid grid-cols-[auto_1fr] items-center gap-x-4">
                            <div class="text-lg font-bold flex-shrink-0 transition-all duration-300"
                                :class="hover ? 'text-xl' : 'text-lg'">
                                Spojenie rodiny
                            </div>

                            <div x-show="hover"
                                x-transition:enter="transition ease-out duration-300 transform"
                                x-transition:enter-start="opacity-0 translate-x-4"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-200 transform"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 translate-x-4"
                                class="text-gray-700 text-base flex-1">
                                Kniha vytvára priestor na rozhovory o zdravom životnom štýle, pohybe a
                                hodnotách.
                            </div>
                        </div>
                    </div>
    </div>
    @endauth
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
            <button type="button" onclick="window.location.href='/shop'" class="cta-button"
                data-aos="zoom-in">
                E-shop merch
            </button>
        </div>
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

    // Close on background click
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeBtn.click();
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