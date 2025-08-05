<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projetos')->insert([
        [
            'equipes_id' => 1,
            'titulo' => "Fazer Alguma coisa",
            'prazo' => '2025-08-20',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'equipes_id' => 1,
            'titulo' => "Fazer Outra coisa",
            'prazo' => '2025-08-25',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'equipes_id' => 2,
            'titulo' => "Não deixar Fazer Alguma coisa",
            'prazo' => '2025-08-20',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'equipes_id' => 2,
            'titulo' => "Não Deixar Fazer Outra coisa",
            'prazo' => '2025-08-25',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
