<x-app-layout>
    <div x-data="{ isOpen: false, activeIndex: 0 }">
        <div x-show="isOpen" x-transition.opacity x-cloak @click.self="isOpen=false"
            class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/90 text-white">

            <button @click="isOpen=false" class="absolute top-6 right-8 text-4xl hover:text-red-400">&times;</button>

            <button @click="activeIndex = (activeIndex - 1 + {{ $images->count() }}) % {{ $images->count() }}"
                class="absolute left-6 text-5xl font-bold hover:text-blue-400">&lt;</button>
            <button @click="activeIndex = (activeIndex + 1) % {{ $images->count() }}"
                class="absolute right-6 text-5xl font-bold hover:text-blue-400">&gt;</button>

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
        
                    <h2 class="animate__animated animate__zoomIn animate__slow text-6xl font-bold text-center mb-12 text-black">
                        Galéria
                    </h2>
        
                    @if($images->count())
                        @php
                            $cover = $images->first();
                            $extraCount = $images->count() - 1;
                            $galleryName = 'Tvorcovia knihy';
                        @endphp
        
                        <a href="#" @click.prevent="activeIndex=0; isOpen=true"
                            class="animate__animated animate__zoomIn animate__slow relative block w-full max-w-3xl mx-auto rounded-xl overflow-hidden cursor-pointer shadow-lg">
        
                            <img src="{{ $cover->path }}" alt="{{ $cover->title }}"
                                class="w-full h-96 object-cover transition-transform duration-300 hover:scale-105">
        
                            @if($extraCount > 0)
                                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center">
                                    <span class="text-white text-2xl font-semibold mb-2">{{ $galleryName }}</span>
                                    <span class="text-white text-4xl font-bold">+{{ $extraCount }}</span>
                                </div>
                            @endif
                        </a>
                    @endif
        
                </div>
            </section>
        </x-foreground>
    </div>
</x-app-layout>