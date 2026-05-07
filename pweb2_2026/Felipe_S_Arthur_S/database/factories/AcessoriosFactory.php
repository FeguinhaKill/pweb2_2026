<?php

namespace Database\Factories;

use App\Models\Acessorios;
use App\Models\Produtos;
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
            'produto_id' => (Produtos::all()->random())->id,
            'nome' => $this->faker->name(),
            'preco' => $this->faker->randomNumber(5),
            'descricao' => $this->faker->sentence(),
        ];
    }
}
