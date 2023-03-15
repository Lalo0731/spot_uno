<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{--  Tipografía Montserrat  --}}
    {{--  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">  --}}


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,700&display=swap" rel="stylesheet">

    <title>SpotUno</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-eduwell-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <nav class="header-area header-sticky {{(request () -> is ('recargas') || request () -> is ('pago')) ? 'background-header': ''}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo respont-logo">
                        <img src="{{asset('images/logo.png')}}" alt="EduWell Template" class="img-logo">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="{{(request () -> is ('/')) ? 'btn-enalce': ''}}"><a href="/" class="h-color {{(request () -> is ('/')) ? 'active': ''}}">Inicio</a></li>
                        <li class="{{(request () -> is ('recarga')) ? 'btn-enalce': ''}}"><a href="{!! URL::to('recarga')!!}" class="h-color {{(request () -> is ('recarga')) ? 'active': ''}}">Recargas</a></li>
                        <li class="{{(request () -> is ('planes')) ? 'btn-enalce': ''}}"><a href="{!! URL::to('planes')!!}" class="h-color {{(request () -> is ('planes')) ? 'active': ''}}">Paquetes</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </nav>
  <!-- ***** Header Area End ***** -->

  @yield('content')

  <footer class="contact-us our-office">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
          <div class="col pt-5">
            <a href="/" class="logo respont-logo">
              <img src="{{asset('images/logo.png')}}" alt="EduWell Template" class="img-logoFooter">
            </a>
          </div>
          <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0 col p-4">
            <h2 class="footer-heading text-uppercase h4 text-white style-text w700">Enlaces</h2>
            <hr class="hr-enlaces">
            <ul class="list-unstyled">
                <li><a href="{!! URL::to('/')!!}" class="py-2 d-block text-white style-text w600">Inicio</a></li>
                <li><a href="{!! URL::to('planes')!!}" class="py-2 d-block text-white style-text w600">Paquetes</a></li>
                <li><a href="{!! URL::to('recarga')!!}" class="py-2 d-block text-white style-text w600">Recargas</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0 col p-4">
            <h2 class="footer-heading text-uppercase fw-bold h4 text-white style-text w700">Contáctanos</h2>
            <hr class="hr-enlaces">
            <ul class="list-unstyled">
                <li><p class="text-white style-text w600">¿Tienes alguna duda?</p></li>
                <li><p class="text-white style-text w600">Envíanos un e-mail</p></li>
            </ul>
            <div>
              <div class="col-12 col-sm-10">
                <input type="text" class="form-control border-0 inputContacto" placeholder="Tú nombre" style="height: 55px;" id="contactoNombre" name="contactoNombre">
              </div>
              <div class="col-12 col-sm-10">
                <textarea class="form-control mt-3 inputContacto" id="exampleFormControlTextarea1" rows="3" placeholder="Comentarios"></textarea>
              </div>
              <div class="col-12 col-sm-6 mt-3">
                <button class="btn btn-secondary w-100 btn-form" type="button" id="formEnviar">Enviar</button>
            </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0 col p-4">
            <h2 class="footer-heading text-uppercase fw-bold h4 text-white style-text w400">Contacto</h2>
            <hr class="hr-enlaces">
            <ul class="list-unstyled">
                <li><p class="text-white style-text w600">C. José María Bear Alva 2514 col.</p></li>
                <li><p class="text-white style-text w600">Barrio de Londres</p></li>
                <li><p class="text-white style-text w600">Chihuahua, chih. C.P. 31060</p></li>
            </ul>
          </div>
        </div>
        </div>
        <!-- <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 EduWell Co., Ltd. All Rights Reserved.
  
          <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div> -->
      </div>
    </div>
  </footer>

  {{--  BARRA TIPO APP EN RESPONSIVE  --}}
  {{--  <nav class="tabbar">
    <div>
      <a href="https://clinicadefisioterapiacdmx.com">
        <img src="https://clinicadefisioterapiacdmx.com/src/assets/images/tabbar/home.svg" alt="Up Therapy">
        Inicio
      </a>
    </div>
  
    <div>
      <a class="btn_especialidades" href="javascript:void(0)">
        <img src="https://clinicadefisioterapiacdmx.com/src/assets/images/tabbar/star.svg" alt="Up Therapy">
        Especialidades
      </a>
    </div>
  
    <div class="whatsapp">
      <a target="_blank" href="https://wa.me/525547576392?text=">
        <div>
          <img src="https://clinicadefisioterapiacdmx.com/src/assets/images/tabbar/whatsapp.svg" alt="Up Therapy">
        </div>
      </a>
    </div>
  
    <div>
      <a class="btn_inovaciones" href="javascript:void(0)">
        <img src="https://clinicadefisioterapiacdmx.com/src/assets/images/tabbar/led.svg" alt="Up Therapy">
        Innovaciones
      </a>
    </div>
  
    <div>
      <a target="_blank" href="https://www.doctoralia.com.mx/clinicas/up-therapy-mx?utm_source=widget-clinic-34368&amp;utm_medium=link&amp;widget=1&amp;fid=34368">
        <img src="https://clinicadefisioterapiacdmx.com/src/assets/images/tabbar/calendar.svg" alt="Up Therapy">
        Calendario
      </a>
    </div>
  </nav>  --}}
  {{--  BARRA TIPO APP EN RESPONSIVE  --}}
  
  <!-- Scripts -->

  <!-- Bootstrap core JavaScript -->

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/movmin.js')}}"></script>

    <script src="{{asset('js/isotope.min.js')}}"></script>
    <script src="{{asset('js/owl-carousel.js')}}"></script>
    <script src="{{asset('js/lightbox.js')}}"></script>
    <script src="{{asset('js/tabs.js')}}"></script>
    <script src="{{asset('js/video.js')}}"></script>
    <script src="{{asset('js/slick-slider.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>