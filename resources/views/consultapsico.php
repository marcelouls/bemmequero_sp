<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bemmequero</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
    body {
        padding: auto;
        background-color: lightgray;
    }

    input[type=text] {
        width: 100%;
        border-color: cornflowerblue;
        border-radius: 5px;
    }

    input[type=checkbox] {
        background-color: brown;
        height: 18px;
        width: 18px;
    }

    input[type=radio] {
        height: 20px;
        width: 20px;
    }

    textarea {
        border-color: cornflowerblue;
        border-radius: 5px;
        height: 100px;
    }

    h1,
    h2,
    h3,
    h6 {
        text-align: center;
        color: rgb(120, 95, 143);
    }

    label {
        display: inline-block;
    }

    button {
        margin-top: 15px;
        margin-left: 45%;
    }
</style>

<body>
    <div class="container">
        <h1>ANAMNESE PSICOLOGIA</h1>
        <hr>
        <form action="/psicologia/consulta" method="post">
            @csrf
            @method('POST')

            <label>CPF</label>
            <input type="number" name="cpf" id="cpf">

            <hr>

            <div class="row col-md-12">


                <h3>Dados pessoais:</h3>


            </div>
            <div class="row col-md-12">
                <div class="col-md-4">
                    <label>Nome : </label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-group">
                </div>
            </div>

            <div class=" row col-md-12 ">
                <div class="col-md-1 ">
                    <label>Idade :</label>
                </div>
                <div class="col-md-3 ">
                    <input type="text" class="form-group ">
                </div>
                <div class="col-md-1 ">
                    <label>G??nero:</label>
                </div>
                <div class="col-md-3 ">
                    <input type="text" class="form-group ">
                </div>
                <div class="col-md-1 ">
                    <label>Profiss??o:</label>
                </div>
                <div class="col-md-3 ">
                    <input type="text" class="form-group ">
                </div>
            </div>
            <div class="row ">
                <h3>Motivo de consulta</h3>
                <textarea name="motivo_consulta" cols="100% " rows="10"></textarea>
            </div>
            <div class="row ">
                <h3>Hist??ria do MC</h3>
                <textarea name="historia_mc" cols="100% " rows="10"></textarea>
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
                    <label class="container ">Acordar pela manh?? antes do tempo desejado e n??o continuar o sono.
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
                    <label class="container ">Frequ??ncia de pesadelos ou terrores noturnos.
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

                <h3>Alimenta????o :</h3>

                <div>
                    <label>Adequada   </label><input type="radio" name="tipo_alimentacao" id="adequada " value="1 ">
                    <label>Come bem   </label><input type="radio" name="tipo_alimentacao" id="come_bem " value="2 ">
                    <label>Come mal   </label><input type="radio" name="tipo_alimentacao" id="come_mal " value="3 ">
                </div>

                <div class="row col-md-12 ">
                    <label class="col-md-2 ">Outro </label>
                    <input type="text" class="col-md-10" name="outro_tipo_alimentacao" value="1">
                </div>
                <hr>
                <label>Epis??dios de descontrole alimentar:
                    <input type="radio" name="descontrole_alimentar" value="1 "><label>Sim</label>
                <input type="radio" name="descontrole_alimentar" value="2 "><label>N??o</label>
                </label>
                <div>
                    <label>Ingesta v??ria em situa????es de tristeza, nervosismo, estresse ou ansiedade: </label>
                    <input type="checkbox" name="ingesta_variavel" id="ingesta" value="1 "><br>
                </div>


                <div>
                    <label>Usou medicamentos para baixar de peso: </label>
                    <input type="checkbox" name="medicamentos" id="ingesta " value="1 ">
                </div>
                <div>
                    <label>V??mitos autoinduzidos:</label>
                    <input type="checkbox" name="vomitos" id="ingesta " value="1 ">
                </div>

            </div>

            <div class="col-md-6 ">
                <br>

            </div>
            <div class="row col-md-12 " style="border: 1px solid black ">
                <div class="col-md-12 ">
                    <h3>Atividade f??sica :</h3>
                    <label>Atividad practicada</label>
                    <input type="text" name="atividade_fisica" value="1">
                    <label>Frecuencia : </label>
                    <input type="text" name="frequencia_atividade" value="1">

                    <h5>Nivel de esfor??o: </h5>


                    <label>baixo   </label><input type="radio" name="esforco" id="baixo " value="1 ">
                    <label>Moderado   </label><input type="radio" name="esforco" id="moderado " value="2 ">
                    <label>Elevado   </label><input type="radio" name="esforco" id="moderado " value="3 ">

                    <hr>

                    <h5>Objetivo f??sico: </h5>
                    <label>Manter</label><input type="radio" name="objetivo_fisico" id="manter " value="1 ">
                    <label>Ganhar massa muscular</label><input type="radio" name="objetivo_fisico" id="ganhar " value="2 ">
                    <label>Perder gordura</label><input type="radio" name="objetivo_fisico" id="perder " value="3 "><br>
                    <div class="row col-md-12 ">
                        <label class="col-md-2 ">Outro</label>
                        <input type="text" class="col-md-10" name="outro_objetivo" value="1">
                    </div>


                </div>
            </div>
            <div class="row ">
                <h3>Antecedentes pessoais, familiares e sociais</h3>
                <textarea name="antecedentes_pessoais" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Valora????o do estado psicol??gico</h3>
                <textarea name="valoracao_estado" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Hip??teses diagnostica</h3>
                <textarea name="hipotese" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Objetivos terap??uticos</h3>
                <textarea name="objetivo_terapeutico" cols="100% " rows="10 "></textarea>
            </div>
            <div class="row ">
                <h3>Plano de interven????o</h3>
                <textarea name="plano_intervencao" cols="100% " rows="10 "></textarea>
            </div>

            <button class="btn btn-lg btn-success ">Salvar</button>
        </form>
    </div>
</body>

</html>
