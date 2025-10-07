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
        /* background: linear-gradient(to right, rgba(24, 76, 139), rgba(191, 219, 254, 0)); */
    }

    #partners {
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

        <section id="partners" class="md:pt-20 pb-32 py-16 bg-white/30 px-4 text-center rounded-3xl">
            <h1 class="text-7xl font-bold mb-10 text-blue-900">Partneri</h1>

            <hr class="border-t mb-8 mt-8 mx-32 border-gray-600">

            <h2 class="text-4xl font-bold mb-10 text-blue-900">Generálny partner</h2>

            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24"
                style="justify-content: space-around;  align-items:center">
                <!-- Partner Card -->
                <div class="min-h-40 relative flex flex-col group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/O2-Logo.svg" alt="Partner"
                        class="rounded-lg max-w-40  object-cover">

                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">O2</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="text-4xl font-bold mb-10 text-blue-900">Hlavný partner</h2>

            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24"
                style="justify-content: space-around;  align-items:center">
                <!-- Partner Card -->
                <div class="relative flex items-center group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Veolia_logo.svg/2560px-Veolia_logo.svg.png"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">

                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Veolia</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>

            </div>

            <h2 class="text-4xl font-bold mb-10 text-blue-900">Partneri</h2>

            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24"
                style="justify-content: space-around;  align-items:center">
                <!-- Partner Card -->
                <div class="relative flex flex-col group">
                    <img src="https://dam.nmhmedia.sk/image/c2107e8c-84dd-40be-be86-44d1d66d1828_dam-url7yyatp.png/960/540"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">

                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Budiš</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>
                <div class="relative flex flex-col group">
                    <img src="https://i.logos-download.com/51884/10828-og-fe588eea4a70679217dfeb4d4744ee52.png/Rajo_Logo_og.png"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">

                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Rajo</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="relative flex flex-col items-center group">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1ovnROEisRemEyCj5e32XBEgP2rv36tjegQ&s"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">

                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Ovko</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div> --}}
                <div class="relative flex flex-col group">
                    <img src="https://www.javys.sk/data/web/dokumenty/javys-logo/javys-logo-doplnkovy-variant.png"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">
                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Javys</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>
                <div class="relative flex flex-col group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Energetický_a_průmyslový_holding_logo.svg/250px-Energetický_a_průmyslový_holding_logo.svg.png"
                        alt="Partner" class="max-w-40 object-cover">
                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">EPH</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>
                <div class="relative flex flex-col group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/ASBIS_logo.svg/708px-ASBIS_logo.svg.png"
                        alt="Partner" class="max-w-40 object-cover">
                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Asbis</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="relative flex flex-col items-center group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a6/SEPS_Slovakia_logo_Slovak_Transmission_Operator_logo.jpg"
                        alt="Partner" class="max-w-40 object-cover">
                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">SEPS</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div> --}}
                <div class="relative flex flex-col group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/SPP_logo.jpg" alt="Partner"
                        class="max-w-40 object-cover">
                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Nadácia SPP</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>
                <div class="relative flex flex-col group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Zoznam_logo.png" alt="Partner"
                        class="max-w-40 object-cover">
                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Zoznam.sk</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="text-4xl font-bold mb-10 text-blue-900">Inštitucionálni Partneri</h2>

            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24"
                style="justify-content: space-around;  align-items:center">
                <!-- Partner Card -->
                <div class="relative flex flex-col group">
                    <img src="https://www.vsstz.sk/wp-content/uploads/2017/04/logo-ministerstvo-skolstva-1400x441-1.png"
                        alt="Partner" class="max-h-28 object-cover">

                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Ministerstvo</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="relative flex flex-col items-center group">
                    <img src="https://www.zmos.sk/portals_pictures/i_007593/i_7593370.png" alt="Partner"
                        class="rounded-lg max-w-40 object-cover">

                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Združenie miest a obcii</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div> --}}
                <div class="relative flex flex-col group">
                    <img src="https://static.wixstatic.com/media/14ec17_7e7784d635ce44f19b966c1b0f656095~mv2.png/v1/fill/w_200,h_200,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Logo_UNIA-MIEST.png"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">

                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Únia Miest</h3>
                            <p>"..."</p>
                        </div>
                    </div>
                </div>
                <div class="relative flex flex-col group">
                    <img src="https://nivam.sk/wp-content/uploads/2023/07/Nivam-logo-farebna-verzia-2.png"
                        alt="Partner" class="max-h-28  object-cover">
                    <div
                        class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Nivam</h3>
                            <p>"..."</p>
                        </div>
                    </div>
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
