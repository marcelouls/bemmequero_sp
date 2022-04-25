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

                        <div class="card-body">
                            <h2 class="card-title">
                                Pacientes
                            </h2>

                            <div class="logo">
                                <a href="paciente">
                                    <img src="/img/pesoa.jpg" alt="logo">
                                </a>
                            </div>




                        </div>


                    </div>

                    <hr>
                    <div class="container">

                      <div class="row">

                      <div class="card col-md-4" >

                        <div class="card-body">
                            <h2 class="card-title">
                                Psicologia
                            </h2>
                            <div class="logo">
                                <img src="/img/logopsi.jpg" alt="logo">
                            </div>

                            <a href="psicologia"><button class="btn btn-success">
                                Anamnese</button>
                            </a>
                        </div>
                      </div>
                      <div class="card col-md-4" >

                        <div class="card-body">
                            <h2 class="card-title">
                                Nutrição
                            </h2>
                            <div class="logo">
                                <img src="/img/logonutri.jpg" alt="logo">
                            </div>

                            <a href="nutricao"><button class="btn btn-success">
                                Anamnese </button>
                            </a>
                        </div>
                      </div>
                      <div class="card col-md-4" >

                        <div class="card-body">
                            <h2 class="card-title">
                                Fisioterapia
                            </h2>
                            <div class="logo">
                                <img src="/img/logofisio.jpg" alt="logo">
                            </div>

                            <a href="fisioterapia"><button class="btn btn-success">
                                Anamnese </button>
                            </a>
                        </div>
                      </div>
                    </div>
                    </div>
                    </div>


                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
