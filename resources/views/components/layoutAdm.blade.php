<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Som da Rua</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="{{asset($css)}}" />
  <link rel="stylesheet" href='{{asset("css/footer.css")}}'>
  <link rel="stylesheet" href='{{asset("css/header.css")}}'>
  <link rel="stylesheet" href='{{asset("css/swiper-bundle.min.css")}}'>
</head>

<body>

  <div class="containerbackground">
    <div class="glassy-overlay"></div>
    <canva></canva>
  </div>

  <header class="header">
    <div class="headerSom">
      <a class="navbar-brand" href="/">
        <img src='{{asset("assets/img/som_rua.png")}}' class="logoHeader" alt="Logo Som da Rua">
      </a>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <img src='{{asset("assets/img/som_rua.png")}}' class="logoHeader-offcanva" alt="Logo Som da Rua">
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body headertextomenu">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item nav-link mx-lg-2 dropdown">
                  <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff">
                    Perfil
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="/admin/create">Empresario</a></li>
                    <li><a class="dropdown-item" href="/admin/estabelecimento/show">Estabeleciomento</a></li>
                  </ul>
                 </li>  
                 <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="/suporte">Suporte</a>
                </li> 
                <li class="nav-item">
                  <form action="{{route('logout')}}" method="post">
                    @csrf
                    <a class="nav-link mx-lg-2" href="route('logout)" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                  </form>
                </li>
               
              </ul>
            </div>
          </div>
          <a href="/dashboard" class="login-button">Meu evento</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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