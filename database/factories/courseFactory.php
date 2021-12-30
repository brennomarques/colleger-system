<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class courseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'coursename' => $this->faker->name(),
            'qntmax' => $this->faker->numberBetween(10,20),
            'createdate' => $this->faker->date('Y-m-d H:i:s'),
            'updatedate' => $this->faker->date('Y-m-d H:i:s'),
            'category' =>  $this->faker->jobTitle(),
            'monthlypayment' => $this->faker->numberBetween(1000,3000),
        ];
    }
}
