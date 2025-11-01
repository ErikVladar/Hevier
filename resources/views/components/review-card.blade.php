<article
    class="relative bg-gray-100 rounded-lg shadow-lg p-4 flex flex-col md:flex-row items-center md:items-start overflow-visible">
    
    @auth
        <div class="absolute top-3 right-3 flex space-x-2 -mt-6 z-10">
            <a href="{{ route('reviews.edit', $review) }}"
                class="px-3 py-1 bg-yellow-500 text-white rounded-lg text-sm hover:bg-yellow-600">Upraviť</a>
            <form method="POST" action="{{ route('reviews.destroy', $review) }}">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="px-3 py-1 bg-red-600 text-white rounded-lg text-sm hover:bg-red-700">X</button>
            </form>
        </div>
    @endauth

    <div class="relative text-left flex-shrink-0 md:w-1/3 flex flex-col items-center z-0">
        <img src="{{ asset('storage/imgs/' . $review->photo) }}" alt="{{ $review->name }}"
            class="w-24 h-24 rounded-xl object-cover shadow-md -mt-10 md:-mt-12 md:ml-[-1rem]">
        <h3 class="text-lg font-bold mt-4">{{ $review->name }}</h3>
        {{-- <div class="flex mt-1 text-yellow-400">
            @for ($i = 1; $i <= 5; $i++)
            <i class="bi {{ $i <= 5 ? 'bi-star-fill' : 'bi-star' }}"></i>
            <i class="bi {{ $i <= $review->rating ? 'bi-star-fill' : 'bi-star' }}"></i>
            @endfor
        </div> --}}
    </div>

    <div class="mt-4 md:mt-0 md:ml-6 md:w-2/3 text-justify z-0">
        <p class="text-gray-700 text-lg leading-relaxed">
            {{ $review->text }}
        </p>
    </div>
</article>

