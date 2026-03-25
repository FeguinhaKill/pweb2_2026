<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutosCategoriaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => $this->faker->unique()->randomElement([
                'Pistolas',
                'Revólveres',
                'Rifles',
                'Carabinas',
                'Submetralhadoras',
                'Espingardas',
                'Munições',
                'Acessórios',
            ]),
        ];
    }

}
