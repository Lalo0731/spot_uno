@extends('layouts.index')
@section('content')

  <section class="pricing  bg-shape" id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title mb-4">
            <h2 class="mb-3">Los mejores <span>planes</span> que tenemos para ti</h2>
            <p>Ven y descubre las mejores promociones, precios y planes.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="pricing-table text-center feature_item font-color">
            <div class="title">
              <h3 class="texto-principal">Basico</h3>
            </div>
            <div class="price">
              <p class="color-priceB animate__animated animate__heartBeat animate__infinite">$280<span>/ Mes</span></p>
            </div>
            <ul class="feature-list">
              <li>1 Mb Subida</li>
              <li>5 Mb Bajada</li>
              <li>Instalación GRATIS</li>
              <li class="resticciones">* aplican restricciones</li>
            </ul>
            <div class="action-button">
              <a href="" class="btn btn-main-rounded btn-priceB">Adquirir</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="pricing-table featured text-center font-color">
            <div class="title">
              <h3 class="texto-principal">Ideal</h3>
            </div>
            <div class="price">
              <p class="animate__animated animate__heartBeat animate__infinite">$320<span>/ Mes</span></p>
            </div>
            <ul class="feature-list">
              <li>A2 Mb Subida</li>
              <li>10 Mb Bajada</li>
              <li>Instalación GRATIS</li>
              <li class="resticciones">* aplican restricciones</li>
            </ul>
            <div class="action-button">
              <a href="" class="btn btn-main-rounded">Adquirir</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 m-md-auto">
          <div class="pricing-table text-center feature_item font-color">
            <div class="title">
              <h3 class="texto-principal">Plus</h3>
            </div>
            <div class="price">
              <p class="color-priceP animate__animated animate__heartBeat animate__infinite">$360<span>/ Mes</span></p>
            </div>
            <ul class="feature-list">
              <li>5 Mb Subida</li>
              <li>15 Mb Bajada</li>
              <li>Instalación GRATIS</li>
              <li class="resticciones">* aplican restricciones</li>
            </ul>
            <div class="action-button">
              <a href="" class="btn btn-main-rounded btn-priceP">Adquirir</a>
            </div>
          </div>
        </div>

        {{--  <div class="col-lg-4 col-md-6">
          <div class="pricing-table text-center feature_item">
            <div class="title">
              <h5>30 días</h5>
            </div>
            <div class="price">
              <p>$0<span>/month</span></p>
            </div>
            <ul class="feature-list">
              <li>Android App</li>
              <li>One time payment</li>
              <li>Build & Publish</li>
              <li>Life time support</li>
            </ul>
            <div class="action-button">
              <a href="" class="btn btn-main-rounded">Start Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="pricing-table featured text-center">
            <div class="title">
              <h5>Basic</h5>
            </div>
            <div class="price">
              <p>$19<span>/month</span></p>
            </div>
            <ul class="feature-list">
              <li>Android App</li>
              <li>One time payment</li>
              <li>Build & Publish</li>
              <li>Life time support</li>
            </ul>
            <div class="action-button">
              <a href="" class="btn btn-main-rounded">Start Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 m-md-auto">
          <div class="pricing-table text-center">
            <div class="title">
              <h5>Advance</h5>
            </div>
            <div class="price">
              <p>$99<span>/month</span></p>
            </div>
            <ul class="feature-list">
              <li>Android App</li>
              <li>One time payment</li>
              <li>Build & Publish</li>
              <li>Life time support</li>
            </ul>
            <div class="action-button">
              <a href="" class="btn btn-main-rounded">Start Now</a>
            </div>
          </div>
        </div>  --}}

      </div>
    </div>
  </section> 

@endsection