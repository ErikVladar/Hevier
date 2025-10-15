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

                    <h2 class="animate__animated animate__zoomIn animate__slow text-6xl font-bold text-center mb-12 text-black">Galéria</h2>

                    <div class="animate__animated animate__slideInUp animate__slow grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                        @foreach ($images as $index => $image)
                            <a href="#" @click.prevent="activeIndex={{ $index }}; isOpen=true"
                                class="block overflow-hidden rounded-xl aspect-square">
                                <img src="{{ $image->path }}" alt="{{ $image->title }}"
                                    class="w-full h-full object-cover hover:opacity-80 transition duration-300">
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </x-foreground>
    </div>
</x-app-layout>
