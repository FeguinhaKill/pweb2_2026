<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MecanismoProdutos;

class ProdutosMecanismoSeeder extends Seeder
{

    public function run(): void
    {
        MecanismoProdutos::factory()->count(5)->create();
    }
}
