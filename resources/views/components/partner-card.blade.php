<a href="{{ route('partners.show', $partner->slug) }}" class="relative flex flex-col group" data-aos="zoom-in">
    <img src="{{ asset($partner->image) }}" alt="{{ $partner->name }}"
        class="rounded-lg max-w-40 object-cover mx-auto transition-transform duration-300 group-hover:scale-105">
</a>
