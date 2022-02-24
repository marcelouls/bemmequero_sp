@extends('layouts.app')

@section('content')

    <h1>Registro Paciente</h1>
    <hr>

    <form action="/paciente/store" method="post">
        @csrf
        @method('POST')
    <div>
        <label>C.P.F.</label>
        <input type="text" name="cpf" id="cpf">
    </div>
    <div>
    <label>Nome Completo: </label>
    <input type="text" name="nome_paciente">
    </div>
    <div>
        <label for="fone">Fone : </label>
        <input type="text" name="fone" id="fone">
     </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo">
    </div>
    <div>
        <label for="estado_civil">Estado Civil</label>
        <input type="text" name="estado_civil">
    </div>
    <div>
        <label for="data_nasc">Data Nascimento</label>
        <input type="date" name="data_nasc">
    </div>
    <div>
        <label for="escolaridade">Escolaridade</label>
        <input type="text" name="escolaridade">
    </div>
    <div>
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco">
    </div>
    <div>
        <label for="ocupacao_principal">Ocupacao_principal</label>
        <input type="text" name="ocupacao_principal">
    </div>
    <button type="submit" class="btn btn-lg btn-success">Salvar</button>
</form>
@endsection
