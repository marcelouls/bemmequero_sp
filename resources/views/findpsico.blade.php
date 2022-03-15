@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
        <h1>ANAMNESE PSICOLOGIA</h1>
        <hr>
        <form action="/psicologia/store" method="post">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-md-3">
                    <label for="cpf">C.P.F</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="cpf">
                </div>
            </div>

            <div class="row ">
                <h3>Motivo de consulta</h3>
                <p>{{"motivo_consulta"}}</p>
            </div>
            <div class="row ">
                <h3>Evolução da queixa  </h3>
                <label for="inicio_queixa">Inicio da queixa</label>
                <textarea name="inicio_queixa" cols="100% " rows="10"></textarea>
                <label for="mudanca_queixa">Mudança da queixa</label>
                <textarea name="mudanca_queixa" cols="100% " rows="10"></textarea>
                <label for="sintomas_queixa">Sintomas</label>
                <textarea name="sintomas_queixa" cols="100% " rows="10"></textarea>

            </div>

            <div class="row col-md-12" style=" border: 1px solid black;">
                <h3>Sono</h3>
                <div>
                    <label>Adequado   </label><input type="radio" name="tipo_sono" id="adequado" value="1 ">
                    <label>Tranquilo   </label><input type="radio" name="tipo_sono" id="tranquilo" value="2 ">
                    <label>Inquieto   </label><input type="radio" name="tipo_sono" id="Inquieto" value="3 ">
                </div>
                <div class="row " class="col-md-12 ">
                    <label class="col-md-2 ">Horas dormidas :
                        <input  type="text" class="col=md-10" name="horas_sono" style="width: 40px; ">
                    </label>
                </div>
                <h3>Dificultades para dormir :</h3>
                <div class="col-md-6 ">

                    <label class="container ">Dificuldade para iniciar o sono.
                            <input type="checkbox" name="dif_inicio" value="1">
                            <span class="checkmark"></span>
                          </label>
                    <label class="container ">Acorda durante a noite.
                            <input type="checkbox" name="acorda_noite" value="1">
                            <span class="checkmark"></span>
                          </label>
                    <label class="container ">Acordar pela manhã antes do tempo desejado e não continuar o sono.
                            <input type="checkbox" name="acorda_manha" value="1">
                            <span class="checkmark "></span>
                          </label>
                </div>
                <div class="col-md-6 ">
                    <br>
                    <label class="container ">Excesso de sono.
                                <input type="checkbox" name="exceso_sono" value="1">
                                <span class="checkmark "></span>
                              </label>
                    <label class="container ">Frequência de pesadelos ou terrores noturnos.
                                <input type="checkbox" name="pesadelos" value="1">
                                <span class="checkmark "></span>
                              </label>
                    <label class="container ">Caminha ou conversa enquanto dorme.
                                <input type="checkbox" name="camina"value="1">
                                <span class="checkmark "></span>
                              </label>
                </div>
            </div>

            <div class="row col-md-12 " style="border: 1px solid black ">

                <h3>Alimentação :</h3>

                <div>
                    <label>Adequada   </label><input type="radio" name="tipo_alimentacao" id="adequada " value="1 ">
                    <label>Come bem   </label><input type="radio" name="tipo_alimentacao" id="come_bem " value="2 ">
                    <label>Come mal   </label><input type="radio" name="tipo_alimentacao" id="come_mal " value="3 ">
                </div>

                <div class="row col-md-12 ">
                    <label class="col-md-2 ">Outro </label>
                    <input type="text" class="col-md-10" name="outro_tipo_alimentacao" >
                </div>
                <hr>
                <label>Episódios de descontrole alimentar:
                    <input type="radio" name="descontrole_alimentar" value="1 "><label>Sim</label>
                <input type="radio" name="descontrole_alimentar" value="2 "><label>Não</label>
                </label>
                <div>
                    <label>Ingesta vária em situações de tristeza, nervosismo, estresse ou ansiedade: </label>
                    <input type="checkbox" name="ingesta_variavel" id="ingesta" value="1 "><br>
                </div>


                <div>
                    <label>Usou medicamentos para baixar de peso: </label>
                    <input type="checkbox" name="medicamentos" id="ingesta " value="1 ">
                </div>
                <div>
                    <label>Vómitos autoinduzidos:</label>
                    <input type="checkbox" name="vomitos" id="ingesta " value="1 ">
                </div>

            </div>

            <div class="col-md-6 ">
                <br>

            </div>
            <div class="row col-md-12 " style="border: 1px solid black ">
                <div class="col-md-12 ">
                    <h3>Atividade física :</h3>
                    <label>Atividad practicada</label>
                    <input type="text" name="atividade_fisica" >
                    <label>Frecuencia : </label>
                    <input type="text" name="frequencia_atividade" >

                    <h5>Nivel de esforço: </h5>


                    <label>baixo   </label><input type="radio" name="esforco" id="baixo " value="1 ">
                    <label>Moderado   </label><input type="radio" name="esforco" id="moderado " value="2 ">
                    <label>Elevado   </label><input type="radio" name="esforco" id="moderado " value="3 ">

                    <hr>

                    <h5>Objetivo físico: </h5>
                    <label>Manter</label><input type="radio" name="objetivo_fisico" id="manter " value="1 ">
                    <label>Ganhar massa muscular</label><input type="radio" name="objetivo_fisico" id="ganhar " value="2 ">
                    <label>Perder gordura</label><input type="radio" name="objetivo_fisico" id="perder " value="3 "><br>
                    <div class="row col-md-12 ">
                        <label class="col-md-2 ">Outro</label>
                        <input type="text" class="col-md-10" name="outro_objetivo" >
                    </div>


                </div>
            </div>
            <div class="row ">
                <h3>Antecedentes médicos/psiquiátricos</h3>
                <textarea name="ant_med_psiq" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Antecedentes familiares</h3>
                <textarea name="antecedentes_familiares" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Relacionamento social/amoroso/laboral</h3>
                <textarea name="relacionamento_social" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Valoração estado psicológico  </h3>
                <label for="iniciar_desistir">Motivação Iniciar/desistir:</label>
                <textarea name="iniciar_desistir" cols="100% " rows="10"></textarea>
                <label for="concientizacao">Conscientização:</label>
                <textarea name="concientizacao" cols="100% " rows="10"></textarea>
                <label for="percepcao_corporal">Percepção corporal</label>
                <textarea name="percepcao_corporal" cols="100% " rows="10"></textarea>

            </div>
            <div class="row ">
                <h3>Histórico de dietas</h3>
                <textarea name="historico_dietas" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Hipótese diagnostica</h3>
                <textarea name="hipotese_diagnostica" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Objetivos terapêuticos</h3>
                <textarea name="objetivo_terapeutico" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Plano de intervenção</h3>
                <textarea name="plano_intervencao" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Observações</h3>
                <textarea name="observacoes" cols="100% " rows="10 "></textarea>
            </div>

            <button class="btn btn-lg btn-success ">Salvar</button>
        </form>
    </div>
        </div>
    </div>
@endsection
