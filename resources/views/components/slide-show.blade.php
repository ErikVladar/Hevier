<div>
    <section id="slideshow-container" class="slideshow-container">
        @foreach ($urls as $url)
            <section class="slideshow-panel">
                <img src="{{ $url }}" alt="slide">
            </section>
        @endforeach

        <button id="LeftScrollBlock"
            class="absolute text-black left-3 bottom-6 md:bottom-1/2 text-3xl md:text-5xl font-bold z-50
        bg-black rounded-full p-4 backdrop-blur-sm">
            &lt;
        </button>

        <button id="RightScrollBlock"
            class="absolute text-black right-3 bottom-6 md:bottom-1/2 opacity-0 pointer-events-none text-3xl md:text-5xl font-bold z-50
        bg-black rounded-full p-4 backdrop-blur-sm">
            &gt;
        </button>

    </section>
</div>
