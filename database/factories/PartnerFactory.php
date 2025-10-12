<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PartnerFactory extends Factory
{
    protected $model = \App\Models\Partner::class;

    public function definition()
    {
        $types = ['general', 'main', 'standard', 'institutional'];

        $type = $this->faker->randomElement($types);

        return [
            'name' => $this->faker->company,
            'slug' => $this->faker->unique()->slug,
            'type' => $type,
            'image' => $this->faker->imageUrl(300, 150),
            'text' => $this->faker->paragraph(3),
            'gallery' => json_encode([
                $this->faker->imageUrl(400,300),
                $this->faker->imageUrl(400,300),
            ]),
        ];
    }
}
