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
        <label for="cpf">cpf</label>
        <input type="text" name="cpf" id="cpf">
        <label for="nome">nome</label>
        <input type="text" name="nome" id="nome">
        <label for="rua">rua</label>
        <input type="text" name="rua" id="rua">
        <label for="bairro">bairro</label>
        <input type="text" name="bairro" id="bairro">
        <label for="complemento">complemento</label>
        <input type="text" name="complemento" id="complemento">
        <label for="cep">cep</label>
        <input type="text" name="cep" id="cep">
        <label for="numero">numero</label>
        <input type="text" name="numero" id="numero">
        <label for="telefone">telefone</label>
        <input type="text" name="telefone" id="telefone">
        <label for="url">url</label>
        <input type="text" name="url" id="url">
        <label for="email">email</label>
        <input type="text" name="email" id="email">
        <button type="submit">enviar</button>

    </form>

</body>
</html>