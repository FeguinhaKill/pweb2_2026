<?php

namespace Database\Factories;

use App\Models\Sugestoes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sugestoes>
 */
class SugestoesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array 
    {
        return [
            'titulo' => $this->faker->word(),
            'descricao' => $this->faker->sentence(),
            'palavras_chaves' => $this->faker->words(3, true),
        ];
    }
}
