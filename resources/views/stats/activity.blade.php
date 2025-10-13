<x-app-layout>
    <x-foreground>
        <section class="p-10 max-w-7xl mx-auto space-y-10">

            <div class="text-center mb-16">
                <h1 class="text-6xl font-bold text-black mb-6">Priemerný denný pohyb detí</h1>
                <p class="text-xl text-gray-800">Ako sa mení aktivita podľa veku?</p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="bg-white/90 rounded-2xl shadow-lg p-8">
                    <canvas id="activityChart" class="w-full h-[400px]"></canvas>
                </div>
                <div class="text-lg text-black space-y-4">
                    <p>Deti vo veku 6–8 rokov dosahujú v priemere 75 minút pohybu denne,
                    no s rastúcim vekom sa aktivita výrazne znižuje.</p>

                    <p>Odporúčanie WHO je aspoň <span class="font-bold text-green-600">60 minút</span>
                    denne. Len tretina detí túto hranicu dosahuje.</p>
                </div>
            </div>

        </section>
    </x-foreground>
</x-app-layout>
