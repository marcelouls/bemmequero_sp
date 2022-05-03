@extends('layouts.app')

@section('content')
<div class="container">

<div class="col-md-12">

    <h1 class="text-center">@if(isset($paciente)) Editar Paciente @else Cadastro Paciente @endif </h1>
    <hr>
    @if(isset($paciente))
    <form name="formEdit" id="formEdit" action="{{url("paciente/$paciente->id")}}" method="post">
        @csrf
        @method('PUT')

    @else
    <form name="formCad" id="formCad" action="{{url('paciente/store')}}" method="post">
        @csrf
        @method('POST')

     @endif

<div class="mb-3 row">
    <label for="cpf" class="col-sm-2 col-form-label">CPF</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf" value="{{$paciente->cpf ?? ""}}" required>
      @error('cpf')
        <div class="invalid-feedback">{{'Cpf invalido ou ja cadastrado'}}</div>
    @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label for="nome_paciente" class="col-sm-2 col-form-label">Nome Completo :</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control @error('nome_paciente') is-invalid @enderror" id="nome_paciente" name="nome_paciente" value="{{$paciente->nome_paciente ?? ""}}" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="fone" class="col-sm-2 col-form-label">Fone :</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control @error('fone') is-invalid @enderror" id="fone" name="fone" value="{{$paciente->fone ?? ""}}" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email :</label>
    <div class="col-sm-10">
        <input type="email"  class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$paciente->email ?? ""}}" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="sexo" class="col-sm-2 col-form-label">Sexo :</label>
    <div class="col-sm-10">
      <select class="form-select" name="sexo" id="sexo" " required>
          <option value="{{$paciente->sexo ?? ""}}"></option>
          <option value="femenino">Femenino</option>
          <option value="Masculino">Masculino</option>
          <option value="nao informa">Não informa</option>
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="estado_civil" class="col-sm-2 col-form-label">Estado Civil :</label>
    <div class="col-sm-10">
            <select class="form-select" name="estado_civil"  required>
            <option value="{{$paciente->estado_civil ?? ""}}">{{$paciente->estado_civil ?? ""}}</option>
            <option value="solteiro">Solteira(o)</option>
            <option value="casado">Casada(o)</option>
            <option value="viuvo">Viuva(o)</option>
            <option value="divorciado">Divorciada(o)</option>
            <option value="nao informa">Não Informa</option>
          </select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="data_nasc" class="col-sm-2 col-form-label">Data Nascimento</label>
    <div class="col-sm-10">
      <input type="date"  class="form-control" id="data_nasc" name="data_nasc" value="{{$paciente->data_nasc ?? ""}}" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="escolaridade" class="col-sm-2 col-form-label">Escolaridade :</label>
    <div class="col-sm-10">
        <select class="form-select" name="escolaridade"  required>
            <option value="{{$paciente->escolaridade ?? ""}}">{{$paciente->escolaridade ?? ""}}</option>
            <option value="superior">Superior</option>
            <option value="ensino medio">Ensino Medio</option>
            <option value="ensino fundamental">Ensino Fundamental</option>
            <option value="nao informa">Não Informa</option>
        </select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="endereco" class="col-sm-2 col-form-label">Endereço :</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="endereco" name="endereco" value="{{$paciente->endereco ?? ""}}" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="ocupacao_principal" class="col-sm-2 col-form-label">Ocupação Principal :</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="ocupacao_principal" name="ocupacao_principal" value="{{$paciente->ocupacao_principal ?? ""}} " required>
    </div>
  </div>

    <button type="submit" class="btn btn-lg btn-success">@if(isset($paciente)) Editar @else Cadastrar @endif</button>
</form>
    </div>
</div>

</div>
@endsection
