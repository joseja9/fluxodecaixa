<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Tipo::factory()->create([
        //     'id_tipos'=>1,
        //     'tipo' => 'Entrada'
        // ]);

        // \App\Models\Tipo::factory()->create([
        //     'id_tipos'=>2,
        //     'tipo' => 'Saida'
        // ]);

        // \App\Models\CentroCusto::factory()->create([
        //     'id_centro_custo'=> 1,
        //     'centro_custo' => 'Alimentação'
        // ]);

        // \App\Models\CentroCusto::factory()->create([
        //     'id_centro_custo'=> 2,
        //     'centro_custo' => 'Transporte'
        // ]);

        // \App\Models\CentroCusto::factory()->create([
        //     'id_centro_custo'=> 3,
        //     'centro_custo' => 'Salário'
        // ]);

        // lançamentos
        \App\Models\Lancamento::factory('50')->create();

    }
}
