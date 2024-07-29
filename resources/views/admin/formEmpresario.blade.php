<x-layoutAdm css="css/admin.css">

    <div class="container">

        <div class="paineladm home">
            <p>Meus Dados</p>
        </div>

        <form action="/admin/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">CPF</label>
                <input type="text" name="cpf" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Rua</label>
                <input type="text" name="rua" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Bairro</label>
                <input type="text" name="bairro" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Complemento</label>
                <input type="text" name="complemento" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">CEP</label>
                <input type="text" name="cep" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Número</label>
                <input type="text" name="numero" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="formGroupExampleInput">
            </div>

            <button type="submit">Salvar</button>

        </form>
    </div>
</x-layoutAdm>