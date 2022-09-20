<?php

namespace Database\Seeders;

use App\Models\Caixa;
use App\Models\Setor;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaixaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caixa::factory(10)->create();
    }
}
