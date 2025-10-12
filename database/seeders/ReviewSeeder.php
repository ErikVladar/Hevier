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
            'photo' => 'review2.png',
            'name' => 'Mária Nováková',
            'rating' => 4.5,
            'text' => 'Táto kniha úplne zmenila prístup môjho dieťaťa k pohybu – teraz sa teší na každý deň!',
        ],
        [
            'photo' => 'review1.png',
            'name' => 'Peter Horváth',
            'rating' => 4,
            'text' => 'Úžasný príbeh a inšpirácia pre deti, aby sa hýbali a objavovali nové aktivity.',
        ],
        [
            'photo' => 'lara.png',
            'name' => 'Lara Kováčová',
            'rating' => 5,
            'text' => 'Skvelá kniha',
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
