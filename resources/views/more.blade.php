<x-app-layout>
    <div id="lara-modal" class="fixed inset-0 hidden bg-black bg-opacity-80 z-50 flex items-center justify-center">
        <div class="relative w-full h-full flex items-center justify-center">
            <button
                class="absolute top-6 right-8 text-white text-4xl font-bold z-50 hover:text-gray-300 close-modal">×</button>
            <div class="w-full h-full flex items-center justify-center p-6">
                <iframe class="w-[90vw] h-[80vh] rounded-2xl shadow-2xl" src="https://www.youtube.com/embed/E5mQr8sBULk"
                    frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div id="peter-modal" class="fixed inset-0 hidden bg-black bg-opacity-80 z-50 flex items-center justify-center">
        <div class="relative w-full h-full flex items-center justify-center">
            <button
                class="absolute top-6 right-8 text-white text-4xl font-bold z-50 hover:text-gray-300 close-modal">×</button>
            <div class="w-full h-full flex items-center justify-center p-6">
                <iframe class="w-[90vw] h-[80vh] rounded-2xl shadow-2xl" src="https://www.youtube.com/embed/zXlWdUc1cwY"
                    frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <x-foreground>
        <section class="pt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <h2
                    class="animate__animated animate__zoomIn animate__slow text-6xl font-bold text-center mb-12 text-black">
                    Ambasádori pohybu</h2>

                <x-bio-left name="Rastislav Pavlikovský" img="storage/imgs/Pavlikovský Rasťo.jpg"
                    bio="Rasťo už ako malý chlapec mal rád všetky športy. Až do dvanástich rokov hrával najradšej futbal a hokej, ktoré mu aj veľmi išli. Dlhý čas nevedel, ktorý šport si vybrať, pretože ho bavili oba, no nakoniec sa rozhodol naplno venovať hokeju. Na ľade mu to išlo skvele. Bol rýchly, obratný a mal dobrý prehľad v hre. Počas tréningov si ho rýchlo všimli tréneri, pretože sa nikdy nevzdával a mal v sebe veľké odhodlanie. Každý tréning bral vážne, aj keď to niekedy bolo ťažké. Po škole bežal rovno na štadión a aj keď bol unavený, nikdy sa nesťažoval – hokej ho jednoducho bavil. Už ako dieťa sníval o tom, že raz bude hrať za Slovensko a že si oblečie reprezentačný dres. Tento sen sa mu splnil – stal sa reprezentantom Slovenska a zahral si po boku najlepších slovenských hokejistov."
                    uspech1="Majster sveta (2002)" uspech2="Účasť na zimných olympijských hrách (2002)"
                    uspech3="Víťaz Calder Cupu (2003)" uspech4="Majster Švajčiarska (2008)"
                    uspech5="Majster Slovenskej extraligy (1994/1995 a 1995/1996)" />

                <x-bio-right name="Petra Vlhová" img="storage/imgs/Vlhová Petra.jpg"
                    bio="Peťa odmalička žila pod horami, kde bol sneh doma skoro každý deň. Jej rodičia vlastnili bufety priamo pri lyžiarskych svahoch. Kým oni predávali klobásky a čaj lyžiarom, malá Peťa už mala lyže na nohách a jazdila hore-dole po kopci. Na svahu bola ako doma. Keď skončil tréning, nešla hneď domov – sadla si do bufetu, dala si hotdog, napila sa čaju a šup naspäť na svah. Niekedy lyžovala, kým sa celkom nezotmelo. Nikdy sa nehrala s bábikami, ale radšej stavala bunkre s chalanmi alebo súťažila, kto rýchlejšie zíde kopec. V piatich rokoch už trénovala v klube. Na tréningoch bola húževnatá, často najmladšia, no aj tak vyhrávala. Peťa nikdy nechcela byť ako typické dievčatá - nenosila šaty, ani sa nehrala s bábikami. Vždy bola odvážna, tvrdohlavá a priama – presne taká, aká je dodnes."
                    uspech1="Majsterka sveta v obrovskom slalome (2019)" uspech2="Víťazka celkového Svetového pohára (2021)"
                    uspech3="Zlatá medaila v slalome zo Zimných olympijských hier (2022)" uspech4="Viac než 30 víťazstiev a viac než 70 pódiových umiestnení vo Svetovom pohári"
                    uspech5="•	Ocenenie Rad Ľudovíta Štúra I. triedy za mimoriadne zásluhy o rozvoj Slovenska v oblasti športu (2024)" />
                <hr class="border-t border-gray-300 w-full">

                <x-bio-left name="Marián Hossa " img="storage/imgs/Hossa Marián.jpg"
                    bio="Marián už od malička miloval hokej. Aj jeho otec kedysi hrával hokej a aj preto mal veľkú radosť, že aj jeho syn ide v jeho šľapajach. Keď bol Marián malý, často s bratom chodievali za otcom do kabíny, kde videli, ako to vyzerá medzi skutočnými hokejistami. Možno práve tam sa rozhodli, že raz budú ako oni. Na ľad sa Marián postavil prvýkrát, keď mal len päť rokov. Od začiatku mu to išlo – rýchlo korčuľoval, vedel dávať góly a vždy hral pre tím. Trénoval poctivo, aj keď to znamenalo vstávať skoro ráno. Jeho rodičia ho s láskou vozili na tréningy a hoci to bolo niekedy náročné, stálo to za to. Doteraz rád spomína na detstvo, keď chodil na plaváreň, hral sa s bratrancami a behal po sídlisku. Ale hokej bol vždy jeho najväčšia vášeň. Už ako dieťa mal disciplínu, odhodlanie a obrovskú chuť zlepšovať sa. A práve vďaka tomu sa z neho stal jeden z najlepších slovenských hokejistov všetkých čias. "
                    uspech1="Majster sveta (2002)" uspech2="Memorial Cup (1998)"
                    uspech3="5x účasť v NHL All-Star Game (2000, 2002, 2003, 2004, 2007, 2008)" uspech4="Účasť na zimných olympijských hrách (2002, 2006, 2010)"
                    uspech5="Ocenenie Rad Ľudovíta Štúra II. triedy za mimoriadne zásluhy o rozvoj Slovenska v oblasti športu (2022)" />

                <x-bio-right name="Paulína Batovská Fialková" img="storage/imgs/Fialková Batovská Paulína.jpg"
                    bio="Paja už ako malá bola veľmi aktívna – rada športovala, behala po horách a milovala sneh. Spolu so svojou mladšou sestrou sa začali venovať biatlonu – športu, v ktorom sa beží na lyžiach a strieľa zo zbrane. Na začiatku to nebolo jednoduché. Tréneri ich učili trpezlivosti, disciplíne a vytrvalosti. Trénovali v skromných podmienkach – často im chýbalo vybavenie a niekedy sa im dokonca pokazil autobus, ktorým chodili na preteky. Ale ani to ich neodradilo. Paulína bola už vtedy veľmi cieľavedomá a zodpovedná, chcela sa zlepšovať a tvrdo na sebe pracovala. Tréneri ju museli občas aj pribrzdiť, pretože tréningy brala tak vážne, že by cvičila aj nonstop. Sestry Fialky boli na trati súperky, ale mimo nej najlepšie kamarátky. Paulína hovorí, že si navzájom veľmi pomáhali – spolu sa smiali, plakali, radili si a podporovali sa. Keď bolo ťažko, vždy vedeli, že majú jedna druhú. A možno práve vďaka tomu zvládli všetky výzvy, ktoré biatlon priniesol. Ich príbeh ukazuje, že aj keď začiatky môžu byť ťažké, tvrdá práca, odhodlanie a podpora rodiny dokážu človeka doviesť veľmi ďaleko."
                    uspech1="9x pódiové umiestnenie v rámci Svetového pohára" uspech2="4x strieborná medaila na Svetovom pohári"
                    uspech3="5x bronzová medaila na Svetovom pohári" uspech4="6. miesto v celkovom hodnotení Svetového pohára (2019)"
                    uspech5="3x účasť na Zimných olympijských hrách (2014, 2018, 2022)" />
                <hr class="border-t border-gray-300 w-full">

                <x-bio-left name="Žigmund Pálffy" img="storage/imgs/Žigmund Pálffy.jpg"
                    bio="Žigo, ako mu všetci hovoria, miloval šport už od malička. Najskôr sa venoval futbalu a veľmi ho to bavilo. Bol v ňom šikovný, no jeho otec chcel, aby hral hokej. Veril, že práve v tomto športe má veľkú budúcnosť, a aj preto s ním chodil tréningy. Raz sa však stalo, že namiesto hokejového tréningu išiel hrať futbal. Otec sa vtedy veľmi nahneval a Žigo sa rozhodol, že si vyberie len jeden šport. Rozhodol sa pre hokejovú triedu, v ktorej sa už naplno mohol venovať hokeju. Spočiatku to pre neho nebolo jednoduché, pretože musel opustiť futbal, ktorý mal rád, a prispôsobiť sa novému prostrediu. Okrem toho ani podmienky v tom čase neboli jednoduché. Vraj ho nechceli zobrať do reprezentácie, pretože mal staré korčule. Jeho mama mu preto musela požičať peniaze na nové, aby dostal šancu. Aj tieto ťažkosti ho však naučili nevzdávať sa a bojovať za svoj sen a aj vďaka ním sa stal jedným z najlepších hokejistov, pretože veril v seba, tvrdo trénoval a nikdy to nevzdal."
                    uspech1="Majster sveta (2002)" uspech2="4x účasť v NHL All-Star Game (1997, 1998, 2001, 2002)"
                    uspech3="Bronzová medaila z majstrovstiev sveta (2003)" uspech4="Účasť na zimných olympijských hrách (1994, 2010)"
                    uspech5="Líder v bodoch na majstrovstvách sveta (2003)" />

                <div class="w-full py-16 px-6" data-aos="fade-up">
                    <h2 class="font-[Kaushan] antialiased text-4xl font-bold text-blue-800 mb-24 text-center">Ako ti
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

                <!-- Activities Section -->
                {{-- <div class="w-full py-16 px-6" data-aos="fade-up">
                    <h2 class="text-4xl font-bold text-blue-800 mb-24 text-center">Aktivity aj na doma</h2>

                    <div class="space-y-4 max-w-4xl mx-auto">
                        <div
                            class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                            <div class="text-4xl">🥾</div>
                            <div>
                                <p class="font-semibold text-lg text-blue-700">Chôdza</p>
                                <p class="text-gray-700 mt-1 text-lg">Zlepší náladu, podporuje kreativitu a dodáva telu
                                    energiu.</p>
                            </div>
                        </div>

                        <div
                            class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                            <div class="text-4xl">🏃‍♂️</div>
                            <div>
                                <p class="font-semibold text-lg text-green-700">Beh</p>
                                <p class="text-gray-700 mt-1 text-lg">Posilní srdce, zlepšuje kondíciu a učí disciplíne.
                                </p>
                            </div>
                        </div>

                        <div
                            class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                            <div class="text-4xl">🏊‍♀️</div>
                            <div>
                                <p class="font-semibold text-lg text-yellow-700">Plávanie</p>
                                <p class="text-gray-700 mt-1 text-lg">Posilní celé telo, zlepšuje koordináciu a zdravé
                                    plúca.</p>
                            </div>
                        </div>

                        <div
                            class="bg-white p-6 rounded-xl shadow-lg flex items-start gap-4 hover:scale-105 transform transition">
                            <div class="text-4xl">🤸‍♂️</div>
                            <div>
                                <p class="font-semibold text-lg text-red-700">Cvičenie</p>
                                <p class="text-gray-700 mt-1 text-lg">Zvyšuje flexibilitu, rovnováhu a správne držanie
                                    tela.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
    </x-foreground>
    <x-eshop />
</x-app-layout>
