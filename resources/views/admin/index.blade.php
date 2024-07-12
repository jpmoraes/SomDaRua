<x-layoutAdm css="css/admin.css">

  <div class="container mt-4">
    <div class="text-center mb-4">
      <h2>Seus Eventos</h2>
    </div>
    <div class="filter-container mb-4">
      <label for="filtro" class="me-2">Filtro</label>
      <select id="filtro" class="form-select w-auto">
        <option value="data">Data de evento</option>
        <option value="Maior">Maior avaliação</option>
        <option value="Menor">Menor avaliação</option>
      </select>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <button class="btn btn-primary custom-btn" data-bs-toggle="modal" data-bs-target="#eventModal">
            <h1><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus"
                viewBox="0 0 16 16">
                <path
                  d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
              </svg></h1>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="container2">
            <header>
              <h2>Preencha as informações do seu evento</h2>
            </header>
            <form action="/submit-form" method="POST" enctype="multipart/form-data" style="max-width: 270px;">
              <div class="form-group">
                <label for="eventName">Nome do evento/banda</label>
                <input type="text" id="eventName" name="eventName" required>
              </div>
              <div class="form-group">
                <label for="eventDate">Data e Horário do evento</label>
                <div class="datetime-container">
                  <input type="date" id="eventDate" name="eventDate" required>
                  <input type="time" id="eventTime" name="eventTime" required style="text-align: center;">
                </div>
              </div>
              <div class="form-group">
                <label for="eventLocation">Local do Evento</label>
                <input type="text" id="eventLocation" name="eventLocation" required>
              </div>
              <div class="form-group">
                <label for="eventDescription">Descrição do Evento</label>
                <textarea id="eventDescription" style="resize: vertical" name="eventDescription" required></textarea>
              </div>
              <div class="form-group">
                <label for="generoMusicalSelect">Selecione o gênero musical do evento</label>
                <select id="generoMusicalSelect" name="generoMusical" required>
                  <option value="" disabled selected hidden></option>
                  <option value="Eletrônica">Eletrônica</option>
                  <option value="Rock">Rock</option>
                  <option value="Samba">Samba</option>
                  <option value="MPB">MPB</option>
                  <option value="Rap/trap">Rap/trap</option>
                  <option value="Forró/sertanejo">Forró/sertanejo</option>
                  <option value="Axé/pagode">Axé/pagode</option>
                  <option value="Jazz">Jazz</option>
                  <option value="Reggae">Reggae</option>
                </select>
              </div>
              <div class="radio-group">
                Terá Couvert?
                <label>SIM</label>
                <input class="caixa" type="radio" name="couvert" value="1" onclick="showInput()">
                <label>NÃO</label>
                <input class="caixa" type="radio" name="couvert" value="0" onclick="hideInput()">
              </div>
              <input type="text" id="valor" style="display: none;" placeholder="Digite o valor">
              <div id="soundInput" style="display: none;">
                <label for="soundDetails"> Adicione o valor do couvert a ser pago </label>
                <input type="text" id="soundDetails" name="soundDetails">
              </div>

              <div class="form-group" id="inputimg">
                <label for="eventImage">Imagem Divulgação</label>
                <button type="button" id="eventImageButton" onclick="document.getElementById('eventImage').click()">

                </button>
                <input type="file" id="eventImage" name="eventImage" style="display: none;">
              </div>
              <button type="submit">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/admin.js"></script>

</x-layoutAdm>