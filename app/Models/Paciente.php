<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'paciente';

    protected $fillable = [
        'cpf', 'nome_paciente', 'fone', 'email', 'sexo', 'estado_civil', 'data_nasc',
        'escolaridade', 'endereco', 'ocupacao_principal'
    ];


}
