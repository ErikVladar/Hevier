<x-app-layout>
    <x-foreground>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-8 lg:px-8">
                <h2
                    class="animate__animated animate__zoomIn animate__slow text-6xl font-bold text-center mb-12 text-black">
                    Pohyb v číslach
                </h2>

                <li>Koľko nás stojí detská obezita</li>
                <x-slide-show :urls="$slides[1]" :slideCount="count($slides[1])" />
            </div>
        </section>

        <script src="{{ Vite::asset('resources/js/slideshow.js') }}"></script>
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/slideshow.css') }}">
        </link>

    </x-foreground>
</x-app-layout>