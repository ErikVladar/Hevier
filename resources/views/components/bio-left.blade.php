<div
    class="animate__animated animate__slideInLeft max-w-7xl mx-auto bg-white rounded-3xl shadow-lg overflow-hidden flex flex-col md:flex-row transition-transform duration-300">

    <div class="w-full md:w-2/3 md:px-16 flex flex-col mt-16 text-center md:text-left">
        <h2 class="antialiased text-5xl md:text-6xl text-black font-bold mb-20">{{ $name }}</h2>
        <p class="text-xl md:text-2xl text-gray-800 text-justify break-words max-w-prose mb-6">
            {{ $bio }}
        </p>
    </div>

    <div class="w-full md:w-1/3 bg-gray-200 flex flex-col items-center">
        <img src="{{ asset($img) }}" class="w-full h-full object-cover mb-6">

        <div class="w-full text-left px-6 pb-6">
            <h3 class="font-semibold text-lg mb-3">Úspechy</h3>
            <ul class="list-disc pl-5 space-y-2">
                <li>{{ $uspech1 }}</li>
                <li>{{ $uspech2 }}</li>
                <li>{{ $uspech3 }}</li>
                <li>{{ $uspech4 }}</li>
                <li>{{ $uspech5 }}</li>
            </ul>
        </div>
    </div>

</div>
