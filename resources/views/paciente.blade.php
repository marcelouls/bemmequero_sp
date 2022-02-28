@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

    <h1>Registro Paciente</h1>
    <hr>

    <form action="/paciente/store" method="post">
        @csrf
        @method('POST')

        <div class="row">
        <div class="col-md-3">
            <label>C.P.F.</label>
        </div>
        <div class="col-md-9">
            <input type="text" name="cpf" id="cpf">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Nome Completo: </label>
        </div>
        <div class="col-md-9">
            <input type="text" name="nome_paciente">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="fone">Fone : </label>
        </div>
        <div class="col-md-9">
            <input type="text" name="fone" id="fone">
        </div>
     </div>
    <div class="row">
        <div class="col-md-3">
            <label for="email">E-mail</label>
        </div>
        <div class="col-md-9">
            <input type="email" name="email" id="email">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="sexo">Sexo</label>
        </div>
        <div class="col-md-9">
            <input type="text" name="sexo">
        </div>
    </div>
    <div class="row">
        <div class="col md-3">
            <label for="estado_civil">Estado Civil</label>
        </div>
        <div class="col-md-9">
            <input type="text" name="estado_civil">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="data_nasc">Data Nascimento</label>
        </div>
        <div class="col-md-9">
            <input type="date" name="data_nasc">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="escolaridade">Escolaridade</label>
        </div>
        <div class="col-md-9">
            <input type="text" name="escolaridade">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="endereco">Endereço</label>
        </div>
        <div class="col-md-9">
            <input type="text" name="endereco">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="ocupacao_principal">Ocupacao_principal</label>
        </div>
        <div class="col-md-9">
            <input type="text" name="ocupacao_principal">
        </div>

    </div>
    <button type="submit" class="btn btn-lg btn-success">Salvar</button>
</form>
    </div>
</div>
@endsection
