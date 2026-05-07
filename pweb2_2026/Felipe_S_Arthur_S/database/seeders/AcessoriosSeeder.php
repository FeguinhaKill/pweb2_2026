<?php

namespace Database\Seeders;

use App\Models\Acessorios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcessoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Acessorios::factory()->count(5)->create();
        Acessorios::make([
            'produto_id' => 3, 
            'nome' => '4x Prism Scope',
            'preco' => '2500.00',
            'descricao' => 'Mira prismática 4x de alta precisão para rifles, ideal para tiro de médio alcance.',
        ])->save();
    }
}
