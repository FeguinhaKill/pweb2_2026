<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MecanismoProdutosFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => $this->faker->unique()->randomElement([
                'AEG',
                'Gás',
                'Spring',
                'Mecânica',
                'Eletropneumáticas',
            ]),
            'mecanismo' => $this->faker->numberBetween(1, 5)
        ];
    }

}
