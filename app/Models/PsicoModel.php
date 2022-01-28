<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsicoModel extends Model
{
    use HasFactory;

    protected $table = 'anamnese_psi';

    protected $fillable = [
        'motivo_consulta', 'historia_mc', 'tipo_sono', 'horas_sono', 'dif_inicio', 'acorda_noite', 'acorda_manha', 'exceso_sono', 'pesadelos', 'camina', 'tipo_alimentacao', 'outro_tipo_alimentacao', 'descontrole_alimentar', 'ingesta_variavel', 'medicamentos', 'vomitos', 'atividade_fisica', 'frequencia_atividade','esforco', 'objetivo_fisico', 'outro_objetivo', 'antecedentes_pessoais', 'valoracao_estado', 'hipotese', 'objetivo_terapeutico', 'plano_intervencao'

    ];
}
