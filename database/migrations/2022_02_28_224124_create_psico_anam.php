<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsicoAnam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psico_anam', function (Blueprint $table) {
            $table->id();
            $table->timestamps();



            $table->string('motivo_consulta');
            $table->string('inicio_queixa');
            $table->string('mudanca_queixa');
            $table->string('sintomas_queixa');
            $table->string('tipo_sono');
            $table->string('horas_sono');
            $table->string('dif_inicio');
            $table->string('acorda_noite');
            $table->string('acorda_manha');
            $table->string('exceso_sono');
            $table->string('pesadelos');
            $table->string('camina');
            $table->string('tipo_alimentacao');
            $table->string('outro_tipo_alimentacao');
            $table->string('descontrole_alimentar');
            $table->string('ingesta_variavel');
            $table->string('medicamentos');
            $table->string('vomitos');
            $table->string('atividade_fisica');
            $table->string('frequencia_atividade');
            $table->string('esforco');
            $table->string('objetivo_fisico');
            $table->string('outro_objetivo');
            $table->string('ant_med_psiq');
            $table->string('antecedentes_familiares');
            $table->string('relacionamento_social');
            $table->string('iniciar_desistir');
            $table->string('concientizacao');
            $table->string('percepcao_corporal');
            $table->string('historico_dietas');
            $table->string('hipotese_diagnostica');
            $table->string('objetivo_terapeutico');
            $table->string('plano_intervencao');
            $table->string('observacoes');

            $table->string('cpf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psico_anam');
    }
}
