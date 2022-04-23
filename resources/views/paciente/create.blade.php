@extends('layouts.app')

@section('content')
<div class="container">

<div class="col-md-12">

    <h1 class="text-center">Registro Paciente</h1>
    <hr>

    <form action="{{url('paciente/store')}}" method="post">
        @csrf
        @method('POST')

<div class="mb-3 row">
    <label for="cpf" class="col-sm-2 col-form-label">CPF</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="cpf" name="cpf" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="nome_paciente" class="col-sm-2 col-form-label">Nome Completo :</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="nome_paciente" name="nome_paciente" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="fone" class="col-sm-2 col-form-label">Fone :</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="fone" name="fone" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email :</label>
    <div class="col-sm-10">
        <input type="email"  class="form-control" id="email" name="email" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="sexo" class="col-sm-2 col-form-label">Sexo :</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="sexo" name="sexo" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="estado_civil" class="col-sm-2 col-form-label">Estado Civil :</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="estado_civil" name="estado_civil">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="data_nasc" class="col-sm-2 col-form-label">Data Nascimento</label>
    <div class="col-sm-10">
      <input type="date"  class="form-control" id="data_nasc" name="data_nasc" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="escolaridade" class="col-sm-2 col-form-label">Escolaridade :</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="escolaridade" name="escolaridade" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="endereco" class="col-sm-2 col-form-label">Endereço :</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="endereco" name="endereco" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="ocupacao_principal" class="col-sm-2 col-form-label">Ocupação Principal :</label>
    <div class="col-sm-10">
        <input type="text"  class="form-control" id="ocupacao_principa" name="ocupacao_principa" required>
    </div>
  </div>

    <button type="submit" class="btn btn-lg btn-success">Salvar</button>
</form>
    </div>
</div>

</div>
@endsection
