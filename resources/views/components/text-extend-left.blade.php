{{-- <div
    class="animate__animated animate__pulse animate__infinite animate__slower font-[Kaushan] antialiased flex items-center text-black justify-center">
    <div
        class="trigger-left text-2xl md:text-4xl content-justify font-semibold text-right w-48 md:w-64 h-28 md:h-32 flex-shrink-0">
        {{ $title }}
    </div>

    <div class="w-[1px] h-12"></div>

    <div class="slide-element-left w-64 md:w-[28rem] text-left text-sm md:text-lg h-28 md:h-32 leading-relaxed">
        {{ $description }}
    </div>
</div> --}}

<div class="flex space-x-8">
    <div
        class="flex items-center text-black justify-center bg-gradient-to-br from-yellow-200 to-yellow-300 text-2xl md:text-4xl content-justify shadow-xl p-4 font-semibold text-center w-48 md:w-72 h-28 md:h-32 flex-shrink-0 rotate-1">

        <div class="absolute -top-2 w-5 h-5 bg-{{ $color }}-500 rounded-full shadow-md border border-{{ $color }}-700 z-10">
        </div>
        <h3>{{ $title }}</h3>
    </div>

    <div
        class="flex items-center text-black justify-center bg-white w-64 md:w-[28rem] shadow-xl text-left text-sm md:text-lg px-8 h-36 leading-relaxed transform -rotate-1">

        <div class="absolute -top-2 w-5 h-5 bg-{{ $color }}-500 rounded-full shadow-md border border-{{ $color }}-700 z-10">
        </div>
        <p>{{ $description }}</p>
    </div>
</div>
