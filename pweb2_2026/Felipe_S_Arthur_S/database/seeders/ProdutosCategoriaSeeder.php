<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdutosCategoria;

class ProdutosCategoriaSeeder extends Seeder
{

    public function run(): void
    {
        ProdutosCategoria::factory()->count(7)->create();
    }
}
