<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function store(Request $request){

        $data = $request->all();

        $teste = \App\Models\Paciente::create($data);

        return \App\Models\Paciente::all();
    }
}
