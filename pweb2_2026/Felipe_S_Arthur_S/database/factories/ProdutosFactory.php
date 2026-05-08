<?php

namespace Database\Factories;

use App\Models\Produtos;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProdutosCategoria;
use App\Models\ProdutosMecanismo;

/**
 * @extends Factory<Produtos>
 */
class ProdutosFactory extends Factory
{
    public function definition(): array
    {
        $categoria = ProdutosCategoria::all()->random();

        return [
            'imagem' => null,
            'nome' => $this->faker->name(),
            'descricao' => $this->faker->sentence(),
            'preco' => $this->faker->randomNumber(5),
            'categoria_id' => $categoria->id,
            'mecanismo_id' => $categoria->id == 7 ? 6: ProdutosMecanismo::where('id', '!=', 6)
                    ->get()
                    ->random()
                    ->id
        ];
    }
}