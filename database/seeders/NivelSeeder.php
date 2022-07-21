<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveis')->insert([
            'nome' => 'Prioridade alta',
        ]);

        DB::table('niveis')->insert([
            'nome' => 'Prioridade média',
        ]);

        DB::table('niveis')->insert([
            'nome' => 'Prioridade baixa',
        ]);
    }
}
