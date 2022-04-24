<?php

namespace App\Http\Requests;

use App\Rules\CpfOk;
use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cpf' => ['required',"unique:paciente,cpf,($this->id)",'digits:11','numeric',new CpfOk],
            'nome_paciente' => ['required','string'],
            'email' => ['required', 'email'],
            'fone' => ['required','numeric']
        ];
    }
}