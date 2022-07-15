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
            'id' => '1',
            'nivel' => 'Prioridade alta',
        ]);

        DB::table('niveis')->insert([
            'id' => '2',
            'nivel' => 'Prioridade média',
        ]);

        DB::table('niveis')->insert([
            'id' => '3',
            'nivel' => 'Prioridade baixa',
        ]);
    }
}
