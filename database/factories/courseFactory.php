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
        $coursenames = array('PHP', 'Java', 'Javascript', 'C#', 'C++');

        return [
            'coursename' => $coursenames[random_int(0,4)],
            'qntmax' => $this->faker->numberBetween(10,20),
            'createdate' => $this->faker->date('Y-m-d H:i:s'),
            'updatedate' => $this->faker->date('Y-m-d H:i:s'),
            'category' =>  'Programação',
            'monthlypayment' => $this->faker->numberBetween(1000,3000),
        ];
    }
}
