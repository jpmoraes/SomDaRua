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

    <section class="agenda">
      <h1>Agenda</h1>
      <div class="d-flex justify-content-center">
        <div id="ielements">
          <div class="scheduleItem">
            <div class="dayNumber">03</div>
            <div class="month">de Maio</div>
            <div class="eventName">Reg de Fullstack</div>
            <div class="startTime">19h</div>
            <div class="place">Casa do Comercio - Pituba</div>
          </div>
          <div class="scheduleItem">
            <div class="dayNumber">03</div>
            <div class="month">de Maio</div>
            <div class="eventName">Reg de Fullstack</div>
            <div class="startTime">19h</div>
            <div class="place">Casa do Comercio - Pituba</div>
          </div>
          <div class="scheduleItem">
            <div class="dayNumber">03</div>
            <div class="month">de Maio</div>
            <div class="eventName">Reg de Fullstack</div>
            <div class="startTime">19h</div>
            <div class="place">Casa do Comercio - Pituba</div>
          </div>

          <div class="scheduleItem">
            <div class="dayNumber">03</div>
            <div class="month">de Maio</div>
            <div class="eventName">Reg de Fullstack</div>
            <div class="startTime">19h</div>
            <div class="place">Casa do Comercio - Pituba</div>
          </div>
          <div class="scheduleItem">
            <div class="dayNumber">03</div>
            <div class="month">de Maio</div>
            <div class="eventName">Reg de Fullstack</div>
            <div class="startTime">19h</div>
            <div class="place">Casa do Comercio - Pituba</div>
          </div>
        </div>
      </div>
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
                <img src="assets/img/index/generos/musica-classica.png" alt="image">
                <div class="generos-label-background">
                  <h3>Classica</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/musica-eletronica.png" alt="image">
                <div class="generos-label-background">
                  <h3>Eletrônica</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/musica-forro.png" alt="image">
                <div class="generos-label-background">
                  <h3>Forró</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/musica-jazz.png" alt="image">
                <div class="generos-label-background">
                  <h3>Jazz</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/musica-rap.png" alt="image">
                <div class="generos-label-background">
                  <h3>Rap</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/musica-rock.png" alt="image">
                <div class="generos-label-background">
                  <h3>Rock</h3>
                </div>
              </a>
            </article>

            <article class="card__article swiper-slide">
              <a href="#" class="card__image">
                <img src="assets/img/index/generos/musica-samba.png" alt="image">
                <div class="generos-label-background">
                  <h3>Samba</h3>
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

    <section class="sobreNos">
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