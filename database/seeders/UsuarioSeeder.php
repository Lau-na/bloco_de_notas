<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nome' => 'Luane',
            'email' => 'luane@gmail.com',
            'senha' => '123'
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'Lopes',
            'email' => 'lopes@gmail.com',
            'senha' => '123'
        ]);
    }
}
