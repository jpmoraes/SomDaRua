<x-layoutAdm css="css/admin.css">


        <div class="paineladm home">
            <p>Meus Dados</p>
    
            <section style="background-color: #055BA6;">
                <div class="container py-5">
                    <form class="card mb-4" method="post" action="">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nome</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0 nome">Nome Sobrenome</p>
                                    <div class="nome-forms">
                                        <label for="rua">Nome</label>
                                        <input type="text" name="nome" id="inome">
                                        <label for="rua">Sobrenome</label>
                                        <input type="text" name="sobrenome" id="isobrenome">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0 email">email@email.com</p>
                                    <input type="email" name="email" id="iemail">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">CPF/CNPJ</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0 cpf">000.000.000-00</p>
                                    <input type="text" name="telefone" id="icpf">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Telefone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0 telefone">71 90000-0000</p>
                                    <input type="text" name="telefone" id="itelefone">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Endereço</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0 endereco">Rua, Número, Bairro, Complemento</p>
                                    <div class="endereco-forms">
                                        <label for="rua">Rua</label>
                                        <input type="text" name="rua" id="irua">
                                        <label for="rua">Número</label>
                                        <input type="text" name="numero" id="inumero">
                                        <label for="rua">Bairro</label>
                                        <input type="text" name="bairro" id="ibairro">
                                        <label for="rua">Complemento</label>
                                        <input type="text" name="complemento" id="icomplemento">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-end mb-2" style="margin-right: 20px;">
                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-outline-dark btn-edit" onclick="edit()">Editar dados</button>
                                <button type="submit" class="btn btn-outline-dark btn-send">Enviar</button>
                                <button type="button" class="btn btn-outline-danger btn-cancel"
                                    style="margin-left: 10px;" onclick="window.location.reload();">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
       
</x-layoutAdm>