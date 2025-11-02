{{-- <x-app-layout>
    <x-foreground>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-8 lg:px-8">
                <h2
                    class="animate__animated animate__zoomIn animate__slow text-6xl font-bold text-center mb-12 text-black">
                    Pohyb v číslach
                </h2>

                <x-slide-show :urls="$slides[1]" :slideCount="count($slides[1])" />
                <x-slide-show :urls="$slides[2]" :slideCount="count($slides[2])" />
                <x-slide-show :urls="$slides[3]" :slideCount="count($slides[3])" />
                <x-slide-show :urls="$slides[4]" :slideCount="count($slides[4])" />
                <x-slide-show :urls="$slides[5]" :slideCount="count($slides[5])" />
                <x-slide-show :urls="$slides[6]" :slideCount="count($slides[6])" />
            </div>
        </section>

        <script src="{{ Vite::asset('resources/js/slideshow.js') }}"></script>
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/slideshow.css') }}">
        </link>

    </x-foreground>
</x-app-layout> --}}
<x-app-layout>
    <x-foreground>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2
                    class="animate__animated animate__zoomIn animate__slow text-6xl font-bold text-center mb-12 text-black">
                    Pohyb v číslach
                </h2>

                {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($slides as $i => $group)
                        @php $first = $group[0] ?? null; @endphp
                        @if ($first)
                            <div class="cursor-pointer" onclick="openModal({{ $i }})">
                                <img src="{{ $first }}" class="w-full h-full object-cover rounded-lg">
                            </div>
                        @endif
                    @endforeach
                </div> --}}



            </div>
        </section>
        <script src="{{ Vite::asset('resources/js/slideshow.js') }}"></script>
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/slideshow.css') }}">
    </x-foreground>
</x-app-layout>

@foreach ($slides as $i => $group)
    <div id="modal-{{ $i }}" class="fullscreen-modal hidden relative">
        <button class="fixed top-4 right-4 text-white text-3xl z-50"
            onclick="closeModal({{ $i }})">&times;</button>

        <div class="relative pt-10">
            <x-slide-show :urls="$group" :slideCount="count($group)" />
        </div>
    </div>
@endforeach



<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.openModal = function(i) {
            document.getElementById(`modal-${i}`).classList.remove('hidden');
        }

        window.closeModal = function(i) {
            document.getElementById(`modal-${i}`).classList.add('hidden');
        }
    });
</script>
