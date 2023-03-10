@extends('layouts.index')
@section('content')


  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner mt5">
      <div class="carousel-item active" data-bs-interval="4000">
        <img src="{{asset('images/Banner-principal.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="{{asset('images/imgtel2.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="4000">
        <img src="{{asset('images/imgTel5.jpeg')}}" class="d-block w-100" alt="...">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<section class="pricing bg-shape">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex flex-row">
          <div class="img-banner">
            <img src="{{asset('images/Banner-peque.jpg')}}" alt="Banner secundario" class="img-bannerSecundario">
          </div>
          <div>
            <h2 class="color-titulo">¿Quiénes somos?</h2>
              <p class="text-quienes_somos">
                Somos una empresa que ofrece conexiones a internet de banda ancha en áreas de difícil acceso por
                los operadores tradicionales, además de conexiones de internet a alta velocidad también en zonas urbanas.
              </p>
              <ul class="iconos-informacion">
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen1" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto">Wifi en todos tus dispositivos</p></div>
                </li>
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen2" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto">Soporte 24/7</p>
                  </div>
                </li>
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen3" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto">Los mejores planes</p>
                  </div>
                </li>
                <li class="iconos-informacion__img">
                  <div class="d-flex flex-row">
                    <img src="{{asset('images/Pont-check.png')}}" alt="Imagen4" class="Pont-check">
                    <p class="color-texto iconos-informacion__texto">Personal capacitado</p>
                  </div>
                </li>
            </ul>
          </div>
        </div>
      </div>     
  </div>
</section>

<section>
  <div>  {{--  class="container"  --}}
    <div class="row">
      <div class="col color-apart p-3">
        <h3 class="text-white mb-3 text-center p-3">¿Aún no eres parte de <spa class="fw-bold">SpotUno</spa>?</h3>
        <h5 class="text-white text-center">¿Qué esperas? adquiérelo y disfruta de todos los beneficios</h5>
        <div class="col text-center p-3">
          <button type="button" class="btn btn-outline-secondary btn-border">¡Solicítalo ya!</button>
        </div>
      </div>
      <div class="col color-paquet p-3">
        <h3 class="text-white mb-3 text-center p-3">Disfruta de todo <span class="fw-bold">nuestros paquetes</span></h3>
        <h5 class="text-white text-center">Queremos ofrecerte solo lo mejor, seleccina, compra y disfruta</h5>
        <div class="col text-center p-3">
          <button type="button" class="btn btn-outline-secondary btn-border">Ver paquetes</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pricing bg-shape mt-0">
  <div class="container-fluid bg-secondary booking-velocidad mb-1 mt-0 wow fadeInUp" data-wow-delay="0.1s">
    {{--  <canvas id="canvas"></canvas>  --}}
      <div class="container pbRecarga">
          <div class="row gx-5">
              <div class="col-lg-5 pt-5 ">
                  <div class="py-5 mt-recarga">
                      <h1 class="text-white color-tl mb-2 text-start fw-bold display-4 ft-text">Disfruta de navegar</h1>
                      <h1 class="text-white color-tl mb-2 text-start fw-bold display-4 ft-text">Con la mejor</h1>
                      <h1 class="text-white color-tl text-start fw-bold display-4 ft-text">Velocidad</h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        
        <div class="burbujas">
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
        </div>

      </div>
    </div>
    <div class="row" style="background-color: #c6e4ff; ">
      <div class="col-lg-12">
        <div class="d-flex justify-content-center">
          <div class="rayo">
            <img src="{{asset('images/Rayo.png')}}" alt="Imagen4" class="img-rayo">
          </div>
          <div class="section-heading section-heading__text">
            <h2 class="mb-3">¡Tenemos los mejores planes!</h2>
            <h2><span class="texto-planes">¡Obtener el que más te guste!</span></h2>
          </div>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
          <div class="item">
            <div class="pricing-table text-center feature_item font-color">
              <div class="title">
                <h3 class="texto-principal">Basico</h3>
              </div>
              {{--  <div class="price color-basico">
                <div class="price color-basico d-flex flex-row">
                  <div class="col-sm" style="    
                      margin-top: 2.5rem;
                      margin-left: -14rem;
                      margin-bottom: -1rem;">
                    <img src="{{asset('images/282.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                  </div>
                  <div class="col-sm" style="    margin-top: 2.5rem;
                  margin-left: -14rem;
                  margin-bottom: -1rem;">
                    <p class="color-priceB animate__animated animate__heartBeat animate__infinite" style="font-size: 24px;">/ Mes</span></p>
                  </div>
                </div>
              </div>  --}}


              <div class="price color-basico d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                  </div>
                  <div class="col-sm mes-paquete">
                    <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
                  </div> 
              </div>

              <ul class="feature-list">
                <li>1 Mb Subida</li>
                <li>5 Mb Bajada</li>
                <li>Instalación GRATIS</li>
                <li class="resticciones">* aplican restricciones</li>
                <hr class="hr-basico">
              </ul>
              <div class="action-button">
                <a href="" class="btn btn-main-rounded btn-priceB">Adquirir</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="pricing-table featured text-center font-color">
              <div class="title">
                <h3 class="texto-principal">Ideal</h3>
              </div>

              <div class="price color-ideal d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/320.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
                </div> 
              </div>

              {{--  <div class="price">
                <p class="animate__animated animate__heartBeat animate__infinite">$320<span>/ Mes</span></p>
              </div>  --}}
              <ul class="feature-list">
                <li>A2 Mb Subida</li>
                <li>10 Mb Bajada</li>
                <li>Instalación GRATIS</li>
                <li class="resticciones">* aplican restricciones</li>
              </ul>
              <hr class="hr-ideal">
              <div class="action-button">
                <a href="" class="btn btn-main-rounded btn-priceI">Adquirir</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="pricing-table text-center feature_item font-color">
              <div class="title">
                <h3 class="texto-principal">Plus</h3>
              </div>

              <div class="price color-plus d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/360.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
                </div> 
              </div>

              {{--  <div class="price">
                <p class="color-priceP animate__animated animate__heartBeat animate__infinite">$360<span>/ Mes</span></p>
              </div>  --}}
              <ul class="feature-list">
                <li>5 Mb Subida</li>
                <li>15 Mb Bajada</li>
                <li>Instalación GRATIS</li>
                <li class="resticciones">* aplican restricciones</li>
              </ul>
              <hr class="hr-plus">
              <div class="action-button">
                <a href="" class="btn btn-main-rounded btn-priceP">Adquirir</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>

  <section class="simple-cta mb-5">
    <div class="grid-wifi">
      <div class="img-wifi-respon">
        <img src="{{asset('images/wifi.png')}}" alt="Banner secundario" class="img-wifi">
      </div>
      <div class="mt-4">
        <h2 class="fw-bold text-white">¡Wifi en todos</h2>
        <h2 class="fw-bold text-white">tus dispositivos!</h2>
      </div>
    </div>
  </section> 

  <section class="m-informacion">
    <div class="d-flex justify-content-lg-center">
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion">Aviso de privacidad/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion">Terminos y condiciones/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion">Cobertura/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion">Legales</a>
      </div>
    </div>
  </section>

@endsection