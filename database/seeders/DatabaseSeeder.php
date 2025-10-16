<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ApplicationFormSeeder::class,
            NewsAndEventSeeder::class,
            NewsLetterSeeder::class,
            VideoGallerySeeder::class,
            CalendarEventSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Adminstrator',
            'email' => 'admin@test.com',
            'role' => 'admin',
            'password' => bcrypt('123456789'),
        ]);
    }
}
