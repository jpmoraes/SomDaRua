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
        <form action="" method="post">
        @csrf

        <div class="galeria-generos">

            <label class="item-galeria" for="reggae">
                <p>Reggae</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/reggae.jpg" alt="">
                <input type="radio" name="genero" value="7" id="reggae">
            </label>

            <label class="item-galeria" for="eletronica">
                <p>Eletrônica</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/eletro.jpg" alt="">
                <input type="radio" name="genero" value="8" id="eletronica">

            </label>

            <label class="item-galeria" for="forro">
                <p>Forro/Sertanejo</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/forro.jpg" alt="">
                <input type="radio" name="genero" value="2" id="forro">
            </label>

            <label class="item-galeria" for="jazz">
                <p>Jazz</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/jzz.jpg" alt="">
                <input type="radio" name="genero" value="3" id="jazz">

            </label>

            <label class="item-galeria" for="rap">
                <p>Rap/Trap</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/rap.jpg" alt="">
                <input type="radio" name="genero" value="4" id="rap">
            </label>

            <label class="item-galeria" for="rock">
                <p>Rock/Pop</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/rck.jpg" alt="">
                <input type="radio" name="genero" value="5" id="rock">
            </label>

            <label class="item-galeria" for="samba">
                <p>Samba</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/samba.jpg" alt="">
                <input type="radio" name="genero" value="1" id="samba">
            </label>

            <label class="item-galeria" for="mpb">
                <p>MPB</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/mpb.jpg" alt="">
                <input type="radio" name="genero" value="9" id="mpb">
            </label>

            <label class="item-galeria" for="axe">
                <p>Axé/Pagode</p>
                <img class="item-galeria-generos" src="assets/img/index/generos/axepgd.jpg" alt="">
                <input type="radio" name="genero" value="6" id="axe">
            </label>
        </div>

        <div class="button-generos">

            <div class="button-calendario">
                <!-- <h2>Select a Date:</h2> -->
                <div class="input-group mb-3">
                    <div class="input-group-append">
                    </div>
                        <input type="text" class="form-control" id="datepicker" name="date" placeholder="Escolha sua data" readonly>
                        <button type="submit">Aplicar</button>
                    
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
        </form>

        <div class="titulo-agenda-generos">
            <h3 id="titulo-agenda-generos">Eventos futuros</h3>
        </div>

        <div class="agenda-generos container">

        @if ($eventosArray != null)
            @foreach ($eventosArray as $evento)
                <x-cardEventoHome nome="{{$evento['nome']}}" data="{{$evento['data']}}" hora="{{$evento['hora']}}" genero="{{$evento['genero'] }}">
                </x-cardEventoHome>
            @endforeach
        @endif

        </div>

    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>



</x-layout>