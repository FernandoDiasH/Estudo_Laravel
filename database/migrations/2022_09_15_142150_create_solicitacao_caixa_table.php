<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacao_caixa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('setor_id')->constrained('setores');
            $table->date('dataSolicitada');
            $table->char('nome', 50);
            $table->float('valorSolicitado', 10, 2);
            $table->char('descricao', 100);
            $table->set('situacao', [0, 1])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitacao_caixa');
    }
};
