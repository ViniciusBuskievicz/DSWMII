<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipes')->insert([
            [
            'nome'=> "Vingadores",
            'descricao' => "Os herois mais fortes da terra",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nome'=> "Vilões",
            'descricao' => "Os Vilões dos mais fortes da terra",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ]
    );
    }
}
