<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdutosMecanismo;

class ProdutosMecanismoSeeder extends Seeder
{

    public function run(): void
    {
        ProdutosMecanismo::factory()->count(5)->create();
    }
}
