<x-layoutAdm css="css/admin.css">

    <div class="container">

        <div class="topoPage">
            <h1>ESTABELECIMENTOS</h1>
            <div class="col text-end" class="adicionar">
                <button class="btn btn-dark" onclick="window.location='{{route('estabelecimento.create')}}'"> + </button>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome do Estabeleciomento</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Rede Social</th>
                    <th scope="col">URL</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($estabelecimentoArray as $estabelecimento)
                    <tr>
                        <th scope="row">{{$estabelecimento['id_estabelecimento']}}</th>
                        <td>{{$estabelecimento['nome']}}</td>
                        <td>{{$estabelecimento['endereco']}}</td>
                        <td>{{$estabelecimento['tipo']}}</td>
                        <td>{{$estabelecimento['url']}}</td>
                        <td>
                            <form action="{{route('estabelecimento.delete', $estabelecimento['id_estabelecimento'])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-default btn-lg" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{$estabelecimento['id_estabelecimento']}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4H1.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-3.5zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                        <td>
                            <button type="button" class="btn btn-default btn-lg" data-bs-toggle="modal"
                                data-bs-target="#myModal{{$estabelecimento['id_estabelecimento']}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 1.466a.25,25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="myModal{{$estabelecimento['id_estabelecimento']}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel{{$estabelecimento['id_estabelecimento']}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel{{$estabelecimento['id_estabelecimento']}}">Atualizar Nome</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Fechar"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('estabelecimento.update', $estabelecimento['id_estabelecimento']) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
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

                                        <button type="submit" class="btn btn-primary">Atualizar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach
            </tbody>
        </table>
    </div>

</x-layoutAdm>