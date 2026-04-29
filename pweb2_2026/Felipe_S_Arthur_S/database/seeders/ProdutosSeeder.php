<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produtos;
class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produtos::factory()->count(10)->create();
        Produtos::make([
            'nome' => 'Requiem',
            'preco' => '10000.00',
            'descricao' => 'Revolver de longo alcance e alto impacto, ideal para caça de alvos grandes.',
            'categoria_id' => '2',
            'mecanismo_id' => '3'
        ])->save();
    }
}
