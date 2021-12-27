<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class teacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "register" => $this->faker->ean8(),
            "competence" => $this->faker->title(),
            "schooling" => $this->faker->sentence(),
        ];
    }
}
