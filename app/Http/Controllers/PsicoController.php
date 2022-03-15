<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsicoController extends Controller
{
    public  function create(){

        return view('psicologia');

    }

    public function store(Request $request){

        $data =  $request->all();

        $teste = \App\Models\PsicoModel::create($data);

        return \App\Models\PsicoModel::all();

    }


}
