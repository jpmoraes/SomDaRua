<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <!-- valor do estabelecimento_id -->
        <input type="text" name="estabelecimento_id" id="estabelecimento_id" style="display: none;" value="1"> 
        <label for="nome">nome</label>
        <input type="text" name="nome" id="nome" value="nome">
        <label for="data">data</label>
        <input type="text" name="data" id="data" value="data">
        <label for="hora">hora</label>
        <input type="text" name="hora" id="hora" value="hora">
        <label for="valor_couvert">valor_couvert</label>
        <input type="text" name="valor_couvert" id="valor_couvert" value="45">
        <label for="descricao">descricao</label>
        <input type="text" name="descricao" id="descricao" value="descricao">
        <label for="genero_id">genero_id</label>
        <input type="text" name="genero_id" id="genero_id" value="1">
        <label for="atracao">atracao</label>
        <input type="text" name="atracao" id="atracao" value="atracao">

        <button type="submit">enviar</button>
    </form>
</body>
</html>