<?php

namespace Database\Seeders;

use App\Models\course;
use Database\Factories\courseFactory;
use Illuminate\Database\Seeder;

class courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        course::factory()->count(8)->create();
    }
}
