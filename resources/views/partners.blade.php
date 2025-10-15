<x-app-layout>
    <x-foreground>
        <section class="md:pt-20 pb-32 py-16 px-4 text-center rounded-t-3xl">

            <h2 class="animate__animated animate__zoomIn animate__slow text-4xl font-bold mb-12 text-black">Generálny partner</h2>

            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24"
                style="justify-content: space-around; align-items:center">
                @foreach ($partners->where('type', 'general') as $partner)
                    <x-partner-card :partner="$partner" />
                @endforeach
            </div>

            <h2 class="animate__animated animate__zoomIn animate__slow text-4xl font-bold mb-12 text-black">Hlavný partner</h2>

            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24"
                style="justify-content: space-around; align-items:center">
                @foreach ($partners->where('type', 'main') as $partner)
                    <x-partner-card :partner="$partner" />
                @endforeach
            </div>

            <h2 class="animate__animated animate__zoomIn animate__slow text-4xl font-bold mb-12 text-black">Partneri</h2>

            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24"
                style="justify-content: space-around; align-items:center">
                @foreach ($partners->where('type', 'partner') as $partner)
                    <x-partner-card :partner="$partner" />
                @endforeach
            </div>

            <h2 class="animate__animated animate__zoomIn animate__slow text-4xl font-bold mb-12 text-black">Inštitucionálni Partneri</h2>

            <div class="max-w-7xl mx-auto flex flex-wrap justify-center mb-20 gap-x-6 gap-y-24"
                style="justify-content: space-around; align-items:center">
                @foreach ($partners->where('type', 'institutional') as $partner)
                    <x-partner-card :partner="$partner" />
                @endforeach
            </div>
        </section>
    </x-foreground>
</x-app-layout>
