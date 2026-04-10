<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProdutosCategoriaSeeder;
use Database\Seeders\ProdutosMecanismoSeeder;
use Database\Seeders\ProdutosSeeder;
use Database\Seeders\ServicosSeeder;
use Database\Seeders\SugestoesSeeder;
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProdutosCategoriaSeeder::class,
            ProdutosMecanismoSeeder::class,
            ProdutosSeeder::class,
            ServicosSeeder::class,
            SugestoesSeeder::class,
        ]);
    }
}
