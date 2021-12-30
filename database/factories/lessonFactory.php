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
        return [
            "lessonnumber" => $this->faker->numberBetween(1,200),
            "theme" => $this->faker->name(),
            "duration" => $this->faker->numberBetween(1,3),
            "note" => $this->faker->sentence(),
            "courseid" => $this->faker->numberBetween(1,8),
            "teacherid" => $this->faker->numberBetween(1,10),
            'createdate' => $this->faker->date('Y-m-d H:i:s'),
            'updatedate' => $this->faker->date('Y-m-d H:i:s'),
        ];
    }
}
