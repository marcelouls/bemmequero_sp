<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaciente extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('cpf');
            $table->string('nome_paciente');
            $table->string('fone');
            $table->string('email');
            $table->string('sexo');
            $table->string('estado_civil');
            $table->string('data_nasc');
            $table->string('escolaridade');
            $table->string('endereco');
            $table->string('ocupacao_principal');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
