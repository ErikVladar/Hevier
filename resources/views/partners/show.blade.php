<x-app-layout>
    <x-foreground>
        <div class="max-w-6xl min-h-screen mx-auto py-16 px-6">
            <h1 class="text-5xl font-extrabold text-center mb-12 text-blue-900">
                {{ $partner->name }}
            </h1>

            <div class="flex flex-col md:flex-row items-center md:items-start gap-10">
                <div class="flex-shrink-0 w-full md:w-1/3 flex justify-center md:justify-start">
                    <img src="{{ asset($partner->image) }}" alt="{{ $partner->name }}"
                        class="max-h-64 object-contain rounded-lg">
                </div>

                <div class="w-full md:w-2/3 text-gray-800 text-lg md:text-xl leading-relaxed">
                    <p>
                        {{ $partner->description ?? 'No description yet.' }}
                    </p>
                </div>
            </div>

            @if ($partner->images)
                <div class="flex flex-wrap justify-center gap-4 mt-12">
                    @foreach (json_decode($partner->images, true) as $img)
                        <img src="{{ asset($img) }}" alt=""
                            class="max-h-32 rounded-lg hover:scale-105 transition duration-300">
                    @endforeach
                </div>
            @endif
        </div>
    </x-foreground>
</x-app-layout>
