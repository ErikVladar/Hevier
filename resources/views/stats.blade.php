<x-app-layout>
    <x-foreground>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2
                    class="animate__animated animate__zoomIn animate__slow text-6xl font-bold text-center mb-12 text-black">
                    Pohyb v číslach
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($slides as $i => $group)
                        @php
                            $first = $group[0] ?? null;
                            $delay = (float) $i * 0.2;
                        @endphp

                        @if ($first)
                            <div style="border:8px solid rgb(122,122,122); animation-delay: {{ $delay }}s;"
                                class="relative animate__animated animate__zoomIn animate__slow cursor-pointer rounded-xl transition-transform duration-300 hover:scale-105"
                                onclick="openModal({{ $i }})">
                                <img src="{{ $first }}" class="w-full h-full object-cover">
                            </div>
                        @endif
                    @endforeach
                </div>


                <div class="w-full py-16 px-6" data-aos="fade-up">
                    <h2 class="text-4xl font-bold text-black mb-12 text-center">Ako ti
                        pohyb pomáha</h2>

                    <div class="max-w-4xl space-y-4 mx-auto">
                        <div
                            class="bg-gradient-to-r from-blue-100 to-blue-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105 rounded-xl">
                            <div class="text-4xl">😄</div>
                            <div>
                                <p class="font-semibold text-lg text-blue-700">Zlepšuje náladu</p>
                                <p class="text-gray-700 mt-1">Krátka dávka pohybu denne zvyšuje produkciu endorfínov
                                    a robí deň veselším.</p>
                            </div>
                        </div>

                        <div
                            class="bg-gradient-to-r from-green-100 to-green-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105 rounded-xl">
                            <div class="text-4xl">❤️</div>
                            <div>
                                <p class="font-semibold text-lg text-green-700">Silné srdce</p>
                                <p class="text-gray-700 mt-1 text-lg">Pravidelný pohyb zlepšuje obeh a učí deti starať
                                    sa o
                                    svoje telo.</p>
                            </div>
                        </div>

                        <div
                            class="bg-gradient-to-r from-yellow-100 to-yellow-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105 rounded-xl">
                            <div class="text-4xl">⚡</div>
                            <div>
                                <p class="font-semibold text-lg text-yellow-700">Zvyšuje energiu</p>
                                <p class="text-gray-700 mt-1 text-lg">Krátke cvičenie ráno naštartuje telo aj myseľ na
                                    celý
                                    deň.</p>
                            </div>
                        </div>

                        <div
                            class="bg-gradient-to-r from-red-100 to-red-200 p-6 shadow-lg flex items-start gap-4 transform transition hover:scale-105 rounded-xl">
                            <div class="text-4xl">🧠</div>
                            <div>
                                <p class="font-semibold text-lg text-red-700">Zlepšuje sústredenie</p>
                                <p class="text-gray-700 mt-1 text-lg">Pohyb podporuje koncentráciu a učenie sa v škole.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        @vite('resources/css/slideshow.css')
        @vite('resources/js/slideshow.js')
    </x-foreground>
</x-app-layout>

@foreach ($slides as $i => $group)
    <div id="modal-{{ $i }}" class="fullscreen-modal hidden fixed inset-0 hidden w-full h-screen justify-center items-center">
        <button class="fixed top-4 right-4 text-white text-3xl z-50"
            onclick="closeModal({{ $i }})">&times;</button>

        <button id="scrollL"
            class="fixed text-white left-3 bottom-6 md:bottom-1/2 text-3xl md:text-5xl font-bold hover:text-blue-400 z-50
       bg-gray-800 md:bg-transparent rounded-full p-4 md:p-0 backdrop-blur-sm"
            onclick="scrollL({{ $i }})">
            &lt;
        </button>

        <button id="scrollR"
            class="fixed text-white right-3 bottom-6 md:bottom-1/2 text-3xl md:text-5xl font-bold hover:text-blue-400 z-50
       bg-gray-800 md:bg-transparent rounded-full p-4 md:p-0 backdrop-blur-sm"
            onclick="scrollR({{ $i }})">
            &gt;
        </button>

        <div style="vertical-align: middle" class="flex h-full">
            <x-slide-show :urls="$group" :slideCount="count($group)" />
        </div>
    </div>
@endforeach



<script>
    document.addEventListener('DOMContentLoaded', () => {
        const html = document.documentElement;
        const body = document.body;

        window.openModal = function(i) {
            const modal = document.getElementById(`modal-${i}n`);
            if (!modal) return;

            modal.classList.remove('hidden');

            html.style.overflow = 'hidden';
            body.style.overflow = 'hidden';

        };

        window.closeModal = function(i) {
            const modal = document.getElementById(`modal-${i}n`);
            if (!modal) return;

            modal.classList.add('hidden');

            html.style.overflow = '';
            body.style.overflow = '';


        };

        window.scrollR = function(i) {
            const modal = document.getElementById(`modal-${i}n`);
            if (!modal) return;

            modal.scrollBy({
                left: window.innerWidth,
                behavior: 'smooth'
            });


        };

        window.scrollL = function(i) {
            const modal = document.getElementById(`modal-${i}n`);
            if (!modal) return;

            modal.scrollBy({
                left: -window.innerWidth,
                behavior: 'smooth'
            });
        };
    });
</script>