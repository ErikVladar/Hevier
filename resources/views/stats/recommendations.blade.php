<x-app-layout>
    <x-foreground>
        <section class="p-10 max-w-7xl mx-auto space-y-10">

            <div class="text-center mb-16">
                <h1 class="text-6xl font-bold text-black mb-6">Koľko detí spĺňa odporúčania</h1>
                <p class="text-xl text-gray-800">Podiel detí, ktoré dosahujú odporúčanú úroveň pohybu</p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="bg-white/90 rounded-2xl shadow-lg p-8">
                    <canvas id="pieChart"></canvas>
                </div>
                <div class="text-lg text-black space-y-4">
                    <p>Len približne <span class="font-bold text-red-600">1 z 3 detí</span> spĺňa
                    odporúčané denné množstvo fyzickej aktivity.</p>

                    <p>Zvyšok vedie prevažne sedavý životný štýl, čo negatívne ovplyvňuje
                    ich fyzické aj psychické zdravie.</p>
                </div>
            </div>

        </section>
    </x-foreground>
</x-app-layout>
