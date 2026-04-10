<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::create([
            'nome' => 'Felipe Gabriel dos Santos',
            'email' => 'felipe@example.com',
            'senha' => '123q',
        ]);
        Users::factory()->count(9)->create();
    }
}
