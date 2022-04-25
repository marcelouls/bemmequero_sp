@extends('layouts.app')

@section('content')

<div class="col-8 m-auto" style="border-radius: 15px; border:solid black 1px ; padding: 15px">
    Codigo Paciente : {{$paciente->id}} <br>
    CPF  : {{$paciente->cpf}} <br>
    Nome : {{$paciente->nome_paciente}} <br>
    Fone : {{$paciente->fone}} <br>
    Email : {{$paciente->email}} <br>
    Sexo : {{$paciente->sexo}} <br>
    Data Nascimento : {{$paciente->data_nasc}} <br>
    Escolaridade : {{$paciente->escolaridade}} <br>
    Estado Civil : {{$paciente->estado_civil}} <br>
    Endereço : {{$paciente->endereco}} <br>


</div>

@endsection
