<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Setor;
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
        if(!app()->environment('production')){
            $this->call([
                CaixaSeeder::class,
                CategoriaSeeder::class,
                FornecedorSeeder::class,

           ]);
        }

    }
}
