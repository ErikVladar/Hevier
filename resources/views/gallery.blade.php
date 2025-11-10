<x-app-layout>
    <div x-data="{ isOpen: false, activeIndex: 0 }">
        <div x-show="isOpen" x-transition.opacity x-cloak @click.self="isOpen=false"
            class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/90 text-white">

            <button @click="isOpen=false"
                class="absolute top-6 right-8 text-4xl hover:text-red-400 bg-black/40 md:bg-transparent rounded-full p-4 md:p-0 backdrop-blur-sm">&times;</button>

            <button @click="activeIndex = (activeIndex - 1 + {{ $images->count() }}) % {{ $images->count() }}"
                class="absolute bottom-6 left-6 md:bottom-1/2 text-3xl md:text-5xl font-bold hover:text-blue-400 z-20
           bg-black/40 md:bg-transparent rounded-full p-4 md:p-0 backdrop-blur-sm">
                &lt;
            </button>

            <button @click="activeIndex = (activeIndex + 1) % {{ $images->count() }}"
                class="absolute bottom-6 right-6 md:bottom-1/2 text-3xl md:text-5xl font-bold hover:text-blue-400 z-20
           bg-black/40 md:bg-transparent rounded-full p-4 md:p-0 backdrop-blur-sm">
                &gt;
            </button>


            <div class="relative flex flex-col md:flex-row items-center justify-center gap-8 w-full max-w-7xl px-6">

                <div class="flex-1 flex justify-center items-center">
                    @foreach ($images as $index => $image)
                        <img src="{{ $image->path }}" alt="{{ $image->title }}"
                            class="max-h-[80vh] w-auto object-contain rounded-lg"
                            x-show="activeIndex === {{ $index }}">
                    @endforeach
                </div>

                <div class="flex-1 text-left space-y-4">
                    @foreach ($images as $index => $image)
                        <div x-show="activeIndex === {{ $index }}">
                            <h3 class="text-3xl font-bold">{{ $image->title }}</h3>
                            <p class="text-lg text-gray-200">{{ $image->description }}</p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
        <x-foreground>
            <section class="py-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                    <h2
                        class="animate__animated animate__zoomIn animate__slow text-6xl font-bold text-center mb-12 text-black">
                        Galéria
                    </h2>

                    {{-- @if ($images->count())
                        @php
                            $cover = $images->first();
                            $extraCount = $images->count() - 1;
                            $galleryName = 'Tvorcovia knihy';
                        @endphp

                        <a href="#" @click.prevent="activeIndex=0; isOpen=true"
                            class="animate__animated animate__zoomIn animate__slow relative block w-full max-w-3xl mx-auto rounded-xl overflow-hidden cursor-pointer shadow-lg">

                            <img src="{{ $cover->path }}" alt="{{ $cover->title }}"
                                class="w-full h-96 object-cover transition-transform duration-300 hover:scale-105">

                            @if ($extraCount > 0)
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center">
                                    <span class="text-white text-2xl font-semibold mb-2">{{ $galleryName }}</span>
                                    <span class="text-white text-4xl font-bold">+{{ $extraCount }}</span>
                                </div>
                            @endif
                        </a>
                    @endif --}}
                    {{-- 
                    <div class="flex flex-col items-center justify-center min-h-screen px-4 space-y-6">
                        <div class="w-full max-w-full overflow-hidden flex justify-between gap-4 flex-wrap z-30">

                            <!-- Left iframe: hidden on mobile -->
                            <iframe src="https://www.instagram.com/reel/DQuAjb7DZcR/embed" width="100%" height="340"
                                frameborder="0" scrolling="no" allowtransparency="true"
                                class="bg-transparent xl:flex-1 w-full rounded-md shadow-md"></iframe>

                            <!-- Middle iframe: full width on mobile, one-third on md+ -->
                            <iframe src="https://www.instagram.com/p/DQrW0c5jd67/embed" width="100%" height="475"
                                frameborder="0" scrolling="no" allowtransparency="true"
                                class="bg-transparent xl:flex-1 w-full rounded-md shadow-md"></iframe>

                            <!-- Right iframe: hidden on mobile -->
                            <iframe src="https://www.instagram.com/p/DQpDd95jexD/embed" width="100%" height="565"
                                frameborder="0" scrolling="no" allowtransparency="true"
                                class="bg-transparent xl:flex-1 w-full rounded-md shadow-md"></iframe>

                        </div>
                    </div> --}}

                    {{-- <div class="flex flex-col items-center justify-center space-y-6 max-w-2xl mx-auto px-4">

                        <div class="w-full" style="aspect-ratio: 340/340;">
                            <iframe src="https://www.instagram.com/reel/DQuAjb7DZcR/embed"
                                class="w-full h-full rounded-md shadow-md" frameborder="0" scrolling="no"
                                allowtransparency="true"></iframe>
                        </div>

                        <div class="w-full" style="aspect-ratio: 100/140;">
                            <iframe src="https://www.instagram.com/p/DQrW0c5jd67/embed"
                                class="w-full h-full rounded-md shadow-md" frameborder="0" scrolling="no"
                                allowtransparency="true"></iframe>
                        </div>

                        <div class="w-full" style="aspect-ratio: 100/165;">
                            <iframe src="https://www.instagram.com/p/DQpDd95jexD/embed"
                                class="w-full h-full rounded-md shadow-md" frameborder="0" scrolling="no"
                                allowtransparency="true"></iframe>
                        </div>
                    </div> --}}

                    <!-- Elfsight Instagram Feed | Untitled Instagram Feed -->
                    <script src="https://elfsightcdn.com/platform.js" async></script>
                    <div class="elfsight-app-9d6444a3-19bd-4638-b98a-d8a519ec76d4" data-elfsight-app-lazy></div>

                </div>

            </section>
        </x-foreground>
    </div>
</x-app-layout>

<script async src="//www.instagram.com/embed.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (window.instgrm) {
            window.instgrm.Embeds.process();
        }
    });
</script>
