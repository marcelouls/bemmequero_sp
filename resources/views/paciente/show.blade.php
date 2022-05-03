@extends('layouts.app')

@section('content')

<div class="col-8 m-auto" style="border-radius: 15px; border:solid black 1px ; padding: 15px">
    <strong>Codigo Paciente :</strong>  {{$paciente->id}} <br>
    <strong>CPF  :</strong> {{$paciente->cpf}} <br>
    <strong>Nome :</strong>  {{$paciente->nome_paciente}} <br>
    <strong>Fone :</strong>  {{$paciente->fone}} <br>
    <strong>Email :</strong>  {{$paciente->email}} <br>
    <strong>Sexo :</strong> {{$paciente->sexo}} <br>
    <strong>Data Nascimento :</strong> {{$paciente->data_nasc}} <br>
    <strong>Escolaridade :</strong> {{$paciente->escolaridade}} <br>
    <strong>Estado Civil :</strong> {{$paciente->estado_civil}} <br>
    <strong>Endereço :</strong> {{$paciente->endereco}} <br>

</div>

<div class="text-center" style="margin-top: 25px">


                <a href="{{url("psicologia/$paciente->id")}}">
                    <button class="btn btn-success btn-lg">Atender</button>
                </a>


</div>

@endsection
