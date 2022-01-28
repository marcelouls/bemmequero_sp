<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelaTestesController extends Controller
{
    public function index(){

        return view('teste');

    }

    public function create(){
        return view('/teste');
    }

    public function store(Request $request){

        $data = $request->all();

        $teste = \App\Models\teste::create($data);

        return \App\Models\teste::all();


    }
}
