<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $this->call(NotaSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(NivelSeeder::class); //criar coisas de Nivel
        
    }

    // public function run()
    // {
    //     $this->call(
    //         NotaSeeder::class,
    //         UsuarioSeeder::class,
    //     );
    // }
}
