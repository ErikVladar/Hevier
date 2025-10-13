<x-app-layout>
    <div id="book-modal"
        class="fixed inset-0 hidden justify-center items-center bg-black bg-opacity-70 z-50 transition-opacity duration-300">

        <!-- Close button (absolute to viewport) -->
        <button id="close-book" class="absolute top-6 right-8 text-white text-4xl font-bold z-[60] hover:text-gray-300">
            ×
        </button>

        <!-- Flipbook centered -->
        <div id="flipbook" class="shadow-2xl" style="width: 900px; height: 650px;">
            <div class="hard">
                <img src="storage/imgs/TITULKA.jpg" class="w-full h-full object-cover" />
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
    <x-foreground>
        <div
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
                            <div>
                                <h1 class="animate__animated animate__backInLeft text-black text-5xl sm:text-5xl md:text-6xl lg:text-8xl xl:text-9xl text-left mb-4"
                                    style="transform: rotate(-1deg); transform-origin: left;">
                                    {{ $content['about']['title_1'] }}
                                </h1>
                            </div>
                            <div>
                                <h1 class="animate__animated animate__backInRight text-black text-5xl sm:text-5xl md:text-6xl lg:text-8xl xl:text-9xl text-left mb-4"
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
                            <div>
                                <p class="animate__animated animate__backInUp text-gray-800 text-3xl text-left"
                                    style="transform: rotate(-1deg); transform-origin: left;">
                                    {{ $content['about']['body'] }}
                                </p>
                            </div>
                        @endauth
                    </div>

                    <div id="cover" class="flex flex-col h-full mt-32 w-full items-center justify-center">

                        <div id="book-cover"
                            class="animate__animated animate__backInRight cursor-pointer transition-transform hover:scale-105">
                            <img src="storage/imgs/TITULKA.jpg" alt="Book Cover"
                                style="width:24rem; max-width:80vw; height:auto; border-radius:10px; box-shadow:0 10px 20px rgba(0,0,0,0.3);">
                        </div>

                        <button type="button" onclick="window.location.href='/shop'" class="cta-button mt-12 mb-20">
                            Kúpiť
                        </button>
                    </div>

                </section>
            </div>

            <div class="relative overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('storage/imgs/merch.JPG');">
                </div>

                <div class="absolute inset-0 bg-black/50"></div>

                <div class="relative z-10 flex flex-col items-center justify-center min-h-[400px] space-y-6 p-8">
                    <a href="https://shop.hevi.sk/" target="_blank" rel="noopener noreferrer" class="cta-button"
                        data-aos="zoom-in">
                        E-shop merch
                    </a>
                </div>
            </div>
        </div>
    </x-foreground>
    <section id="reviews" class="w-full bg-white/20 py-12">
        <h2 class="text-4xl font-bold text-center mb-12">Recenzie</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-6">
            @foreach ($reviews as $review)
                <x-review-card :review="$review" />
            @endforeach
        </div>
    </section>
</x-app-layout>
