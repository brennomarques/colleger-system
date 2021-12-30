<?php

namespace Database\Seeders;

use App\Models\lesson;
use Illuminate\Database\Seeder;

class lessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        lesson::factory()->count(50)->create();
    }
}
