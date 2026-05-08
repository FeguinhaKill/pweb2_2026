<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoAcessorioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produto_acessorio')->insert([
            ['produto_id' => 3, 'acessorio_id' => 1],
            ['produto_id' => 8, 'acessorio_id' => 2],
            ['produto_id' => 4, 'acessorio_id' => 3],
            ['produto_id' => 8, 'acessorio_id' => 4],
            ['produto_id' => 9, 'acessorio_id' => 5],
            ['produto_id' => 4, 'acessorio_id' => 6],
            ['produto_id' => 10, 'acessorio_id' => 7],
            ['produto_id' => 10, 'acessorio_id' => 8],
            ['produto_id' => 6, 'acessorio_id' => 9],
            ['produto_id' => 7, 'acessorio_id' => 10],
            ['produto_id' => 7, 'acessorio_id' => 11],
            ['produto_id' => 1, 'acessorio_id' => 12],
            ['produto_id' => 6, 'acessorio_id' => 13],
            ['produto_id' => 2, 'acessorio_id' => 14],
            ['produto_id' => 1, 'acessorio_id' => 15],
            ['produto_id' => 5, 'acessorio_id' => 16],
            ['produto_id' => 3, 'acessorio_id' => 17],
            ['produto_id' => 3, 'acessorio_id' => 18],
            ['produto_id' => 5, 'acessorio_id' => 19],
            ['produto_id' => 4, 'acessorio_id' => 20],
        ]);
    }
}
