<?php

namespace Database\Seeders;

use Database\Factories\NewsAndEvenFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsAndEvenFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsAndEvenFactory::factory(10)->create();
    }
}
