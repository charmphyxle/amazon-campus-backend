<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VideoGallery>
 */
class VideoGalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => 'https://www.youtube.com/watch?v=_JDAoOTEjrs',
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(5),
        ];
    }
}
