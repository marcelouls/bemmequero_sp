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
                        <h3>Psicologia</h3>
                        <button type="submit" class="btn btn-lg btn-success">Pacientes</button>
                        <button type="submit" class="btn btn-lg btn-primary">Anamnese</button>
                    </div>
                    <hr>
                    <div class="container">
                        <h3>Fisioterapia</h3>
                        <button type="submit" class="btn btn-lg btn-primary">Consultar</button>
                    </div>
                    <hr>
                    <div class="container">
                        <h3>Nutricao</h3>
                        <button type="submit" class="btn btn-lg btn-primary">Consultar</button>
                    </div>


                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
