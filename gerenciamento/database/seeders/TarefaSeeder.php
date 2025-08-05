<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
               DB::table('tarefas')->insert([
        [
            'projetos_id' => 1,
            'titulo' => "Tarefa 01",
            'descricao'=> "Faz ae",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'projetos_id' => 1,
            'titulo' => "Tarefa 02",
            'descricao'=> "Se vira ae",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'projetos_id' => 2,
            'titulo' => "Tarefa 03",
            'descricao'=> "Enjoei de fazer já",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'projetos_id' => 2,
            'titulo' => "Tarefa 04",
            'descricao'=> "Resto não vai ter",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'projetos_id' => 3,
            'titulo' => "Tarefa 05",
            'descricao'=> "",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'projetos_id' => 3,
            'titulo' => "Tarefa 06",
            'descricao'=> "",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'projetos_id' => 4,
            'titulo' => "Tarefa 07",
            'descricao'=> "",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'projetos_id' => 4,
            'titulo' => "Tarefa 08",
            'descricao'=> "",
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
