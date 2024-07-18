<x-layoutAdm css="css/admin.css">
    <div class="container">
        <form action="/admin/estabelecimento/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nome do estabelecimento</label>
                <input type="text" name="nome" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">CPF/CNPJ</label>
                <input type="text" name="cpf_cnpj" class="form-control" id="formGroupExampleInput">
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
                <label for="formGroupExampleInput" class="form-label">URL</label>
                <input type="text" name="url" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Tipo de redes</label>
                <select name= "tipoRede" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option value="1">Instagram</option>
                    <option value="2">Site</option>
                    <option value="3">Facebook</option>
                    <option value="4">Twitter</option>
                </select>
            </div>
            <button type="submit">enviar</button>
        </form>
    </div>
</x-layoutAdm>