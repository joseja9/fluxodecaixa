<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo', function (Blueprint $table) {
            $table->increments('id_tipos');
            $table->string('tipo',45);
            $table->timestamps();
            $table->softDeletes();
        });

        \App\Models\Tipo::create([
            'id_tipos'=>1,
            'tipo' => 'Entrada'
        ]);

        \App\Models\Tipo::create([
            'id_tipos'=>2,
            'tipo' => 'Saida'
        ]);

        \App\Models\CentroCusto::create([
            'id_centro_custo'=> 1,
            'centro_custo' => 'Alimentação'
        ]);

        \App\Models\CentroCusto::create([
            'id_centro_custo'=> 2,
            'centro_custo' => 'Transporte'
        ]);

        \App\Models\CentroCusto::create([
            'id_centro_custo'=> 3,
            'centro_custo' => 'Salário'
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos');
    }
};
