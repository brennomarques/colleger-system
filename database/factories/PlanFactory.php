<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
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
            "discount" => random_int(0,100),
            "note" => $this->faker->sentence(),
        ];
    }
}
