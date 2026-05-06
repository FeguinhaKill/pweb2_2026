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
        Acessorios::factory()->count(10)->create();
    }
}
