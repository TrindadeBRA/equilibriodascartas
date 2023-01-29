<?php

//As migrações são como o controle de versão do seu banco de dados.
//permitindo que sua equipe defina e compartilhe a definição do esquema do banco de dados do aplicativo.

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('cartas_tarots', function (Blueprint $table) {
            $table->id();
            $table->string('nome_da_carta');
            $table->text('valor_positivo');
            $table->text('valor_negativo');
            $table->text('valor_amor');
            $table->text('valor_trabalho');
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
        Schema::dropIfExists('cartas_tarots');
    }
};
