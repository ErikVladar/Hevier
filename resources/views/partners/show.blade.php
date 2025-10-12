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
    <div
        class="bg-hero md:pt-20 bg-scroll md:bg-fixed bg-center bg-repeat md:bg-no-repeat [@media(min-width:1080px)]:px-20">
        <section id="partners" class="md:pt-20 pb-32 py-16 bg-white/30 px-4 text-center rounded-t-3xl">
                <div class="max-w-5xl mx-auto py-16 text-center">
                    <h1 class="text-4xl font-bold mb-6 text-blue-900">{{ $partner->name }}</h1>
                    <img src="{{ asset($partner->image) }}" alt="{{ $partner->name }}" class="mx-auto max-h-64 mb-6">
                    <p class="text-gray-700">{{ $partner->description ?? 'No description available.' }}</p>

                    @if ($partner->images)
                        <div class="flex flex-wrap justify-center gap-4 mt-10">
                            @foreach (json_decode($partner->images, true) as $img)
                                <img src="{{ asset($img) }}" alt="" class="max-h-32 rounded-lg">
                            @endforeach
                        </div>
                    @endif
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
        scrollBtn.addEventListener("click", () => window.scrollTo({
            top: 0,
            behavior: "smooth"
        }));
    </script>
</body>

</html>
