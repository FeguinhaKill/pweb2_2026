<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicos;
class ServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servicos::factory()->count(8)->create();
        Servicos::make([
            'nome' => 'Instalação de Mira Prismática',
            'preco' => '50.00',
            'descricao' => 'Instalação de mira prismática em armas de fogo, garantindo precisão e estabilidade para atiradores.',
        ])->save();
        Servicos::make([
            'nome' => 'Instalação de Mira Holográfica',
            'preco' => '40.00',
            'descricao' => 'Instalação de mira holográfica nas pistolas e submetralhadoras',
        ])->save();
    }
}
