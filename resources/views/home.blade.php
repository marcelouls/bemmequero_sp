@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bemmequero') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <h3>Pacientes</h3>
                       <a href="paciente"> <button type="submit" class="btn btn-lg btn-success">Cadastro Pacientes</button></a>

                    </div>

                    <hr>
                    <div class="container">
                        <h3>Anamnese</h3>
                      <a href="nutricao">  <button type="submit" class="btn btn-lg btn-primary">Nutrição</button> </a>
                      <a href="fisioterapia"> <button type="submit" class="btn btn-lg btn-primary">Fisioterapia</button></a>
                      <a href="psicologia"> <button type="submit" class="btn btn-lg btn-primary">Psicologia</button> </a>
                    </div>


                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
