@extends('layouts.app')
{{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

    @section('content')

    <div class="container col-8 mt-15 p-10">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Fone</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($paciente as $pacientes )

            <tr>
                <th scope="row">{{$pacientes->id}}</th>
                <td>{{$pacientes->nome_paciente}}</td>
                <td>{{$pacientes->email}}</td>
                <td>{{$pacientes->fone}}</td>
                <td>
                    <button class="btn btn-primary btn-sm">Editar</button>
                    <button class="btn btn-success btn-sm">Atender</button>

                </td>
              </tr>

            @endforeach


        </tbody>
      </table>

    </div>
{{$paciente->links()}}

@endsection

