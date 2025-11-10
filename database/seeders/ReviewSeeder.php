<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $reviews = [
        [
            'photo' => 'review1.png',
            'name' => 'Daniel Hevier',
            'rating' => 5,
            'text' => 'Je to moja najlepšia kniha a teším sa, že ňou oslovím nielen milovníkov príbehov ale aj všetkých, ktorí sa chcú, ale aj nechcú hýbať.',
        ],
        [
            'photo' => 'review3.png',
            'name' => 'Mária Polakovičová',
            'rating' => 5,
            'text' => 'Kniha plná dobrodružstva, z pera autora, ktorý oslovil svojimi príbehmi generácie detí. Jazykom, ktorému rozumie aj tá dnešná, odkrýva príbeh, ktorý so sebou nesie hlboké myšlienky. Kniha Strážcovia pohybu je pre všetky deti, ktoré milujú príbehy a rodičov, ktorí chcú dať deťom zmysluplné čítanie.',
        ],
        [
            'photo' => 'review2.png',
            'name' => 'Matej Tóth',
            'rating' => 4,
            'text' => 'Kniha Strážcovia pohybu je ďalším skvelým dielom Daniela Heviera. Spája v sebe pútavý, napínavý príbeh so silnou, v dnešnej dobe veľmi potrebnou, myšlienkou- aby sa deti viac hýbali, aby športovali a cítili sa tak lepšie. Verím, že čitateľov nie len zaujme, ale aj motivuje.',
        ],
        
    ];

    foreach ($reviews as $review) {
        Review::updateOrCreate(
            ['name' => $review['name']],
            $review                       
        );
    }
}
}
