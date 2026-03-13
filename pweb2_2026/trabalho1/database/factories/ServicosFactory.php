<?php

namespace Database\Factories;

use App\Models\Servicos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Servicos>
 */
class ServicosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array 
    {
        return [
            'nome' => $this->faker->word(),
            'preco' => $this->faker->randomFloat(2, 10, 100),
            'descricao' => $this->faker->sentence(),
        ];
    }
}
