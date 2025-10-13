<x-app-layout>
    <x-foreground>
        <section class="p-10 max-w-7xl mx-auto space-y-10">

            <div class="text-center mb-16">
                <h1 class="text-6xl font-bold text-black mb-6">Najobľúbenejšie športy</h1>
                <p class="text-xl text-gray-800">Ktoré športy majú deti najradšej?</p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 items-start">
                <div class="bg-white/90 rounded-2xl shadow-lg p-8 overflow-x-auto">
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
                </div>

                <!-- Text -->
                <div class="text-lg text-black space-y-4">
                    <p><span class="font-bold text-blue-700">Futbal</span> je suverénne
                    najpopulárnejším športom medzi chlapcami, zatiaľ čo dievčatá
                    preferujú tanec a gymnastiku.</p>

                    <p>Plávanie a cyklistika sú vyvážené naprieč pohlaviami,
                    čo ukazuje ich univerzálny charakter.</p>

                    <p>Podpora rôznych športov môže pomôcť deťom nájsť aktivitu,
                    ktorá ich bude baviť dlhodobo.</p>
                </div>
            </div>

        </section>
    </x-foreground>
</x-app-layout>
