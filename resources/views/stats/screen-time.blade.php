<x-app-layout>
    <x-foreground>
        <section class="p-10 max-w-7xl mx-auto space-y-10">

            <div class="text-center mb-16">
                <h1 class="text-6xl font-bold text-black mb-6">Čas pred obrazovkou</h1>
                <p class="text-xl text-gray-800">Koľko hodín denne trávia deti pri obrazovkách?</p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="bg-white/90 rounded-2xl shadow-lg p-8">
                    <canvas id="screenTimeChart" class="w-full h-[400px]"></canvas>
                </div>
                <div class="text-lg text-black space-y-4">
                    <p>Deti trávia priemerne <span class="font-bold text-orange-600">3 až 4 hodiny denne</span>
                    pred obrazovkami — počas víkendov dokonca viac.</p>

                    <p>Tento čas postupne nahrádza fyzickú aktivitu, čo zvyšuje riziko nadváhy
                    a problémov so spánkom.</p>
                </div>
            </div>

        </section>
    </x-foreground>
</x-app-layout>
