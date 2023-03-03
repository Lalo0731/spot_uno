@extends('layouts.index')
@section('content')
<section class="our-team mb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2>Tu número {{$numeroTelefono}}</h2>
          <h4>Completa tu pago de {{$montoRecarga}} <br><em>Elige donde quieres recargar:</em></h4>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-1">
        <div class="naccs">
          <div class="tabs">
            <div class="row">
              <div class="col-lg-12">
                <div class="menu">
                  {{--  <div class="active referenceSpot" data-bs-toggle="modal" data-bs-target="#exampleModal">  --}}
                  <div class="active referenceSpotOxxo">
                    <img src="{{asset('images/oxxo.png')}}" alt="Oxxo">
                    <h4>OXXO</h4>
                    <!-- <span>CEO-FOUNDER</span> -->
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/walmart.png')}}" alt="walmart">
                    <h4>WALMART</h4>
                    <!-- <span>CEO-FOUNDER</span> -->
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/sams-club.jpg')}}" alt="sams-club">
                    <h4>SAMS CLUB</h4>
                    <!-- <span>CEO-FOUNDER</span> -->
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/farmacia-ahorro.png')}}" alt="Farmacia del Ahorro">
                    <h4>FARMACIA DEL AHORRO</h4>
                    <!-- <span>CEO-FOUNDER</span> -->
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/tarjeta-debito.jpg')}}" alt="">
                    <h4>TAJETA DE CRÉDITO O DÉBITO</h4>
                    <!-- <span>CEO-FOUNDER</span> -->
                  </div>
                </div>
                <input type="hidden" name="" id="amount" value="30">
                <input type="hidden" name="" id="description" value="Recarga 30 Dias">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button> --}}

    <!-- Modal Stripe -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title p-2" id="exampleModalLabel">Tu número: {{$numeroTelefono}}</h5>
          <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-header p-4 formulario_pagar">
          <div class="modal-body col-8 text-center">
            <h5 class="text-star">Total a pagar</h5>
            <h5 class="text-star p-1 pt-2 fw-bold">$300.00</h5>
            <hr>
            <h5 class="text-star p-1 pt-2">Número de Referencia</h5>
            <h5 class="text-star fw-bold" id="referencePago"></h5>
            <hr>
            <h5 class="text-star p-1 pt-2">Código de Barra</h5>
            <img src="" alt="" id="codeBarraPago">
          </div>
          <div class="modal-body border-start">
            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-shop colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">1. Visita una de las tiendas afiliadas.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-cash-register colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">2. Indica en caja que quieres realizar un pago de: OxxoPay.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-barcode colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">3. Muestra la referencia de pago o el código de barras para pagar en caja.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-hand-holding-dollar colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">4. Confirma el monto a pagar.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-check-double colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">5. Completa tu pago y recibe tu recarga inmediatamente.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-file-invoice colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">6. El cajer@ te entregará un comprobante impreso. Consérvalo en caso qué requieras ayuda.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-comment-sms colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">7. Recibirás un SMS confirmando tu recarga.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-11 pl-0">
                <p class="text-center fw-bold fs-5 mt-3 color-reference">Tomar captura por cualquier duda o aclaración </p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          {{--  <button type="button" class="btn btn-primary">Pagar</button>  --}}
        </div>
      </div>
    </div>
  </div>

  {{--  Modal Conekta  --}}
  <div class="modal fade" tabindex="-1" role="dialog" id="stub">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Referencia de Pago</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="opps">
            <div class="opps-header">
              <div class="opps-reminder">Ficha digital. No es necesario imprimir.</div>
              <div class="opps-info">
                <div class="opps-brand"><img src="{{asset('images/oxxopay_brand.png')}}" alt="OXXOPay"></div>
                <div class="opps-ammount">
                  <h3 class="text-h3">Monto a pagar</h3>
                  <h2>$ <span id="stub_price"></span> <sup id="stub_currency"></sup></h2>
                  <p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
                </div>
              </div>
              <div class="opps-reference">
                <h3 class="text-h3">Referencia</h3>
                <h1 class="text-h1" id="stub_reference"></h1>
              </div>
              <div class="opps-reference mt-2">
                <h3 class="text-h3">Codigo de Barra</h3>
                <img src="" alt="" id="codeBarra">
              </div>
            </div>
            <div class="opps-instructions">
              <h3 class="text-h3">Instrucciones</h3>
              <ol class="ol">
                <li>Acude a la tienda OXXO más cercana. <a class="a" href="https://www.google.com.mx/maps/search/oxxo/" target="_blank">Encuéntrala aquí</a>.</li>
                <li>Indica en caja que quieres realizar un pago de servicio<strong></strong>.</li>
                <li>Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>
                <li>Realiza el pago correspondiente con dinero en efectivo.</li>
                <li>Al confirmar tu pago, el cajero te entregará un comprobante impreso. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
              </ol>
              <div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>Nombre del negocio</strong> confirmando tu pago.</div>
            </div>
          </div>	

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $('.referenceSpot').click(function(){
    
    let amount = $('#amount').val();
    let description = $('#description').val();

    $.ajax({
      url: "{{route('references')}}",
      type: 'GET',
      data: {amount, description},
      success: function(response){
        // console.log("PAYMENT_THOD: ",response.payment_method)
        var reference = response.payment_method.reference;
        var codeBarra = response.payment_method.barcode_url;

          let timerInterval
          Swal.fire({
            title: 'Espere un momento',
            html: 'Se está generando su Referencia de pago',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
              const b = Swal.getHtmlContainer().querySelector('b')
              timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
              $("#referencePago").html(reference);
              $("#codeBarraPago").attr("src", codeBarra);
              $('#exampleModal').modal('show');
            }
          })
      }
    })
  })
</script>

<script>
  $('.referenceSpotOxxo').click(function(){
    
    let amount = $('#amount').val();
    {{--  let amount = 300.50;  --}}
    let description = $('#description').val();

    data = {
      amount:amount,
      description:description
    };

    $.ajax({
      url: "{{route('referencesOxxo')}}",
      type: 'POST',
      data: data,
      success: function(response){
        console.log(response);
        console.log("response.code",response.message);
        console.log("response.charges",response.charges.data[0]);

        var amount = response.charges.data[0].amount;
        var currency = response.charges.data[0].currency;
        var reference = response.charges.data[0].payment_method.reference;
        var codigoBarra = response.charges.data[0].payment_method.barcode_url;
        
        $('#stub').modal('show');

        if(response.code){
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: response.message,
          })
        }
        else{
          showOxxoReference(amount, currency, reference, codigoBarra);
        }

        /*var reference = response.payment_method.reference;
        var codeBarra = response.payment_method.barcode_url;

          let timerInterval
          Swal.fire({
            title: 'Espere un momento',
            html: 'Se está generando su Referencia de pago',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
              const b = Swal.getHtmlContainer().querySelector('b')
              timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
              $("#referencePago").html(reference);
              $("#codeBarraPago").attr("src", codeBarra);
              $('#exampleModal').modal('show');
            }
          })*/
      }
    })
  })

  function showOxxoReference(amount, currency, reference, codigoBarra){
    amount = amount/100;

    $('#stub_price').text(amount);
    $('#stub_currency').text(currency);
    $('#stub_reference').text(reference);
    $("#codeBarra").attr("src", codigoBarra);

    {{--  $('#referenceWhatsapp2').removeClass('d-none');
    $('#btn-reference-oxxo').removeClass('d-none');
    $('#btn-reference-openpay').addClass('d-none');
    $('#montoOxxo').html('$'+amount.toFixed(2)+'<sup>MXN</sup>');
    $('#referenceOxxoCard').html(reference);
    $('#referenceOxxo').modal('show');  --}}
  } 
</script>

@endsection