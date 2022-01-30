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
    input[type=email] {
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

    <h1>Registro Paciente</h1>
    <hr>

    <form action="/paciente/store" method="post">
        @csrf
        @method('POST')
    <div>
        <label>C.P.F.</label>
        <input type="text" name="cpf" id="cpf">
    </div>
    <div>
    <label>Nome Completo: </label>
    <input type="text" name="nome_paciente">
    </div>
    <div>
        <label for="fone">Fone : </label>
        <input type="text" name="fone" id="fone">
     </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo">
    </div>
    <div>
        <label for="estado_civil">Estado Civil</label>
        <input type="text" name="estado_civil">
    </div>
    <div>
        <label for="data_nasc">Data Nascimento</label>
        <input type="date" name="data_nasc">
    </div>
    <div>
        <label for="escolaridade">Escolaridade</label>
        <input type="text" name="escolaridade">
    </div>
    <div>
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco">
    </div>
    <div>
        <label for="ocupacao_principal">Ocupacao_principal</label>
        <input type="text" name="ocupacao_principal">
    </div>
    <button type="submit" class="btn btn-lg btn-success">Salvar</button>
</form>


</body>
</html>
