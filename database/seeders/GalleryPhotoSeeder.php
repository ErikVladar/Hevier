<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GalleryPhoto;

class GalleryPhotoSeeder extends Seeder
{
    public function run(): void
    {
        $photos = [
            [
                'path' => 'storage/gallery/1.jpg',
                'title' => 'Dobrodružstvo',
                'description' => 'Pohyb je energia života.',
            ],
            [
                'path' => 'storage/gallery/2.jpg',
                'title' => 'Sila priateľstva',
                'description' => 'Každý krok posúva deti bližšie k sile a empatii.',
            ],
            [
                'path' => 'storage/gallery/3.jpg',
                'title' => 'Odvaha',
                'description' => 'Každá výzva prináša nové možnosti.',
            ],
            [
                'path' => 'storage/gallery/4.jpg',
                'title' => 'Radosť z pohybu',
                'description' => 'Radosť je palivom pre zdravý život.',
            ],
        ];

        foreach ($photos as $photo) {
            GalleryPhoto::create($photo);
        }
    }
}
