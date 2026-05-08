<?php

namespace Database\Factories;

use App\Models\Acessorios;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Acessorios>
 */
class AcessoriosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'preco' => $this->faker->randomFloat(2, 500, 20000),
            'descricao' => $this->faker->sentence(),
        ];
    }
}
