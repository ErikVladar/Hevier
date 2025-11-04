<div
    class="animate__animated animate__slideInLeft max-w-7xl mx-auto bg-white min-h-[95vh] rounded-3xl shadow-lg overflow-hidden flex flex-col md:flex-row transition-transform duration-300">

    <div class="w-full md:w-2/3 px-4 md:px-16 flex flex-col mt-12 text-center md:text-left">
        <h2 class="antialiased text-4xl md:text-6xl text-black font-bold mb-6">{{ $name }}</h2>
        <p class="text-xl md:text-2xl text-gray-800 text-justify break-words max-w-prose mb-6">
            {{ $bio }}
        </p>
    </div>

    <div x-data="gallery('{{ $img }}')" x-init="init()"
        class="relative w-full md:w-1/3 bg-gray-200 flex flex-col items-center">
        <div class="relative w-full h-3/5 mb-6 overflow-hidden">
            <template x-if="images.length">
                <img :src="images[currentIndex]"
                    class="absolute inset-0 w-full h-full object-cover transition-all duration-300 z-0">
            </template>

            <button @click="prev" style="border:1px solid black"
                class="absolute left-2 top-1/2 -translate-y-1/2 bg-gray-800/10 text-black p-2 rounded-full hover:bg-gray-800 hover:text-white z-10">‹</button>

            <button @click="next" style="border:1px solid black"
                class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-800/10 text-black p-2 rounded-full hover:bg-gray-800 hover:text-white z-10">›</button>

            @auth
                <div class="absolute bottom-2 left-2 flex gap-2 z-20 bg-white/70 p-2 rounded-lg">
                    <input type="file" x-ref="uploadFile" class="hidden" @change="upload($event)">
                    <button @click="$refs.uploadFile.click()" class="px-3 py-1 bg-green-600 text-white rounded">Add</button>
                    <button @click="deleteCurrent()" class="px-3 py-1 bg-red-600 text-white rounded">Delete</button>
                </div>
            @endauth
        </div>

        <div class="w-full text-left px-6 pb-6">
            <h3 class="font-semibold text-md mb-3">Úspechy</h3>
            <ul class="list-disc text-md pl-5 space-y-2">
                <li>{{ $uspech1 }}</li>
                <li>{{ $uspech2 }}</li>
                <li>{{ $uspech3 }}</li>
                <li>{{ $uspech4 }}</li>
                <li>{{ $uspech5 }}</li>
            </ul>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('gallery', (imgPath) => ({
            images: [],
            currentIndex: 0,

            init() {
                fetch(`/gallery-images?folder=${encodeURIComponent(imgPath)}`)
                    .then(res => res.json())
                    .then(data => {
                        this.images = data;
                        console.log('Gallery images:', this.images);
                    })
                    .catch(console.error);
            },
            next() {
                if (!this.images.length) return;
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            },

            prev() {
                if (!this.images.length) return;
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images
                    .length;
            }
        }));
    });
</script>
