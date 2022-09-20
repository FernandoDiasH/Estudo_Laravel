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
        Schema::create('finalizar_caixa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitacao_caixa_id')->constrained('solicitacao_caixa');
            $table->date('dataFinalizado');
            $table->char('NF');
            $table->float('valorGasto', 10, 2);
            $table->float('troco', 10, 2);
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
        Schema::dropIfExists('finalizar_caixa');
    }
};
