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
        Produtos::make([
            'imagem' => 'imagens/requiem.png',
            'nome' => 'Requiem',
            'preco' => '10000.00',
            'descricao' => 'Revolver de longo alcance e alto impacto, ideal para caça de alvos grandes.',
            'categoria_id' => '2',
            'mecanismo_id' => '3'
        ])->save();
        Produtos::make([
            'imagem' => 'imagens/ak-47.png',
            'nome' => 'AK-47',
            'preco' => '8500.00',
            'descricao' => 'Rifle automático robusto e confiável, ideal para combate de médio alcance.',
            'categoria_id' => 3, 
            'mecanismo_id' => 1  
        ])->save();

        Produtos::make([
            'imagem' => 'imagens/awm.png',
            'nome' => 'AWM',
            'preco' => '15000.00',
            'descricao' => 'Rifle sniper de altíssima precisão e longo alcance.',
            'categoria_id' => 3,
            'mecanismo_id' => 3 
        ])->save();

        Produtos::make([
            'imagem' => 'imagens/beretta.png',
            'nome' => 'Beretta',
            'preco' => '4000.00',
            'descricao' => 'Pistola leve e eficiente, ideal para combates curtos.',
            'categoria_id' => 1, 
            'mecanismo_id' => 2 
        ])->save();

        Produtos::make([
            'imagem' => 'imagens/kar98.png',
            'nome' => 'Kar98',
            'preco' => '12000.00',
            'descricao' => 'Rifle de ferrolho clássico, excelente para tiros de precisão.',
            'categoria_id' => 3,
            'mecanismo_id' => 3 
        ])->save();

        Produtos::make([
            'imagem' => 'imagens/luger.png',
            'nome' => 'Luger',
            'preco' => '4500.00',
            'descricao' => 'Pistola histórica com design icônico e boa precisão.',
            'categoria_id' => 1,
            'mecanismo_id' => 2 
        ])->save();

        Produtos::make([
            'imagem' => 'imagens/m4.png',
            'nome' => 'M4',
            'preco' => '9000.00',
            'descricao' => 'Rifle moderno versátil, ideal para diversas situações de combate.',
            'categoria_id' => 3,
            'mecanismo_id' => 1 
        ])->save();

        Produtos::make([
            'imagem' => 'imagens/mp40.png',
            'nome' => 'MP40',
            'preco' => '7000.00',
            'descricao' => 'Submetralhadora compacta, ideal para combate próximo.',
            'categoria_id' => 5,
            'mecanismo_id' => 1 
        ])->save();

        Produtos::make([
            'imagem' => 'imagens/pump_action_shotgun.png',
            'nome' => 'Pump Action Shotgun',
            'preco' => '6000.00',
            'descricao' => 'Espingarda de ação por bombeamento, poderosa a curta distância.',
            'categoria_id' => 6, 
            'mecanismo_id' => 3 
        ])->save();

        Produtos::make([
            'imagem' => 'imagens/ruger_scout.png',
            'nome' => 'Ruger Scout',
            'preco' => '11000.00',
            'descricao' => 'Rifle tático de precisão, ideal para médio e longo alcance.',
            'categoria_id' => 3,
            'mecanismo_id' => 4 
        ])->save();
        Produtos::make([
            'imagem' => 'imagens/slug.png',
            'nome' => 'Munição Slug',
            'preco' => '40.00',
            'descricao' => 'Cartucho para shotgun com alto poder de penetração.',
            'categoria_id' => 7,
            'mecanismo_id' => 6 
        ])->save();
    }
}
