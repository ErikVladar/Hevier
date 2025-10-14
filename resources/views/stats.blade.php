<x-app-layout>
    <x-foreground>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-8 lg:px-8">

                <h2 class="text-6xl font-bold text-center mb-12 text-black">Štatistika</h2>

                <div class="text-center space-y-4 mb-24">
                    <h1 class="text-5xl font-bold text-black">Štatistiky o pohybe detí</h1>
                    <p class="text-2xl text-gray-800">Ako aktívne sú deti?</p>
                </div>

                <div class="grid md:grid-cols-2 gap-10">
                    <div class="bg-white/90 rounded-2xl shadow-lg p-8">
                        <a href="{{ route('stats.show', 'activity') }}">
                            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Priemerný denný pohyb detí</h2>
                            <canvas id="activityChart"></canvas>
                            <p class="mt-4 text-gray-600 text-lg">
                                Väčšina detí sa k odporúčaným 60 minútam denne nepribližuje.
                            </p>
                        </a>
                    </div>

                    <div class="bg-white/90 rounded-2xl shadow-lg p-8">
                        <a href="{{ route('stats.show', 'screen-time') }}">
                            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Čas pred obrazovkou</h2>
                            <canvas id="screenTimeChart"></canvas>
                            <p class="mt-4 text-gray-600 text-lg">
                                Deti trávia viac času pred obrazovkou, než v pohybe.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10">
                    <div class="bg-white/90 rounded-2xl shadow-lg p-8 overflow-x-auto">
                        <a href="{{ route('stats.show', 'favorite-sports') }}">
                            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Najobľúbenejšie športy</h2>
                            <table class="min-w-full text-left border-collapse text-base">
                                <thead class="bg-blue-200 text-gray-800">
                                    <tr>
                                        <th class="px-4 py-2 border-b">Šport</th>
                                        <th class="px-4 py-2 border-b">% detí</th>
                                        <th class="px-4 py-2 border-b">Chlapci</th>
                                        <th class="px-4 py-2 border-b">Dievčatá</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr class="hover:bg-blue-50">
                                        <td class="px-4 py-2 border-b">Futbal</td>
                                        <td>42%</td>
                                        <td>60%</td>
                                        <td>22%</td>
                                    </tr>
                                    <tr class="hover:bg-blue-50">
                                        <td class="px-4 py-2 border-b">Tanec</td>
                                        <td>28%</td>
                                        <td>6%</td>
                                        <td>48%</td>
                                    </tr>
                                    <tr class="hover:bg-blue-50">
                                        <td class="px-4 py-2 border-b">Plávanie</td>
                                        <td>34%</td>
                                        <td>32%</td>
                                        <td>36%</td>
                                    </tr>
                                    <tr class="hover:bg-blue-50">
                                        <td class="px-4 py-2 border-b">Cyklistika</td>
                                        <td>25%</td>
                                        <td>27%</td>
                                        <td>23%</td>
                                    </tr>
                                    <tr class="hover:bg-blue-50">
                                        <td class="px-4 py-2 border-b">Gymnastika</td>
                                        <td>18%</td>
                                        <td>5%</td>
                                        <td>32%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                    </div>

                    <div class="bg-white/90 rounded-2xl shadow-lg p-8">
                        <a href="{{ route('stats.show', 'recommendations') }}">
                            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Koľko detí spĺňa odporúčania</h2>
                            <canvas id="pieChart" class="w-full h-[300px]"></canvas>
                        </a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="max-w-2xl mx-auto my-12">
                    <div @mouseenter="open = true" @mouseleave="open = false"
                        class="bg-gray-50 text-center rounded-2xl shadow-inner cursor-pointer overflow-hidden
                               transition-all duration-500 p-8"
                        :class="open ? 'max-w-4xl' : 'max-w-2xl'">
                        <h3 class="text-5xl font-extrabold mb-4">Zhrnutie</h3>

                        <div x-show="open" x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 -translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-4">
                            <p class="text-xl leading-relaxed mt-4">
                                Pohybové návyky detí sa zhoršujú – iba <span class="text-red-600">1 z 3</span> spĺňa
                                odporúčané
                                úrovne aktivity.
                                Pasívny životný štýl postupne nahrádza prirodzený pohyb, ktorý je kľúčom k zdraviu,
                                sústredeniu
                                a dobrej nálade.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-foreground>
</x-app-layout>
