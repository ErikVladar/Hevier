{{-- <div>
    <section class="px-40 slideshow-container">
        @foreach ($urls as $url)
        <section class="slideshow-panel">
            <img src="{{ $url }}" alt="slide">
        </section>
        @endforeach
    </section>
</div> --}}
<div>
    <section
      class="slideshow-container top-0 left-0"
    >
      @foreach ($urls as $url)
        <section class="slideshow-panel">
          <img src="{{ $url }}" alt="slide">
        </section>
      @endforeach
    </section>
  </div>
  