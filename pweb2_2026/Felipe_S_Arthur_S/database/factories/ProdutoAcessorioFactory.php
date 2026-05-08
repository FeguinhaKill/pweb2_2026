<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produtos;
use App\Models\Acessorios;

class ProdutoAcessorioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'produto_id' => (Produtos::All()->random())->id,
            'acessorio_id' => (Acessorios::All()->random())->id
        ];
    }
}