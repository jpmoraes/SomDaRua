<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Som da Rua</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="{{asset($css)}}"/>
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
  
  <div class="containerbackground">
    <div class="glassy-overlay"></div>
    <canva></canva>
  </div>

  <header class="header">
    <div class="headerSom">
      <a class="navbar-brand" href="/">
        <img src="assets/img/som_rua.png" class="logoHeader" alt="Logo Som da Rua">
      </a>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <img src="assets/img/sOM DA RUA.png" class="logoHeader-offcanva" alt="Logo Som da Rua">
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body headertextomenu">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="/admin/perfil">Perfil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="/suporte">Suporte</a>
                  </li>
              </ul>
            </div>
          </div>
          <a href="/dashboard" class="login-button">Meu evento</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        </div>
      </nav>
    </div>
  </header>
  

  {{$slot}}
  <section id="up"></section>
  <section id="down"></section>
  <section id="left"></section>
  <section id="rigth"></section>
  <section id="middle"></section>
  
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/index-swiper.js"></script>
  <script src="js/bgfilter.js"></script>
</body>
</html>

<!-- 

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
       
    <link rel="stylesheet" href="../../css/dados.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>

    <link rel="stylesheet" href="{{ asset($css)}}">
</head>

<body>
    <header class="header2">
        <nav class="menu-hamburger">

            <input id="menu-hamburguer" type="checkbox" />
            <label for="menu-hamburguer">
                <div class="menu">
                    <span class="hamburguer"></span>
                </div>
            </label>

            <ul class="menu-hamburguer-elements show">

                <div class="img_topo">
                    <img src="assets/img/som_rua.png" alt="Descrição da imagem">
                </div>

                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Privacidade</a>
                </li>

                <li>
                    <a href="#">Ajuda/Suporte</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>                
                </li>
            </ul>
        </nav>
    </header>

<body>

    

        {{$slot}}
    

   
</body>

</html>
