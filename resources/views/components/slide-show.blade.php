<div>
    <section class="slideshow-container">
        @foreach ($urls as $url)
        <section class="slideshow-panel">
            <img src="{{ $url }}" alt="slide" class="w-full h-[1000px]">
        </section>
        @endforeach
    </section>
</div>