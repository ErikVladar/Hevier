<article class="relative bg-gray-100 rounded-lg shadow-lg p-6 flex flex-col md:flex-row items-center md:items-start overflow-visible">
    <div class="relative flex-shrink-0 md:w-1/3 flex flex-col items-center">
        <img 
            src="{{ asset('storage/imgs/' . $review->photo) }}" 
            alt="{{ $review->name }}" 
            class="w-24 h-24 rounded-xl object-cover shadow-md -mt-10 md:-mt-12 md:ml-[-1rem]"
        >
        <h3 class="text-lg font-bold mt-4">{{ $review->name }}</h3>

        <div class="flex mt-1 text-yellow-400">
            @for ($i = 1; $i <= 5; $i++)
                <i class="bi {{ $i <= $review->rating ? 'bi-star-fill' : 'bi-star' }}"></i>
            @endfor
        </div>
    </div>

    <div class="mt-4 md:mt-0 md:ml-6 md:w-2/3 text-center md:text-left">
        <p class="text-gray-700 text-lg leading-relaxed">
            {{ $review->text }}
        </p>
    </div>
</article>
