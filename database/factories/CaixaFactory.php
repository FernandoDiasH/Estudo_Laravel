<?php

namespace Database\Factories;

use App\Models\Setor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Caixa>
 */
class CaixaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'setor_id' => Setor::factory(),
            'dataSolicitada'=>fake()->date(),
            'nome'=> fake()->name(),
            'valorSolicitado'=>fake()->randomFloat(2, 1, 500),
            'descricao'=>fake()->sentence(),

        ];
    }
}
