<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PsicoModel;

class PsicoController extends Controller
{
    private $ObjPsicoModel;

    public function __construct()
    {
        $this->ObjPsicoModel=new PsicoModel();
    }



    public function edit(Request $request)
    {
        $cpf = '710375764-03';

        $datas = \App\Models\PsicoModel::all();

        return view('findpsico', compact('datas'));

    }

    public  function create(){

        return view('psicologia');

    }

    public function store(Request $request){

        $data =  $request->all();

        $teste = \App\Models\PsicoModel::create($data);

        return \App\Models\PsicoModel::all();

    }

    // public function show()
    // {
    //     $test = $request
    //     $datas = \App\Models\Pacientes::all();

    //     return view('listapacientes', compact('datas'));
    // }


}
