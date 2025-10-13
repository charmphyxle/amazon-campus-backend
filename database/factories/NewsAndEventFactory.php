<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsAndEvent>
 */
class NewsAndEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'badge_title' => $this->faker->word(),
            'short_description' => $this->faker->sentence(8),
            'description' => $this->faker->paragraphs(3, true),
            'start_date' => $this->faker->date(), // format: YYYY-MM-DD
            'start_time' => $this->faker->time('H:i'), // 24-hour format
            'end_time' => $this->faker->time('H:i'),
            'location' => $this->faker->address(),
            'organizer' => $this->faker->company(),
            'contact' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'image' => $this->faker->imageUrl(640, 480, 'event', true, 'Product'),
        ];
    }
}
