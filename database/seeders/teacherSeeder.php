<?php

namespace Database\Seeders;

use App\Models\teacher;
use Database\Factories\teacherFactory;
use Illuminate\Database\Seeder;

class teacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        teacher::factory()->count(10)->create();
    }
}
