<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    private $objPaciente;

    public function __construct()
    {
       $this->objPaciente=new Paciente();
    }

    public function index()
    {
        $paciente=$this->objPaciente->paginate(10);
        return view('/teste', compact('paciente'));
    }

    public function create()
    {
        return view('paciente\create');
    }

    public function store(PacienteRequest $request){

        $reg=$this->objPaciente->create([
            'cpf'=>$request->cpf,
            'nome_paciente'=>$request->nome_paciente,
            'fone'=>$request->fone,
            'email'=>$request->email,
            'sexo'=>$request->sexo,
            'estado_civil'=>$request->estado_civil,
            'data_nasc'=>$request->data_nasc,
            'escolaridade'=>$request->escolaridade,
            'endereco'=>$request->endereco,
            'ocupacao_principal'=>$request->ocupacao_principal
        ]);
        if($reg){
            return redirect('teste');
        }

        // $data = $request->all();

        // $Paciente = \App\Models\Paciente::create($data);

        // return view('teste');
    }

}
