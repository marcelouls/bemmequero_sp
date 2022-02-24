@extends('layouts.app')


@section('content')
    <div class="container col-md-12">
        <h1>ANAMNESE NUTRICAO</h1>
        <hr>
        <form action="/nutricao/store" method="post">
            @csrf
            @method('POST')

            FICHA DE ATENDIMENTO _____/_____/_____
            <div>
                <label for="queixas_principais">Queixas principais: </label>
                <textarea name="queixas_principais" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="sinais_intomas:">Sinais/Sintomas:</label>
                <textarea name="sinais_sintomas:" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="Doenças_pregressas">Doenças pregressas e atuais: </label>
                <textarea name="Doenças_pregressas:" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="Cirurgias">Cirurgias (quais/quando): </label>
                <textarea name="Cirurgias" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="medicamentos">Medicamentos/Suplementos/Fitoterápicos (qual/indicação):</label>
                <textarea name="medicamentos" id="" cols="30" rows="10"></textarea>
            </div>


            <table>
                <thead>
                    <td></td>
                    <td>Tipo</td>
                    <td>Tempo</td>
                    <td>Frequência</td>
                    <td>Quantidade</td>
                </thead>
                <tr>
                    <td>Tabagismo</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Etilismo</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Atividade física</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Sono (qualidade/horas)</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>

            </table>

            <h3>HÁBITOS ALIMENTARES</h3>
            <div>
                <label for="quem_prepara">Quem prepara?</label> <input type="text" name="quem_prepara">
                <label for="gosta_cozinar">Gosta de cozinhar?</label> <input type="text" name="gosta_cozinar">
                <label for="fim_semana">Fim de semana?</label><input type="text" name="fim_semana">

            </div>

            <table>
                <thead>
                    <td></td>
                    <td>Local</td>
                    <td>Duração</td>
                    <td>Apetite (0-10) </td>
                    <td>Obs.:</td>
                </thead>
                <tr>
                    <td>Café da manhã</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Almoço</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Lanche da tarde</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Jantar</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Ceia</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>

            </table>



            <h3>SISTEMA DIGESTÓRIO</h3>
            <div>
                <label for="mastigacao">Mastigação:</label><input type="text" name="mastigacao">
                <label for="protese">Prótese:</label> <input type="text" name="protese">
                <label for="aparelho">Aparelho:</label><input type="text" name="aparelho">
                <label for="funcionamento_intestinal">Funcionamento Intestinal</label> <input type="text"
                    name="funcionamento_intestinal">
                <label for="gases">Gases (flatulência, azia, refluxo, outro)</label>

                <label for="frequencia"></label><input type="text" name="frequencia">
                <label for="consistencia">Consistência</label><input type="text" name="consistencia">
            </div>
            <h3>AVALIAÇÃO DO CONSUMO ALIMENTAR</h3>
            <label for="preferencias_alimentares">Preferências alimentares:</label><input type="text"
                name="preferencias_alimentares">
            <label for="aversao_alimentares">Aversões alimentares:</label><input type="text" name="aversao_alimentares">
            <label for="agua">Água (copos ou garrafas/dia):</label><input type="text" name="agua">

            <label>HISTÓRICO DE PESO:</label><textarea name="historico_peso" id="" cols="30" rows="10"></textarea>

            <h3>Ficha de Atendimento Nutricional</h3>

            <table>
                <thead>
                    QUESTIONÁRIO DE FREQUÊNCIA ALIMENTAR
                </thead>
                <thead>
                    <td>Alimentos</td>
                    <td>Tipo</td>
                    <td>Porção</td>
                    <td>Diária</td>
                    <td>Semanal</td>
                    <td>Mensal</td>
                    <td>Anual</td>
                    <td>NUnca</td>
                </thead>
                <tr>
                    <td>Pão</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td> Bolo</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Biscoitos</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Cereal/Arroz</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Massa</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Leite</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Iogurte</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Queijo</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Suco</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Chá</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Café</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Refrigerante</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Hortaliças/verduras/legumes</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Frutas</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Castanhas/ oleaginosas</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Leguminosas/feijão/lentilha</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Carne/boi</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Carne/porco</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Frango</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Peixe</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Ovo</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Embutidos</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Frituras</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Salgadinho (pacote)</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Condimento/maionese/Katchup/outros</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Fast food</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Pizza/esfiha</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Comidas prontas/congelados</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Churrasco</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Feijoada</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Restaurante / barzinho</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Bebida alcoólica</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Doce / bala / chiclete/outros</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Chocolate</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Bebida alcoólica</td>
                    <td><input type="text"> </td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>

            </table>
            <hr>
            <table>
                <thead>
                    <td>Alimento</td>
                    <td>Tipo</td>
                    <td>Quantidade/mês</td>
                </thead>
                <tr>
                    <td>Sal
                        Açúcar
                        Óleo</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Açúcar</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Óleo</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
            </table>
            <hr>






            <h3>DADOS ANTROPOMÉTRICOS</h3>
            <table>
                <tr>
                    <td>Estatura: </td>
                    <td><input type="text"></td>
                    <td>Peso Habitual:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Parâmetro</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Peso (kg):</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>IMC (Kg/m²)</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Circ. Braço (cm)</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Circ.Quadril (cm)</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Circ.Coxa (cm)</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Circ.cint (cm)</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Circ.Peit</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>DTC (mm)</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>DCAB (mm)</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>DCPEIT</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>DCAX</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>DCSE (mm)</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>DCCOX</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>DCSI (mm)</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>% gordura</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>CMB</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Massa gorda</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Densidade Corporal</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
            </table>



           <h3>DADOS BIOQUÍMICOS</h3>
           <table>
               <thead>
                   <td>Parâmetro</td>
                   <td>Referência</td>
                   <td>___/ ___/</td>
                   <td>___/ ___/</td>
                   <td>___/ ___/</td>
                   <td>___/ ___/</td>
               </thead>
               <tr>
                   <td>Glicemia (mg/dL)</td>
                   <td>≤99</td>
                   <td><input type="text"></td>
                   <td><input type="text"></td>
                   <td><input type="text"></td>
                   <td><input type="text"></td>
               </tr>
               <tr>
                <td>CT (mg/dL) </td>
                <td>&lt;200 </td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>TG (mg/dL)</td>
                <td> ≤150 </td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>HDL-c (mg/dL)</td>
                <td> 40 – 60 </td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>LDL-c (mg/dL)</td>
                <td> < 100</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td> Hemácias (milhões/mm³) </td>
                <td>4,5 – 5,5</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Hemoglobina (g/dL)</td>
                <td>> 12,5</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Hematócrito (%)</td>
                <td> 36 – 50</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td> Leocócitos totais (p/100mL)</td>
                <td>5000 – 10000</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td> Plaquetas (p/mm³)</td>
                <td> 150.000 – 400.000</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Uréia (MG/dL)</td>
                <td>10 – 50</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Albumina (g/dL)</td>
                <td> 0,6 – 1,3</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td> AST (TGO) (U/L)</td>
                <td> 3,5 – 5,0</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>ALT (TGP) (U/L) </td>
                <td>10 – 41</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>T4 total (µg/dL)</td>
                <td> 4,5 a 12.0</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>T4 livre (ng/dL)</td>
                <td> 0,8 a 2,0</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>TSH (mUl/L)</td>
                <td> 0,45 a 4,5</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>

           </table>

               <h3>Diagnóstico Nutricional:</h3>
               <textarea name="diagnostico_nutricional" id="" cols="30" rows="10"></textarea>
                <h3>Doenças/Disfunções Associadas:</h3>
               <textarea name="doencas_associadas" id="" cols="30" rows="10"></textarea>
               <h3> Solicitados os exames: </h3>
               <textarea name="solicitados_exames" id="" cols="30" rows="10"></textarea>
               <label for="data)consulta">Data da consulta</label> <input type="date">
               <label for="data_retorno">Data de retorno:</label> <input type="date">
                10/13

        </form>
    </div>
    @endsection
