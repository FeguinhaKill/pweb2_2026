<?php

namespace Database\Factories;

use App\Models\Produtos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produtos>
 */
class ProdutosFactory extends Factory
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
            'descricao' => $this->faker->sentence(),
            'preco' => $this->faker->randomNumber(5),
            'categoria' => $this->faker->word(),
            'mecanismo' => $this->faker->word(),
        ];
    }
}
