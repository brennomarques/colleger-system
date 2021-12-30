<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class lessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lessonNames = ['Programming', "DEVOps","Design and UX"];

        return [
            "lessonnumber" => $this->faker->numberBetween(1,200),
            "theme" => $lessonNames[random_int(0,2)],
            "duration" => $this->faker->numberBetween(1,3),
            "note" => $this->faker->text(200),
            "courseid" => $this->faker->numberBetween(1,8),
            "teacherid" => $this->faker->numberBetween(1,10),
            'createdate' => $this->faker->date('Y-m-d H:i:s'),
            'updatedate' => $this->faker->date('Y-m-d H:i:s'),
        ];
    }
}
