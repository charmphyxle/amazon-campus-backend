<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CalendarEvent>
 */
class CalendarEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = $this->faker->time('H:i');
        $end = \Carbon\Carbon::createFromFormat('H:i', $start)->addHours(1)->format('H:i');
        
        return [
            'title' => $this->faker->sentence(3),
            'badge_title' => $this->faker->word(),
            'date' => $this->faker->date('Y-m-d'),
            'start_time' => $start,
            'end_time' => $end,
            'description' => $this->faker->sentence(10),
        ];
    }
}
