<x-layout css="css/index.css">
<main class="gridMain">
    <section class="destaque">
      <div id="idestaque" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators destaque-indicators">
          <button type="button" data-bs-target="#idestaque" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#idestaque" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#idestaque" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#idestaque" data-bs-slide-to="3"></button>
        </div>
        <div class="carousel-inner destaque-inner">
          <div class="carousel-item active destaque-item">
            <img src="assets/img/index/destaque/Carrossel1.png" alt="..." class="d-block w-100">
          </div>
          <div class="carousel-item destaque-item">
            <img src="assets/img/index/destaque/Carrossel2.png" alt="..." class="d-block w-100">
          </div>
          <div class="carousel-item destaque-item">
            <img src="assets/img/index/destaque/Carrossel3.png" alt="..." class="d-block w-100">
          </div>
          <div class="carousel-item destaque-item">
            <img src="assets/img/index/destaque/Carrossel4.png" alt="..." class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#idestaque" data-bs-slide="prev">
            <span class="carousel-control-prev-icon destaque-icon destaque-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#idestaque" data-bs-slide="next">
          <span class="carousel-control-next-icon destaque-icon destaque-next-icon"></span>
        </button>
      </div>
    </section>

    <section class="agenda" id="agenda">
      <h1>Agenda</h1>
      <div class="container-agenda">
      <div class="card" style="width: 18rem;">
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

      <
      <!-- <div class="d-flex justify-content-center">
        <div id="ielements">
          <div class="scheduleItem">
            <div class="dayNumber">18 de Julho Samba na Laje 19h PITUBA</div>
          </div>

          <div class="scheduleItem">
            <div class="dayNumber">20 de Julho Commons Bar 22h BARRA</div>
          </div>

          <div class="scheduleItem">
            <div class="dayNumber">21 de Julho JAM NO MAM 17H AV.CONTORONO</div>
          </div>

          <div class="scheduleItem">
            <div class="dayNumber">25 de Julho Pagode Delas 22h 2 de JULHO</div>
          </div>

          <div class="scheduleItem">
            <div class="dayNumber">29 de Julho 10 horas de Arrocha 15h WET'N WILD</div>
          
          </div>
        </div>
      </div> -->
      <nav class="pagination-outer" aria-label="Page navigation">
        <ul class="pagination">
          <li class="page-item">
            <a href="#" class="page-link" aria-label="Previous">
              <span aria-hidden="true">»</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item active"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a href="#" class="page-link" aria-label="Next">
              <span aria-hidden="true">«</span>
            </a>
          </li>
        </ul>
      </nav>
    </section>

    <section class="container genero">
      <div class="card__container swiper">
        <h1>Gêneros</h1>
        <div class="card__content">
          <div class="swiper-wrapper">
            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/mpb.jpg" alt="image">
                <div class="generos-label-background">
                  <h3>MPB</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/eletro.jpg" alt="image">
                <div class="generos-label-background">
                  <h3>Eletrônica</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/forro.jpg" alt="image">
                <div class="generos-label-background">
                  <h3>Forró</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/jzz.jpg" alt="image">
                <div class="generos-label-background">
                  <h3>Jazz</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/reggae.jpg" alt="image">
                <div class="generos-label-background">
                  <h3>Reggae</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/rck.jpg" alt="image">
                <div class="generos-label-background">
                  <h3>Rock</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/axe.jpg" alt="axe">
                <div class="generos-label-background">
                  <h3>AXÉ</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/samba.jpg" alt="image">
                <div class="generos-label-background">
                  <h3>Samba</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/rap.jpg" alt="image">
                <div class="generos-label-background">
                  <h3>RAP</h3>
                </div>
              </a>
            </article>
          </div>
          
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>

      </div>
    </section>

  <section class="saibaMais d-flex justify-content-center">
    <a href="#" id="isaibaMais">
      <div class="carousel slide saibaMais carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner saibaMaisInner">
          <div class="carousel-item active saibaMaisItem" data-bs-interval="5000">
            <img src="assets/img/index/saibaMais/elevadorlacerda.jpg" alt="Elevador Lacerda" class="d-block w-100">
          </div>
          <div class="carousel-item saibaMaisItem" data-bs-interval="5000">
            <img src="assets/img/index/saibaMais/faroldabarra.jpg" alt="Farol da Barra" class="d-block w-100">
          </div>
          <div class="carousel-item saibaMaisItem" data-bs-interval="5000">
            <img src="assets/img/index/saibaMais/fitabonfim.jpg" alt="Fitas do Senhor do Bonfim" class="d-block w-100">
          </div>
          <div class="carousel-item saibaMaisItem" data-bs-interval="5000">
            <img src="assets/img/index/saibaMais/pelourinho.jpg" alt="Pelourinho" class="d-block w-100">
          </div>
        </div>
      </div>
      <div id="ilabel">Saiba Mais</div>
    </a>
  </section>

    <section class="sobreNos" id="sobreNos">
        <h1>Sobre Nós</h1>
        <p>
          <strong>“Som da Rua”</strong> é muito mais do que uma empresa de eventos; é uma ponte entre a energia
          contagiante de
          Salvador e os visitantes que buscam experiências autênticas. Com uma visão inovadora, nosso objetivo
          é mapear e conectar as pessoas com as festas mais vibrantes da cidade, oferecendo uma imersão
          completa na rica cultura baiana.
          Nossa equipe dedicada trabalha incansavelmente para identificar e promover eventos que capturam a
          essência única de Salvador: Desde os famosos carnavais de rua até as festas tradicionais nos bairros
          históricos. Com um olhar atento às preferências dos turistas, garantimos que cada experiência seja
          memorável e enriquecedora.
          Ao colaborar com parceiros locais e especialistas em turismo, criamos roteiros personalizados que
          destacam o melhor da cidade. Proporcionando aos visitantes uma jornada autêntica e inesquecível.
          <strong>“Som da Rua”</strong> não apenas organiza eventos, mas também constrói conexões duradouras entre
          os turistas
          e a vibrante cultura de Salvador. Venha se juntar a nós e mergulhe na festa que é Salvador!
        </p>
    </section>
  </main>


</x-layout>