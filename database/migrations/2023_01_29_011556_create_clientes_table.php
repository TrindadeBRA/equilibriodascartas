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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->enum('sexo', ['masculino', 'feminino', 'não definido']);
            $table->date('data_nascimento');
            $table->string('signo');
            $table->string('celular')->nullable();
            $table->string('email')->nullable();
            $table->integer('jogos_comprados');
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
        Schema::dropIfExists('clientes');
    }
};
