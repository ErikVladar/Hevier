<x-app-layout>
    <x-foreground>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-6xl font-bold text-center mb-12 text-blue-900">Galéria</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 pswp-gallery"
                    id="gallery-screenshots">
                    @for ($i = 1; $i <= 10; $i++)
                        <a href="{{ asset("storage/gallery/$i.jpg") }}" target="_blank">
                            <img src="{{ asset("storage/gallery/$i.jpg") }}" alt="screenshot demo {{ $i }}"
                                class="w-full h-60 rounded-xl object-cover hover:opacity-80 transition duration-300">
                        </a>
                    @endfor
                </div>
            </div>
        </section>
    </x-foreground>
</x-app-layout>


<script type="module">
    import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5.4.4/dist/photoswipe-lightbox.esm.js';
    import PhotoSwipeDynamicCaption from 'https://unpkg.com/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.esm.js';

    const lightbox = new PhotoSwipeLightbox({
        gallery: '#gallery-screenshots',
        children: 'a',
        pswpModule: () => import('https://unpkg.com/photoswipe@5.4.4/dist/photoswipe.esm.js'),
    });

    // https://github.com/dimsemenov/photoswipe-dynamic-caption-plugin
    const captionPlugin = new PhotoSwipeDynamicCaption(lightbox, {
        // Plugins options, for example:
        type: 'auto',
    });

    lightbox.init();
</script>
