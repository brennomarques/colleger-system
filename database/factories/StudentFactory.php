<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\pt_BR\Person;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $financial_officer = array('Administrativo', 'Auditoria', 'Comercial', 'Financeiro', 'Comunicação', 'Contabilidade');

        return [
            "register" => $this->faker->ean8(),
            "name" => $this->faker->name(),
            "birth" => $this->faker->date('d-m-y'),
            "financial_officer" => $financial_officer[random_int(0, 5)],
            "cpf" => $this->faker->cpf(),
            "id_course" => $this->faker->randomNumber(5, true),
            "id_plan" => $this->faker->randomNumber(5, true),
        ];

    }
}
