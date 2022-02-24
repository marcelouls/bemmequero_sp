@extends('layouts.app')

@section('content')
    <div class="container col-md-12">
        <form action="" method="post">
            <h1>ANAMNESE FISIOTERAPÊUTICA</h1>

            <h6> Queixa principal: </h6>
            <textarea name="queixa_principal" id="" cols="30" rows="10"></textarea>
            <h6> Diagnóstico médico: </h6>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <h6> HMA/HMP: </h6>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <h6> Antecedentes pessoais:</h6>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <h6>Antecedentes familiares:</h6>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <h6>Tratamentos realizados:</h6>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <h6>Restrição de AVD’s:</h6>
            <textarea name="" id="" cols="30" rows="10"></textarea>

            <h3> SINAIS VITAIS </h3>
            <div>
                <label>FC: </label><input type="text" name="fc" id="fc" style="width: 40px;">
                <label>FR: </label><input type="text" name="fr" id="fr" style="width: 40px;">
                <label>A:  </label><input type="text" name="a" id="a" style="width: 40px;">
                <label>SPO2: </label> <input type="text" name="spo2" id="spo2" style="width: 40px;">
            </div>
            <hr>
            <h3> EXAMES COMPLEMENTARES </h3>
            <div>
                <input type="radio" name="sim" id="sim"><label>Sim</label>
                <input type="radio" name="nao" id="nao"><label>Não</label>
            </div>
            <div>
                <label>Nome: </label><input type="text">
                <label>Data :</label><input type="date" name="data"><br>
                <label> Obs: </label><textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <hr>
            <h3> MOBILIDADE ARTICULAR</h3>

            <table class="tabla">
                <tr>
                    <td>Articulação</td>
                    <td>Flexão</td>
                    <td>Extensão</td>
                    <td>Rot. Intern.</td>
                    <td>Rot. Ext.</td>
                    <td>Abdu.</td>
                    <td>Adu.</td>
                </tr>
                <tr>
                    <td>Ombro</td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                </tr>
                <tr>
                    <td>Cotovelo</td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                </tr>
                <tr>
                    <td>Punho</td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>


                </tr>
                <tr>
                    <td>Quadril</td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>

                </tr>
                <tr>
                    <td>Joelho</td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>

                </tr>
                <tr>
                    <td>Tornozelo</td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>
                    <td>D</label><input type="text"><br><label>E</label><input type="text"></td>

                </tr>

            </table>

            <label> Pronação/Supinação  :</label><label>D:</label><input type="text" style="width: 30px;"><label>E:</label><input type="text" style="width: 30px;"><br>
            <label> Desvio ulnar/radial :</label><label>D:</label><input type="text" style="width: 30px;"><label>E:</label><input type="text" style="width: 30px;"><br>
            <label> Inversão/Eversão    :</label><label>D:</label><input type="text" style="width: 30px;"><label>E:</label><input type="text" style="width: 30px;">
            <hr>
            <h3>FORÇA MUSCULAR</h3>
            <table>
                <tr>
                    <td>Grupo Muscular</td>
                    <td>Ação</td>
                    <td>Grau de força <br>(Escala de Kendall)
                    </td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>

            </table>

            <h3> MOBILIDADE DA COLUNA VERTEBRAL</h3>
            <label>Flexão: </label> <input type="text"><br>
            <label>Extensão: </label><input type="text"><br>
            <label> Inclinação Lateral Direita: </label><input type="text"><br>
            <label> Inclinação Lateral Esquerda: </label><input type="text">
            <hr>

            <h3>TESTES ESPECIAIS (caso haja patologia)</h3>

            <table>
                <tr>
                    <td>Teste</td>
                    <td>Estrutura Avaliada</td>
                    <td>Resultado (+/-)</td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
                </tr>
            </table>

            <hr>
            <h3>ANÁLISE DA MARCHA</h3>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <hr>
            <h3>INFORMAÇÕES GERAIS</h3>

            <div>
                <label>1. É fumante? </label>
                <label>Sim</label>
                <input type="radio" name="fuma" id="simfuma">
                <label>Sim</label>
                <input type="radio" name="fuma" id="naofuma">
                <label>Se sim, quantas vezes ao dia?</label>
                <input type="text" name="qfuma" style="width: 30px;">
            </div>
            <div>
                <label>2. Possui distúrbios circulatórios?</label>
                <label>Sim</label>
                <input type="radio" name="disturbio">
                <label>Sim</label>
                <input type="radio" name="disturbio">
                <div>
                    <label>Se sim, quais?</label>
                    <input type="text" name="distubio">
                </div>
            </div>
            <div>
                <label>3. Pratica atividade física? </label>
                <label>Sim</label>
                <input type="radio" name="fuma" id="simfuma">
                <label>Sim</label>
                <input type="radio" name="fuma" id="naofuma">
                <label>Se sim, quantas x por semana?</label>
                <input type="text" name="qfuma" style="width: 30px;">
            </div>
            <div>
                <label>4. Ciclo menstrual regular?</label>
                <label>Sim</label>
                <input type="radio" name="disturbio">
                <label>Sim</label>
                <input type="radio" name="disturbio">
                <div>
                    <label>Se não, como é? </label>
                    <input type="text" name="distubio">
                </div>
            </div>
            <div>
                <label>5. Funcionamento intestinal regular?</label>
                <label>Sim</label>
                <input type="radio" name="disturbio">
                <label>Sim</label>
                <input type="radio" name="disturbio">
                <div>
                    <label>Se não, como é? Prisão de ventre nas últimas 2 semanas. </label>
                    <input type="text" name="distubio">
                </div>
            </div>
            <div>
                <label>6. Diabetes?</label>
                <label>Sim</label>
                <input type="radio" name="disturbio">
                <label>Sim</label>
                <input type="radio" name="disturbio">
                <div>
                    <label>Se sim, qual tipo? Controlada? </label>
                    <input type="text" name="distubio">
                </div>
            </div>
            <div>
                <label>7. Alterações cardíacas?</label>
                <label>Sim</label>
                <input type="radio" name="cardio">
                <label>Sim</label>
                <input type="radio" name="cardio">
                <div>
                    <label>não Se sim, qual? </label>
                    <input type="text" name="cardio">
                </div>
            </div>
            <div>
                <label>8. Distúrbio hormonal? </label>
                <label>Sim</label>
                <input type="radio" name="intestino">
                <label>Sim</label>
                <input type="radio" name="intestino">
                <div>
                    <label>não Se sim, qual? </label>
                    <input type="text" name="intestino">
                </div>
            </div>
            <div>
                <label>9. Portador de marcapasso?  </label>
                <label>Sim</label>
                <input type="radio" name="marcapasos" id="simfuma">
                <label>Sim</label>
                <input type="radio" name="marcapasos" id="naofuma">
                <label>Se sim, quanto tempo? </label>
                <input type="text" name="marcapasos" style="width: 30px;">
            </div>
            <div>
                <label>10. Varizes, tromboses ou lesão? </label>
                <label>Sim</label>
                <input type="radio" name="varizes">
                <label>Sim</label>
                <input type="radio" name="varizes">
                <div>
                    <label>Se sim, onde? </label>
                    <input type="text" name="varizes">
                </div>
            </div>
            <div>
                <label>11. Gestante?   </label>
                <label>Sim</label>
                <input type="radio" name="marcapasos" id="simfuma">
                <label>Sim</label>
                <input type="radio" name="marcapasos" id="naofuma">
                <label>Se sim, quantas semanas? </label>
                <input type="text" name="marcapasos" style="width: 30px;">
            </div>
            <div>
                <label>12. Está em tratamento médico? </label>
                <label>Sim</label>
                <input type="radio" name="varizes">
                <label>Sim</label>
                <input type="radio" name="varizes">
                <div>
                    <label>Se sim, qual? </label>
                    <input type="text" name="varizes">
                </div>
            </div>
            <div>
                <label>13. Algum tipo de alergia? </label>
                <label>Sim</label>
                <input type="radio" name="varizes">
                <label>Sim</label>
                <input type="radio" name="varizes">
                <div>
                    <label>Se sim, qual? </label>
                    <input type="text" name="varizes">
                </div>
            </div>
            <div>
                <label>14. Cirurgia recente? </label>
                <label>Sim</label>
                <input type="radio" name="varizes">
                <label>Sim</label>
                <input type="radio" name="varizes">
                <div>
                    <label>Se sim, qual? </label>
                    <input type="text" name="varizes">
                </div>
            </div>
            <div>
                <label>15. Tumor ou lesão pré-cancerígena? </label>
                <label>Sim</label>
                <input type="radio" name="varizes">
                <label>Sim</label>
                <input type="radio" name="varizes">
                <div>
                    <label>Se sim, qual? </label>
                    <input type="text" name="varizes">
                </div>
            </div>
            <div>
                <label>16. Problemas de pele?</label>
                <label>Sim</label>
                <input type="radio" name="varizes">
                <label>Sim</label>
                <input type="radio" name="varizes">
                <div>
                    <label>Se sim, qual? </label>
                    <input type="text" name="varizes">
                </div>
            </div>
            <div>
                <label>17. Problemas ortopédicos? </label>
                <label>Sim</label>
                <input type="radio" name="varizes">
                <label>Sim</label>
                <input type="radio" name="varizes">
                <div>
                    <label>Se sim, qual? </label>
                    <input type="text" name="varizes">
                </div>
            </div>
            <div>
                <label>18. Possui prótese?  </label>
                <label>Sim</label>
                <input type="radio" name="varizes">
                <label>Sim</label>
                <input type="radio" name="varizes">
                <div>
                    <label>Se sim, onde? </label>
                    <input type="text" name="varizes">
                </div>
            </div>
            <div>
                <label>Deseja declarar alguma informação que não foi coletada durante a anamnese? </label>
                <input type="text" name="varizes">
            </div><br>

            <label> DATA: </label> <input type="date" name="" id="">
            <hr>
            <button class="btn btn-lg btn-success ">Salvar</button>

        </form>
    </div>
@endsection
