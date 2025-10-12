<?php

namespace Database\Seeders;

use App\Models\ApplicationForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApplicationForm::factory(20)->create();
    }
}
