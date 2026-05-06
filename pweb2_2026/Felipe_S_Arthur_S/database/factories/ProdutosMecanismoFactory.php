<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutosMecanismoFactory extends Factory
{
    public function definition(): array
{
    return [];
}

    public function configure()
    {
        return $this->sequence(
            ['nome' => 'AEG'],
            ['nome' => 'Gás'],
            ['nome' => 'Spring'],
            ['nome' => 'Mecânica'],
            ['nome' => 'Eletropneumáticas'],
        );
    }
}