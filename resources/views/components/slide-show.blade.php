<div>
    <div id="slideshow-container" class="overscroll-none width-[600%] height-full flex no-wrap">
        @foreach ($slidesUrls as $slide)
        <section id="slideshow-panel">
            <img :src="$slide" alt="slide">
        </section>
        @endforeach
    </div>
</div>