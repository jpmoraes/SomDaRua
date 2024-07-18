<x-layoutAdm css="css/admin.css">

    <div class="container">

        <div class="paineladm home">
            <p>Meus Dados</p>
        </div>
        @foreach($empresarioArray as $empresario)
            <form action="/admin/update" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">CPF</label>
                    <input type="text" name="novo_cpf" class="form-control" id="formGroupExampleInput" value="{{$empresario['cpf']}}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nome</label>
                    <input type="text" name="novo_nome" class="form-control" id="formGroupExampleInput" value="{{$empresario['nome']}}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Rua</label>
                    <input type="text" name="novo_rua" class="form-control" id="formGroupExampleInput" value="{{$empresario['rua']}}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Bairro</label>
                    <input type="text" name="novo_bairro" class="form-control" id="formGroupExampleInput" value="{{$empresario['bairro']}}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Complemento</label>
                    <input type="text" name="novo_complemento" class="form-control" id="formGroupExampleInput" value="{{$empresario['complemento']}}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">CEP</label>
                    <input type="text" name="novo_cep" class="form-control" id="formGroupExampleInput" value="{{$empresario['cep']}}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Número</label>
                    <input type="text" name="novo_numero" class="form-control" id="formGroupExampleInput" value="{{$empresario['numero']}}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Telefone</label>
                    <input type="text" name="novo_telefone" class="form-control" id="formGroupExampleInput" value="{{$empresario['telefone']}}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                    <input type="text" name="novo_email" class="form-control" id="formGroupExampleInput" value="{{$empresario['email']}}">
                </div>

                <button type="submit">Atualizar</button>

            </form>
        @endforeach
    </div>
</x-layoutAdm>