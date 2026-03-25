<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaProdutos;

class ProdutosCategoriaSeeder extends Seeder
{

    public function run(): void
    {
        CategoriaProdutos::factory()->count(8)->create();
    }
}
