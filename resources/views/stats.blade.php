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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
        <div id="more-main" class="bg-white/40 rounded-t-3xl">
            <section class="p-10 space-y-10 max-w-7xl mx-auto">

                <div class="text-center space-y-4">
                    <h1 class="text-6xl font-bold text-gray-800">Štatistiky o pohybe detí</h1>
                    <p class="text-2xl text-gray-600">Ako aktívne sú deti?</p>
                </div>

                <div class="grid md:grid-cols-2 gap-10">
                    <div class="bg-white/70 rounded-2xl shadow-lg p-8">
                        <h2 class="text-3xl font-semibold mb-6 text-gray-800">Priemerný denný pohyb detí</h2>
                        <canvas id="activityChart" class="w-full h-[300px]"></canvas>
                        <p class="mt-4 text-gray-600 text-lg">
                            Väčšina detí sa k odporúčaným 60 minútam denne nepribližuje.
                        </p>
                    </div>

                    <div class="bg-white/70 rounded-2xl shadow-lg p-8">
                        <h2 class="text-3xl font-semibold mb-6 text-gray-800">Čas pred obrazovkou</h2>
                        <canvas id="screenTimeChart" class="w-full h-[300px]"></canvas>
                        <p class="mt-4 text-gray-600 text-lg">
                            Deti trávia viac času pred obrazovkou, než v pohybe.
                        </p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10">
                    <div class="bg-white/70 rounded-2xl shadow-lg p-8 overflow-x-auto">
                        <h2 class="text-3xl font-semibold mb-6 text-gray-800">Najobľúbenejšie športy</h2>
                        <table class="min-w-full text-left border-collapse text-base">
                            <thead class="bg-blue-200 text-gray-800">
                                <tr>
                                    <th class="px-4 py-2 border-b">Šport</th>
                                    <th class="px-4 py-2 border-b">% detí</th>
                                    <th class="px-4 py-2 border-b">Chlapci</th>
                                    <th class="px-4 py-2 border-b">Dievčatá</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr class="hover:bg-blue-50">
                                    <td class="px-4 py-2 border-b">Futbal</td>
                                    <td>42%</td>
                                    <td>60%</td>
                                    <td>22%</td>
                                </tr>
                                <tr class="hover:bg-blue-50">
                                    <td class="px-4 py-2 border-b">Tanec</td>
                                    <td>28%</td>
                                    <td>6%</td>
                                    <td>48%</td>
                                </tr>
                                <tr class="hover:bg-blue-50">
                                    <td class="px-4 py-2 border-b">Plávanie</td>
                                    <td>34%</td>
                                    <td>32%</td>
                                    <td>36%</td>
                                </tr>
                                <tr class="hover:bg-blue-50">
                                    <td class="px-4 py-2 border-b">Cyklistika</td>
                                    <td>25%</td>
                                    <td>27%</td>
                                    <td>23%</td>
                                </tr>
                                <tr class="hover:bg-blue-50">
                                    <td class="px-4 py-2 border-b">Gymnastika</td>
                                    <td>18%</td>
                                    <td>5%</td>
                                    <td>32%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-white/70 rounded-2xl shadow-lg p-8">
                        <h2 class="text-3xl font-semibold mb-6 text-gray-800">Koľko detí spĺňa odporúčania</h2>
                        <canvas id="pieChart" class="w-full h-[300px]"></canvas>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl shadow-inner p-10 text-center text-gray-800">
                    <h3 class="text-3xl font-bold mb-4">Zhrnutie</h3>
                    <p class="text-xl leading-relaxed max-w-4xl mx-auto">
                        Pohybové návyky detí sa zhoršujú – iba <span class="font-semibold">1 z 3</span> spĺňa odporúčané
                        úrovne aktivity.
                        Pasívny životný štýl postupne nahrádza prirodzený pohyb, ktorý je kľúčom k zdraviu, sústredeniu
                        a dobrej nálade.
                    </p>
                </div>

            </section>
        </div>
    </div>
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.3.0/dist/flowbite.min.js"></script>
</body>

<script>
    // Activity Chart
    new Chart(document.getElementById('activityChart'), {
        type: 'bar',
        data: {
            labels: ['6–8 r.', '9–11 r.', '12–14 r.', '15–17 r.'],
            datasets: [{
                label: 'Minút denne',
                data: [75, 62, 48, 35],
                backgroundColor: 'rgba(37, 99, 235, 0.7)'
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Screen Time Chart
    new Chart(document.getElementById('screenTimeChart'), {
        type: 'line',
        data: {
            labels: ['Po', 'Ut', 'St', 'Št', 'Pi', 'So', 'Ne'],
            datasets: [{
                label: 'Hodiny denne',
                data: [2.5, 2.8, 3.0, 3.2, 3.5, 4.2, 4.0],
                borderColor: 'rgba(234, 88, 12, 0.9)',
                tension: 0.3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Pie Chart
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: ['Spĺňajú odporúčanie', 'Nespĺňajú'],
            datasets: [{
                data: [33, 67],
                backgroundColor: ['rgba(34,197,94,0.8)', 'rgba(239,68,68,0.8)'],
                borderWidth: 0
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>

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
