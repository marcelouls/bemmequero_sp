<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsicoModel extends Model
{
    use HasFactory;

    protected $table = 'anamnese_psi';

    protected $fillable = [
"cpf" ,"motivo_consulta",  "inicio_queixa","mudanca_queixa","sintomas_queixa","sintomas_queixa","tipo_sono", "horas_sono" ,"dif_inicio", "acorda_noite", "acorda_manha", "exceso_sono", "pesadelos", "camina", "tipo_alimentacao", "outro_tipo_alimentacao",
"descontrole_alimentar",  "ingesta_variavel" ,"medicamentos", "vomitos", "atividade_fisica", "frequencia_atividade","esforco",
"objetivo_fisico","outro_objetivo","ant_med_psiq","antecedentes_familiares","relacionamento_social","iniciar_desistir",
"concientizacao","percepcao_corporal", "historico_dietas","hipotese_diagnostica","objetivo_terapeutico", "plano_intervencao",
"observacoes"    ];
}
