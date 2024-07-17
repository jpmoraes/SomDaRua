<x-layout css="css/pageGeneros.css">

    <head>
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!-- Bootstrap Datepicker CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
            rel="stylesheet">
            
        <!-- Bootstrap Datepicker JS -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    </head>

    <section class="conteiner-pagina-generos">

        <h3 id="titulo-pagina-generos">Gêneros Musicais</h3>

        <div class="menu-hamburguer">
            <input id="menu-hamburguer" type="checkbox" />

            <label for="menu-hamburguer">
                <div class="menu">
                    <span class="hamburguer"></span>
                </div>
            </label>

            <ul class="menuHam-lista">
                <li><a href="#">Reggae</a></li>
                <li><a href="#">Eletrônica</a></li>
                <li><a href="#">Forro/Sertanejo</a></li>
                <li><a href="#">Jazz</a></li>
                <li><a href="#">Rap/Trap</a></li>
                <li><a href="#">Rock/Pop</a></li>
                <li><a href="#">Samba</a></li>
                <li><a href="#">MPB</a></li>
                <li><a href="#">Axé/Pagode</a></li>
            </ul>
        </div>
        <div class="galeria-generos">

            <div class="item-galeria">
                <p>Reggae</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/reggae.jpg" alt="">
            </div>

            <div class="item-galeria">
                <p>Eletrônica</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/eletro.jpg" alt="">
            </div>

            <div class="item-galeria">
                <p>Forro/Sertanejo</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/forro.jpg" alt="">
            </div>

            <div class="item-galeria">
                <p>Jazz</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/jzz.jpg" alt="">
            </div>

            <div class="item-galeria">
                <p>Rap/Trap</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/rap.jpg" alt="">
            </div>

            <div class="item-galeria">
                <p>Rock/Pop</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/rck.jpg" alt="">
            </div class="item-galeria">

            <div class="item-galeria">
                <p>Samba</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/samba.jpg" alt="">
            </div>

            <div class="item-galeria">
                <p>MPB</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/mpb.jpg" alt="">
            </div>

            <div class="item-galeria">
                <p>Axé/Pagode</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/axepgd.jpg" alt="">
            </div>
        </div>

        <div class="button-generos">

            <div class="button-calendario">
                <!-- <h2>Select a Date:</h2> -->
                <div class="input-group mb-3">

                    <div class="input-group-append">
                    </div>
                    <input type="text" class="form-control" id="datepicker" placeholder="Escolha sua data" readonly>
                </div>


                <script>
                    $(document).ready(function () {
                        $('#datepicker').datepicker({
                            format: 'dd/mm/yyyy',
                            autoclose: true,
                            todayHighlight: true,
                        });

                        $('#datepicker-button').click(function () {
                            $('#datepicker').datepicker('show');
                        });
                    });
                </script>
            </div>

            <div class="button-eventos-gratuitos">
                <button type="button" class="btn btn-success">Eventos Gratuitos</button>
            </div>


        </div>


        <div class="titulo-agenda-generos">
            <h3 id="titulo-agenda-generos">Eventos futuros</h3>
        </div>

        <div class="agenda-generos container">

            <div class="container-generos container">
            <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rock Paulera</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">18 de Julho</li>
          <li class="list-group-item">Samba na Laje</li>
          <li class="list-group-item">19h - PITUBA</li>
        </ul>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rock Paulera</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">20 de Julho</li>
          <li class="list-group-item">22H</li>
          <li class="list-group-item">Commons Bar - RV</li>
        </ul>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">JAM no MAM</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">21 de Julho</li>
          <li class="list-group-item">17h</li>
          <li class="list-group-item">AV. Contorno</li>
        </ul>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pagode Delas</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">25 de Julho</li>
          <li class="list-group-item">22h</li>
          <li class="list-group-item">2 de Julho</li>
        </ul>
      </div>
            </div>
        </div>

    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>



</x-layout>