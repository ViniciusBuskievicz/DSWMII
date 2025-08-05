<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert(
            [
                'nome' => 'Mouse Gamer',
                'descricao' => 'Mouse Gamer Com RGB',
                'preco' => 120.00,
                'quantidade_estoque' => 120,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
