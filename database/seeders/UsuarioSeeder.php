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
        DB::table('users')->insert([
            'name' => 'Luane',
            'email' => 'luane@gmail.com',
            'password' => '123'
        ]);

        DB::table('users')->insert([
            'name' => 'Lopes',
            'email' => 'lopes@gmail.com',
            'password' => '123'
        ]);
    }
}
