@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
        <h1 class="text-center">ANAMNESE PSICOLOGIA</h1>
        <div>
            {{-- <p>{{$paciente->id}}</p> --}}
            <form action="/psicologia" method="post">
            <p>Nome do Paciente : <strong> {{$paciente->nome_paciente}} </strong></p>
            <input type="hidden" name="id_paciente" value="{{$paciente->nome_paciente}}">
        </div>

        <hr>

            @csrf
            @method('POST')

            {{-- <div class="row">
                <div class="col-md-3">
                    <label for="cpf">Nome Paciente : {{$paciente->nome_paciente}}</label>
                </div>
                <div class="col-md-9">
                    <input class="form-control" type="text" name="cpf">
                </div>
            </div> --}}

            <div >
                <h3 class="text-center">Motivo de consulta</h3>
                <textarea class="form-control" name="motivo_consulta" cols="100% " rows="10"></textarea>
            </div>
            <div>
                <h3 class="text-center">Evolução da queixa  </h3> <br>
                <label for="inicio_queixa">Inicio da queixa</label>
                <textarea class="form-control" name="inicio_queixa" cols="100% " rows="10"></textarea>
                <label for="mudanca_queixa">Mudança da queixa</label>
                <textarea class="form-control" name="mudanca_queixa" cols="100% " rows="10"></textarea>
                <label for="sintomas_queixa">Sintomas</label>
                <textarea class="form-control" name="sintomas_queixa" cols="100% " rows="10"></textarea>

            </div>
            <h3 class="text-center">Sono</h3>
            <div class="form-group">

                <div>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Adecuado" name="tipo_sono" class="custom-control-input" value="Adecuado">
                        <label class="custom-control-label" for="Adecuado">Adecuado</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Tranquilo" name="tipo_sono" class="custom-control-input" value="Tranquilo">
                        <label class="custom-control-label" for="Tranquilo">Tranquilo</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="Inquieto" name="tipo_sono" class="custom-control-input" value="Inquieto">
                        <label class="custom-control-label" for="Inquieto">Inquieto</label>
                      </div>
                </div>

                {{-- </div>
                <div class="row " class="col-md-12 "> --}}
                    <div class="input-group">
                    <label class="input-group-text">Horas dormidas :
                        <input  class="form-control" type="text" name="horas_sono">
                    </label>
                </div>
                </div>
                <h3 class="text-center">Dificultades para dormir </h3>

                <div class="container">
                <div class="form-group row">
                    <div class="col-6">
                        <label class="form-check-label" for="dif_inicio">Dificuldade para iniciar o sono.</label>
                    </div>
                    <div class="col-6">
                        <input class="form-check-input" type="checkbox" name="dif_inicio" id="dif_inicio">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label class="form-check-label" for="acorda_noite">Acorda durante a noite.</label>
                    </div>
                    <div class="col-6">
                        <input class="form-check-input" type="checkbox" name="acorda_noite" id="acorda_noite">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label class="form-check-label" for="acorda_manha">Acordar pela manhã antes do tempo desejado e não continua o sono.</label>
                    </div>
                    <div class="col-6">
                        <input class="form-check-input" type="checkbox" name="acorda_manha" id="acorda_manha">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label class="form-check-label" for="exceso_sono">Excesso de sono.</label>
                    </div>
                    <div class="col-6">
                        <input class="form-check-input" type="checkbox" name="exceso_sono" id="exceso_sono">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-6">
                        <label class="form-check-label" for="pesadelos">Frequência de pesadelos ou terrores noturnos.</label>
                    </div>
                    <div class="col-6">
                        <input class="form-check-input" type="checkbox" name="pesadelos" id="pesadelos">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label class="form-check-label" for="camina">Caminha ou conversa enquanto dorme.</label>
                    </div>
                    <div class="col-6">
                        <input class="form-check-input" type="checkbox" name="camina" id="camina">
                    </div>
                </div>





                <h3 class="text-center">Alimentação</h3>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="adequada" name="tipo_alimentacao" class="custom-control-input" value="adequada">
                    <label class="custom-control-label" for="adequada">Adequada</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="come_bem" name="tipo_alimentacao" class="custom-control-input" value="come_bem">
                    <label class="custom-control-label" for="come_bem">Come Bem</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="come_mal" name="tipo_alimentacao" class="custom-control-input" value="come_mal">
                    <label class="custom-control-label" for="come_mal">Come Mal</label>
                  </div>


            {{-- </div>
            <div class="row " class="col-md-12 "> --}}
                <div class="input-group">
                <label class="input-group-text">Outro :
                    <input  class="form-control" type="text" name="outro_tipo_alimentacao">
                </label>
            </div>
            </div>

            <div class="form-group row">
                <div class="col-6">
                    <label class="form-check-label" for="acorda_manha">Episódios de descontrole alimentar:</label>
                </div>
                <div class="col-6">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sim_descontrole" name="descontrole_alimentar" class="custom-control-input" value="sim">
                        <label class="custom-control-label" for="sim_descontrole">Sim</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="nao_descontrole" name="descontrole_alimentar" class="custom-control-input" value="nao">
                        <label class="custom-control-label" for="nao_descontrole">Não</label>
                      </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-6">
                    <label class="form-check-label" for="ingesta">Ingesta vária em situações de tristeza, nervosismo, estresse ou ansiedade:</label>
                </div>
                <div class="col-6">
                    <input class="form-check-input" type="checkbox" name="ingesta_variavel" id="ingesta">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-6">
                    <label class="form-check-label" for="medicamentos">Usou medicamentos para baixar de peso:</label>
                </div>
                <div class="col-6">
                    <input class="form-check-input" type="checkbox" name="medicamentos" id="medicamentos">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-6">
                    <label class="form-check-label" for="vomitos">Vómitos autoinduzidos:</label>
                </div>
                <div class="col-6">
                    <input class="form-check-input" type="checkbox" name="vomitos" id="vomitos">
                </div>



                <div class="col-md-12 ">
                    <h3 class="text-center">Atividade física </h3>
                    <label for="atividade_fisica">Atividad practicada</label>
                    <input class="form-control" type="text" name="atividade_fisica" id="atividade_fisica">
                    <label for="frequencia_atividade">Frecuencia : </label>
                    <input class="form-control" type="text" name="frequencia_atividade" id="frequencia_atividade" >

                    <h5>Nivel de esforço: </h5>

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="baixo" name="esforco" class="custom-control-input" value="baixo">
                    <label class="custom-control-label" for="baixo">Baixo</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="moderado" name="esforco" class="custom-control-input" value="moderado">
                    <label class="custom-control-label" for="moderado">Moderado</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="elevado" name="esforco" class="custom-control-input" value="elevadp">
                    <label class="custom-control-label" for="elevado">Elevado</label>
                </div>

                    <h5>Objetivo físico: </h5>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="manter" name="objetivo_fisico" class="custom-control-input" value="manter">
                        <label class="custom-control-label" for="manter">Manter</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="ganhar" name="objetivo_fisico" class="custom-control-input" value="ganhar">
                        <label class="custom-control-label" for="ganhar">Ganhar Massa Muscular</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="perder" name="objetivo_fisico" class="custom-control-input" value="perder">
                        <label class="custom-control-label" for="perder">Perder gordura</label>
                    </div>

                        <label class="col-md-2 ">Outro</label>
                        <input  class="form-control" type="text" class="col-md-10" name="outro_objetivo" >
                    </div>


                </div>


                <h3 class="text-center">Antecedentes médicos/psiquiátricos</h3>
                <textarea class="form-control" name="ant_med_psiq" cols="100% " rows="10 "></textarea>


                <h3 class="text-center">Antecedentes familiares</h3>
                <textarea class="form-control" name="antecedentes_familiares" cols="100% " rows="10 "></textarea>


                <h3 class="text-center">Relacionamento social/amoroso/laboral</h3>
                <textarea class="form-control" name="relacionamento_social" cols="100% " rows="10 "></textarea>


                <h3 class="text-center">Valoração estado psicológico  </h3>
                <label for="iniciar_desistir">Motivação Iniciar/desistir:</label>
                <textarea class="form-control" name="iniciar_desistir" cols="100% " rows="10"></textarea>
                <label for="concientizacao">Conscientização:</label>
                <textarea class="form-control" name="concientizacao" cols="100% " rows="10"></textarea>
                <label for="percepcao_corporal">Percepção corporal</label>
                <textarea class="form-control" name="percepcao_corporal" cols="100% " rows="10"></textarea>



                <h3 class="text-center">Histórico de dietas</h3>
                <textarea class="form-control" name="historico_dietas" cols="100% " rows="10 "></textarea>


                <h3 class="text-center">Hipótese diagnostica</h3>
                <textarea class="form-control" name="hipotese_diagnostica" cols="100% " rows="10 "></textarea>


                <h3 class="text-center">Objetivos terapêuticos</h3>
                <textarea class="form-control" name="objetivo_terapeutico" cols="100% " rows="10 "></textarea>


                <h3 class="text-center">Plano de intervenção</h3>
                <textarea class="form-control" name="plano_intervencao" cols="100% " rows="10 "></textarea>

                <h3 class="text-center">Observações</h3>
                <textarea class="form-control" name="observacoes" cols="100% " rows="10 "></textarea>

                <div class="text-center" style="margin-top: 10px">
            <button class="btn btn-lg btn-success ">Salvar</button>
        </div>
        </form>
    </div>
        </div>
    </div>
@endsection
