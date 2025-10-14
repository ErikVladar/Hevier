<x-app-layout>
    <x-foreground>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <h2 class="text-6xl font-bold text-center mb-12 text-black">Galéria</h2>
                <div x-data="galleryComponent()" x-init="items = {{ Js::from($images) }}" class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                        <template x-for="(item, index) in items" :key="index">
                            <a href="#" @click.prevent="open(index)"
                                class="block overflow-hidden rounded-xl aspect-square">
                                <img :src="item.path" :alt="item.title"
                                    class="w-full h-full object-cover hover:opacity-80 transition duration-300">
                            </a>
                        </template>
                    </div>
                    <template x-teleport="body">
                        <div x-show="isOpen" x-transition.opacity x-cloak @click.self="close"
                            class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/90 text-white">
                            <button @click.stop="prev"
                                class="absolute left-6 text-5xl font-bold hover:text-blue-400">&lt;</button>
                            <button @click.stop="next"
                                class="absolute right-6 text-5xl font-bold hover:text-blue-400">&gt;</button>
                            <button @click="close"
                                class="absolute top-6 right-8 text-4xl hover:text-red-400">&times;</button>

                            <div
                                class="relative flex flex-col md:flex-row items-center justify-center gap-8 w-full max-w-7xl px-6">
                                <div class="flex-1 flex justify-center items-center">
                                    <img :src="active.path" :alt="active.title"
                                        class="max-h-[80vh] w-auto object-contain rounded-lg">
                                </div>
                                <div class="flex-1 text-left space-y-4">
                                    <h3 class="text-3xl font-bold" x-text="active.title"></h3>
                                    <p class="text-lg text-gray-200" x-text="active.description"></p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>
    </x-foreground>
</x-app-layout>

<script>
    Alpine.data('galleryComponent', () => ({
        items: [],
        isOpen: false,
        activeIndex: 0,
        get active() {
            return this.items[this.activeIndex]
        },
        open(index) {
            this.activeIndex = index;
            this.isOpen = true
        },
        close() {
            this.isOpen = false
        },
        next() {
            this.activeIndex = (this.activeIndex + 1) % this.items.length
        },
        prev() {
            this.activeIndex = (this.activeIndex - 1 + this.items.length) % this.items.length
        },
    }));
</script>
