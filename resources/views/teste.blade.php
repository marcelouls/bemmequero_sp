<!DOCTYPE html>
<head></head>
<body>


<form action="/teste/store" method="post">
    @csrf
    @method('POST')
<div>
    <label>Nome</label>
    <input type="text" name="nome">
</div>
<div>
    <label>Sobrenome</label>
    <input type="text" name="sobrenome">
</div>
<div>
    <label>sexo</label>
    <input type="text" name="sexo">
</div>

<button type="submit">Salvar</button>
</form>


</body>
