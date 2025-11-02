{{-- <div>
    <div id="slideshow-container" class="overscroll-none width-[600%] height-full flex no-wrap">
        @foreach ($slidesUrls as $slide)
        <section id="slideshow-panel">
            <img :src="$slide" alt="slide">
        </section>
        @endforeach
    </div>
</div> --}}

@props(['slideUrls' => []])

<div class="slideshow-container overflow-hidden w-full">
    <div class="flex">
        @foreach ($slideUrls as $url)
            <section class="flex-shrink-0 w-full">
                <img src="{{ $url }}" alt="slide" class="w-full h-auto object-cover">
            </section>
        @endforeach
    </div>
</div>
