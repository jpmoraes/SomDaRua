<x-layoutAdm css="css/usuariocad.css">

    <div class="paineladm home">
        <h1>Meus Dados</h1><br><br>
        <div class="form-container" method="POST" action="/admin/store">
            @csrf
            <div class="input-group2">
                <input style="margin-left: 10px;" type="text" class="usuario" placeholder="Nome" name="nome">
                <input style="margin-left: 10px;" type="text" class="usuario" placeholder="CPF/CNPJ" name="cpf">
            </div>
            <div class="input-group2">
                <input style="margin-left: 10px;" type="text" class="usuario" placeholder="Rua" name="rua">
                <input style="margin-left: 10px;" type="text" class="usuario" placeholder="Nº" name="numero">
            </div>
            <div class="input-group2">
                <input style="margin-left: 10px;" type="text" class="usuario" placeholder="Complemento" name="complemento">
                <input style="margin-left: 10px;" type="text" class="usuario" placeholder="Bairro" name="bairro">
            </div>
            <div class="input-group2">
                <input style="margin-left: 10px;" type="text" class="usuario" placeholder="CEP" name="cep">
                <input style="margin-left: 10px;" type="text" class="usuario" placeholder="Telefone" name="telefone">
            </div>
            <div class="input-group2">
                <input style="margin-left: 10px;" type="text" class="usuario" placeholder="url" name="url">
                <input style="margin-left: 10px;" type="text" class="usuario" placeholder="E-Mail" name="email">
            </div>
            <div class="botaodiv">
                <button class="btnpronto" type="submit">Pronto</button>
            </div>
        </div>
    </div>
</x-layoutAdm>