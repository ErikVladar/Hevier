<x-app-layout>
    <x-foreground>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-6xl font-bold text-center mb-12 text-blue-900">Galéria</h2>
                <div x-data="{ 
                    isOpen: false, 
                    activeIndex: 0, 
                    items: [{ src: '{{ asset('storage/gallery/1.jpg') }}', title: 'Dobrodružstvo', desc: 'Pohyb je energia života.' }, 
                    { src: '{{ asset('storage/gallery/2.jpg') }}', title: 'Sila priateľstva', desc: 'Každý krok posúva deti bližšie k sile a empatii.' }, 
                    { src: '{{ asset('storage/gallery/3.jpg') }}', title: 'Odvaha', desc: 'Každá výzva prináša nové možnosti.' }, 
                    { src: '{{ asset('storage/gallery/4.jpg') }}', title: 'Radosť z pohybu', desc: 'Radosť je palivom pre zdravý život.' }, ], 
                    get active() { return this.items[this.activeIndex]; }, 
                    next() { this.activeIndex = (this.activeIndex + 1) % this.items.length; }, 
                    prev() { this.activeIndex = (this.activeIndex - 1 + this.items.length) % this.items.length; } }" 
                    class="max-w-7xl mx-auto px-4 py-20">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                        <template x-for="(item, index) in items" :key="index"> <a href="#"
                                @click.prevent="activeIndex = index; isOpen = true"
                                class="block overflow-hidden rounded-xl aspect-square">
                                <img :src="item.src" :srcset="item.src + ' 200w, ' + item.src + ' 800w'"
                                    class="w-full h-full object-cover"> </a>
                        </template>
                    </div>
                    <template x-teleport="body">
                        <div x-show="isOpen" x-transition.opacity x-cloak @click.self="isOpen = false"
                            class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/90 text-white">
                            <button @click.stop="prev"
                                class="absolute left-6 md:left-12 text-5xl font-bold hover:text-blue-400 transition select-none"
                                aria-label="Previous image">&lt;
                            </button>
                            <button @click.stop="next"
                                class="absolute right-6 md:right-12 text-5xl font-bold hover:text-blue-400 transition select-none"
                                aria-label="Next image">&gt;
                            </button> <!-- Close Button -->
                            <button @click="isOpen = false"
                                class="absolute top-6 right-8 text-4xl hover:text-red-400 transition"
                                aria-label="Close">&times;
                            </button> <!-- Image + Info -->
                            <div
                                class="relative flex flex-col md:flex-row items-center justify-center gap-8 w-full max-w-7xl px-6">
                                <!-- Image -->
                                <div class="flex-1 flex justify-center items-center">
                                    <img :src="active?.src" :alt="active?.title"
                                        class="max-h-[80vh] w-auto object-contain rounded-lg transition-all duration-300">
                                </div> <!-- Text Info -->
                                <div class="flex-1 text-left space-y-4 md:space-y-6">
                                    <h3 class="text-3xl md:text-4xl font-bold" x-text="active?.title"></h3>
                                    <p class="text-lg md:text-xl text-gray-200 leading-relaxed" x-text="active?.desc">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
        </section>
    </x-foreground>
</x-app-layout>
