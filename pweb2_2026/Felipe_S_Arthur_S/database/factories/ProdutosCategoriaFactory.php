<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutosCategoriaFactory extends Factory
{
    public function definition(): array
{
    return [];
}

    public function configure()
    {
        return $this->sequence(
            ['nome' => 'Pistolas'],
            ['nome' => 'Revólveres'],
            ['nome' => 'Rifles'],
            ['nome' => 'Carabinas'],
            ['nome' => 'Submetralhadoras'],
            ['nome' => 'Espingardas'],
            ['nome' => 'Munições'],
        );
    }
    

}
