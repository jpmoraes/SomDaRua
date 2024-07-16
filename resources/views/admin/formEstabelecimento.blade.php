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
        <!-- esse campo ta oculto, precisa puxar o cpf do empresario que vc for gerar o estabelecimento -->
        <input type="text" name="cpfEmpresario" id="cpfEmpresario" value="cpf" style="display: none;">

        <label for="nome">nome</label>
        <input type="text" name="nome" id="nome" value="nome">
        <label for="cpf_cnpj">cpf_cnpj</label>
        <input type="text" name="cpf_cnpj" id="cpf_cnpj" value="cpf_cnpj">
        <label for="rua">rua</label>
        <input type="text" name="rua" id="rua" value="rua">
        <label for="bairro">bairro</label>
        <input type="text" name="bairro" id="bairro" value="bairro">
        <label for="complemento">complemento</label>
        <input type="text" name="complemento" id="complemento" value="complemento"> 
        <label for="cep">cep</label>
        <input type="text" name="cep" id="cep" value="cep">
        <label for="numero">numero</label>
        <input type="text" name="numero" id="numero" value="numero"> 
        <label for="telefone">telefone</label>
        <input type="text" name="telefone" id="telefone" value="telefone">
        <label for="url">url</label>
        <input type="text" name="url" id="url" value="url">
        <label for="tipoRede">tipoRede</label>
        <input type="text" name="tipoRede" id="tipoRede" value="1">

        <button type="submit">enviar</button>
    </form>
</body>
</html>