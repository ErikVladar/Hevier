<x-app-layout>
    <x-foreground>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-8 lg:px-8">
                <h2
                    class="animate__animated animate__zoomIn animate__slow text-6xl font-bold text-center mb-12 text-black">
                    Pohyb v číslach
                </h2>

                <ol>
                    <li>Koľko nás stojí detská obezita</li>
                    @foreach ($slides as $index => $slideUrls)
                        @php dump($index, $slideUrls); @endphp
                        <x-slide-show :slideUrls="{{ $slideUrls }}" />
                    @endforeach
                </ol>
            </div>
        </section>
    </x-foreground>
</x-app-layout>
