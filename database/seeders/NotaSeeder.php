<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'titulo' => 'Primeira Nota',
            'nivel_id' => 1,
            'conteudo' => 'Não sei o que espalhar nessa primeira nota :)',
        ]);

        DB::table('notas')->insert([
            'titulo' => 'Segunda Nota',
            'nivel_id' => 2,
            'conteudo' => 'Não sei o que espalhar nessa segunda nota :)',
        ]);

        DB::table('notas')->insert([
            'titulo' => 'Terceira Nota',
            'nivel_id' => 3,
            'conteudo' => 'Não sei o que espalhar nessa terceira nota :)',
        ]);
    }
}
