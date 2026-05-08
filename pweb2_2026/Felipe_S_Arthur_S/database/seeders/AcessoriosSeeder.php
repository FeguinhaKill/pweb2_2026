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
        Acessorios::make([
            'nome' => '4x Prism Scope',
            'preco' => '2500.00',
            'descricao' => 'Mira prismática 4x de alta precisão para rifles, ideal para tiro de médio alcance.',
        ])->save();
        Acessorios::make([
            'nome' => 'Red Dot Sight',
            'preco' => '1200.00',
            'descricao' => 'Mira holográfica compacta com aquisição rápida de alvo para combate de curta distância.',
        ])->save();

        Acessorios::make([
            'nome' => 'Silenciador Tático',
            'preco' => '1800.00',
            'descricao' => 'Supressor de ruído em alumínio reforçado para disparos mais discretos.',
        ])->save();

        Acessorios::make([
            'nome' => 'Grip Vertical',
            'preco' => '350.00',
            'descricao' => 'Empunhadura vertical ergonômica que melhora a estabilidade e controle da arma.',
        ])->save();

        Acessorios::make([
            'nome' => 'Lanterna Tática',
            'preco' => '600.00',
            'descricao' => 'Lanterna de alta intensidade para operações noturnas e ambientes escuros.',
        ])->save();

        Acessorios::make([
            'nome' => 'Laser Verde',
            'preco' => '750.00',
            'descricao' => 'Apontador laser verde com alta visibilidade para mira rápida.',
        ])->save();

        Acessorios::make([
            'nome' => 'Bipé Ajustável',
            'preco' => '900.00',
            'descricao' => 'Bipé retrátil ajustável ideal para rifles de precisão.',
        ])->save();

        Acessorios::make([
            'nome' => 'Mira 8x Tactical',
            'preco' => '3200.00',
            'descricao' => 'Luneta de ampliação 8x com ajuste fino para tiros de longa distância.',
        ])->save();

        Acessorios::make([
            'nome' => 'Coronha Ajustável',
            'preco' => '1100.00',
            'descricao' => 'Coronha retrátil com ajuste de altura e comprimento para maior conforto.',
        ])->save();

        Acessorios::make([
            'nome' => 'Tambor de Munição',
            'preco' => '1500.00',
            'descricao' => 'Carregador em tambor com alta capacidade para armas automáticas.',
        ])->save();

        Acessorios::make([
            'nome' => 'Bandoleira Tática',
            'preco' => '250.00',
            'descricao' => 'Bandoleira acolchoada de dois pontos para transporte confortável.',
        ])->save();

        Acessorios::make([
            'nome' => 'Compensador de Recuo',
            'preco' => '980.00',
            'descricao' => 'Compensador frontal que reduz o recuo e melhora a precisão em rajadas.',
        ])->save();

        Acessorios::make([
            'nome' => 'Mira Reflex',
            'preco' => '1450.00',
            'descricao' => 'Mira reflex de alta resposta para pistolas e submetralhadoras.',
        ])->save();

        Acessorios::make([
            'nome' => 'Handguard M-LOK',
            'preco' => '1300.00',
            'descricao' => 'Handguard leve com trilhos M-LOK para personalização de acessórios.',
        ])->save();

        Acessorios::make([
            'nome' => 'Carregador Estendido',
            'preco' => '500.00',
            'descricao' => 'Carregador de capacidade ampliada para pistolas e rifles.',
        ])->save();

        Acessorios::make([
            'nome' => 'Mira Noturna',
            'preco' => '4800.00',
            'descricao' => 'Sistema óptico de visão noturna para operações em baixa luminosidade.',
        ])->save();

        Acessorios::make([
            'nome' => 'Quebra-Chamas',
            'preco' => '700.00',
            'descricao' => 'Dispositivo frontal que reduz o clarão do disparo em ambientes escuros.',
        ])->save();

        Acessorios::make([
            'nome' => 'Trilho Picatinny',
            'preco' => '400.00',
            'descricao' => 'Trilho universal para instalação de miras e acessórios táticos.',
        ])->save();

        Acessorios::make([
            'nome' => 'Trilho Picatinny',
            'preco' => '400.00',
            'descricao' => 'Trilho universal para instalação de miras e acessórios táticos.',
        ])->save();

        Acessorios::make([
            'nome' => 'Coldre Tático',
            'preco' => '650.00',
            'descricao' => 'Coldre rígido com trava de segurança para pistolas.',
        ])->save();
        
        Acessorios::factory()->count(30)->create();
    }
    
}
