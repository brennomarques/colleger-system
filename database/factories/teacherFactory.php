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
        $competences = array('Doutor', 'Mestre', 'Aluno', 'Pós-graduado');

        return [
            "name" => $this->faker->name(),
            "register" => $this->faker->ean8(),
            "competence" => $competences[random_int(0, 3)],
            "schooling" => $this->faker->sentence(),
        ];
    }
}
