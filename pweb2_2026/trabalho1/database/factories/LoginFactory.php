<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoginFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'senha' => $this->faker->password($minLength = 2, $maxLength = 6),
        ];
    }
}
