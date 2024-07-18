<div class="card" style="width: 18rem;" id="icardEvento">
    <div class="card-body" id="icardBody">
        <h5 class="card-title" id="icardTitle">{{$nome}}</h5>
    </div>
    <ul class="list-group list-group-flush" id="icardul">
        <li class="list-group-item" id="icardli">{{$data}}</li>
        <li class="list-group-item" id="icardli">{{$genero}}</li>
        <li class="list-group-item" id="icardli">{{$hora}}</li>
    </ul>

    <div class="position-absolute bottom-0 end-0 m-1">
            <button class="btn btn-secondary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#iupdateModal{{$idEvento}}">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-gear"
                viewBox="0 0 16 16">
                <path
                  d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                <path
                  d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
              </svg>
            </button>

            <div class="modal fade" id="iupdateModal{{$idEvento}}" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="iupdateModalLabel">Atualizar Aluno</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="updateForm" method="post" action="{{route('evento.update', $idEvento)}}">
                                @csrf
                                @method('PUT')
                                <input type="text" name="estabelecimento_id" id="estabelecimento_id" style="display: none;" value="1">
                                <div class="form-group">
                                    <label for="eventName">Nome do evento</label>
                                    <input type="text" id="eventName" name="nome" required>
                                </div>
                                <div class="form-group">
                                    <label class="socialMedia" for="socialMedia">Banda ou Cantor / Gênero musical</label>
                                    <div id="socialMediaContainer">
                                    <div class="input-group" id="socialMedia1"
                                        style="display: flex; flex-direction: row; align-items: right;">
                                        <input type="text" aria-label="First name" class="form-control" style="flex: 1; margin-right:5px;" name="atracao">
                                        <button type="button" onclick="addNewField()" class="butaoform"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus"
                                            viewBox="0 0 16 16">
                                            <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg></button>

                                    </div>

                                    </div>
                                </div>
                                <input type="file" id="eventImage" name="eventImage" style="display: none;">
                                <div class="form-group">
                                    <label for="eventDate">Data e Horário do evento</label>
                                    <div class="datetime-container">
                                    <input type="date" id="eventDate" name="data" required>
                                    <input type="time" id="eventTime" name="hora" required style="text-align: center;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="eventDescription">Descrição do Evento</label>
                                    <textarea id="eventDescription" style="resize: vertical" name="descricao" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="generoMusicalSelect">Selecione o gênero musical do evento</label>
                                    <select id="generoMusicalSelect" name="genero_id" required>
                                    <option value="" disabled selected hidden></option>
                                    <option value="1">Samba</option>
                                    <option value="2">Forró/sertanejo</option>
                                    <option value="3">Jazz/Blues</option>
                                    <option value="4">Hip hop/Rap</option>
                                    <option value="5">Pop Rock/Rock/Metal</option>
                                    <option value="6">Axé/Pagode Baiano</option>
                                    <option value="7">Classico</option>
                                    <option value="8">Eletronico</option>
                                    <option value="9">MPB</option>
                                    </select>
                                </div>
                                <div class="radio-group">
                                    Terá Couvert?
                                    <label><input class="caixa" type="radio" name="couvert" value="SIM" onclick="showInput()"> SIM </label>
                                    <label><input class="caixa" type="radio" name="couvert" value="NÃO" onclick="hideInput()"> NÃO </label>
                                </div>
                                <input type="text" id="valor" style="display: none;" placeholder="Digite o valor">
                                <div id="soundInput" style="display: none;">
                                    <label for="soundDetails"> Adicione o valor do couvert a ser pago </label>
                                    <input type="text" id="soundDetails" name="valor_couvert" value="0">
                                </div>
                                <button type="submit">Enviar</button>
                            </div>                            
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-secondary btn-sm me-1" onclick="window.location='{{ route('qrcode', $idEvento) }}'">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-qr-code"
                viewBox="0 0 16 16">
                <path d="M2 2h2v2H2z" />
                <path d="M6 0v6H0V0zM5 1H1v4h4zM4 12H2v2h2z" />
                <path d="M6 10v6H0v-6zm-5 1v4h4v-4zm11-9h2v2h-2z" />
                <path
                  d="M10 0v6h6V0zm5 1v4h-4V1zM8 1V0h1v2H8v2H7V1zm0 5V4h1v2zM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8zm0 0v1H2V8H1v1H0V7h3v1zm10 1h-1V7h1zm-1 0h-1v2h2v-1h-1zm-4 0h2v1h-1v1h-1zm2 3v-1h-1v1h-1v1H9v1h3v-2zm0 0h3v1h-2v1h-1zm-4-1v1h1v-2H7v1z" />
                <path d="M7 12h1v3h4v1H7zm9 2v2h-3v-1h2v-1z" />
              </svg>
            </button>

            <form action="{{route('evento.delete', $idEvento)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-secondary btn-sm delete-card-btn me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-x-lg"
                        viewBox="0 0 16 16">
                        <path
                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg>
                </button>
            </form>
            
        </div>
</div>