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

    <!-- Lightbox2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
</head>

<style>
    @font-face {
        font-family: 'Allan';
        src: url('/Allan/Allan-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Kaushan';
        src: url('/Kaushan/KaushanScript-Regular.ttf') format('truetype');
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

    #partners {
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }
</style>

<body class="font-[Kaushan] antialiased">

    <!-- Scroll to top -->
    <button id="scrollToTopBtn"
        class="fixed bottom-16 right-6 z-50 w-12 h-12 bg-gray-800 text-white text-xl rounded-full shadow-lg 
         opacity-0 pointer-events-none hover:opacity-100 transition-opacity duration-300 
         flex items-center justify-center"
        aria-label="Scroll to top">↑</button>

    <!-- Navbar -->
    <div class="min-h-full">
        <nav id="navbar" class="fixed top-0 z-30 w-full text-xl transition-all duration-300">
            <x-navbar />
        </nav>
    </div>

    <!-- Partners Section -->
    <div class="bg-hero md:pt-20 bg-scroll md:bg-fixed bg-center bg-repeat md:bg-no-repeat [@media(min-width:1080px)]:px-20">
        <section id="partners" class="md:pt-20 pb-32 py-16 bg-white/30 px-4 text-center rounded-t-3xl">
            
            <h1 class="text-7xl font-bold mb-10 text-blue-900" data-aos="fade-down">Partneri</h1>
            <hr class="border-t mb-8 mt-8 mx-32 border-gray-600" data-aos="fade-right">

            <!-- General Partner -->
            <h2 class="text-4xl font-bold mb-10 text-blue-900">Generálny partner</h2>
            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24" style="justify-content: space-around; align-items:center">
                <div class="min-h-40 relative flex flex-col group" data-aos="zoom-in">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/O2-Logo.svg" alt="Partner"
                        class="rounded-lg max-w-40 object-cover">
                    {{-- <div class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 
                        text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">O2</h3>
                            <p>"..."</p>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Main Partner -->
            <h2 class="text-4xl font-bold mb-10 text-blue-900">Hlavný partner</h2>
            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24" style="justify-content: space-around; align-items:center">
                <div class="relative flex items-center group" data-aos="zoom-in">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Veolia_logo.svg/2560px-Veolia_logo.svg.png"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">
                    {{-- <div class="mt-12 -mb-12 absolute inset-0 flex items-center justify-center bg-white/90 text-gray-800 
                        text-sm p-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-40 min-h-32">
                        <div class="text-center">
                            <h3 class="font-semibold text-lg mb-1">Veolia</h3>
                            <p>"..."</p>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Partners -->
            <h2 class="text-4xl font-bold mb-10 text-blue-900">Partneri</h2>
            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24" style="justify-content: space-around; align-items:center">
                <div class="relative flex flex-col group" data-aos="fade-up" data-aos-delay="50">
                    <img src="https://dam.nmhmedia.sk/image/c2107e8c-84dd-40be-be86-44d1d66d1828_dam-url7yyatp.png/960/540"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">
                    <div class="overlay"></div>
                </div>
                <div class="relative flex flex-col group" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://i.logos-download.com/51884/10828-og-fe588eea4a70679217dfeb4d4744ee52.png/Rajo_Logo_og.png"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">
                </div>
                <div class="relative flex flex-col group" data-aos="fade-up" data-aos-delay="150">
                    <img src="https://www.javys.sk/data/web/dokumenty/javys-logo/javys-logo-doplnkovy-variant.png"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">
                </div>
                <div class="relative flex flex-col group" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Energetický_a_průmyslový_holding_logo.svg/250px-Energetický_a_průmyslový_holding_logo.svg.png"
                        alt="Partner" class="max-w-40 object-cover">
                </div>
                <div class="relative flex flex-col group" data-aos="fade-up" data-aos-delay="250">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/ASBIS_logo.svg/708px-ASBIS_logo.svg.png"
                        alt="Partner" class="max-w-40 object-cover">
                </div>
                <div class="relative flex flex-col group" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/SPP_logo.jpg"
                        alt="Partner" class="max-w-40 object-cover">
                </div>
                <div class="relative flex flex-col group" data-aos="fade-up" data-aos-delay="350">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Zoznam_logo.png"
                        alt="Partner" class="max-w-40 object-cover">
                </div>
            </div>

            <!-- Institutional Partners -->
            <h2 class="text-4xl font-bold mb-10 text-blue-900">Inštitucionálni Partneri</h2>
            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24" style="justify-content: space-around; align-items:center">
                <div class="relative flex flex-col group" data-aos="zoom-in">
                    <img src="https://www.vsstz.sk/wp-content/uploads/2017/04/logo-ministerstvo-skolstva-1400x441-1.png"
                        alt="Partner" class="max-h-28 object-cover">
                </div>
                <div class="relative flex flex-col group" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://static.wixstatic.com/media/14ec17_7e7784d635ce44f19b966c1b0f656095~mv2.png/v1/fill/w_200,h_200,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Logo_UNIA-MIEST.png"
                        alt="Partner" class="rounded-lg max-w-40 object-cover">
                </div>
                <div class="relative flex flex-col group" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://nivam.sk/wp-content/uploads/2023/07/Nivam-logo-farebna-verzia-2.png"
                        alt="Partner" class="max-h-28 object-cover">
                </div>
            </div>
        </section>
    </div>

    <x-footer />

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-in-out'
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.3.0/dist/flowbite.min.js"></script>

    <script>
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
        scrollBtn.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
    </script>
</body>
</html>
