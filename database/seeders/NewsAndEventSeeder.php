<?php

namespace Database\Seeders;

use App\Models\NewsAndEvent;
use Database\Factories\NewsAndEventFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsAndEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsAndEvent::factory(10)->create();
    }
}
