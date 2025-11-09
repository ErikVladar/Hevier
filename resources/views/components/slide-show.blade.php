<div>
    <section class="slideshow-container">
        @foreach ($urls as $url)
            <section class="slideshow-panel">
                <img src="{{ $url }}" alt="slide">
            </section>
        @endforeach
    </section>
</div>
