@extends('layouts.app')

@section('content')
  <!--CAROUSEL-->
  <section class="layout__slider">
    <div id="carouselExampleIndicators" class="carousel slide slider__header" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('storage/images/portada/portada1.webp') }}" class="d-block w-100" alt="Imagen carrusel 1">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="caption__slider">A veces, somos gente normal</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('storage/images/portada/portada2.webp') }}" class="d-block w-100" alt="Imagen carrusel 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('storage/images/portada/portada3.webp') }}" class="d-block w-100" alt="Imagen carrusel 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('storage/images/portada/portada4.webp') }}" class="d-block w-100" alt="Imagen carrusel 4">
          <div class="carousel-caption d-none d-md-block">
            <h5>Fourth slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
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
  </section>
  <!--FIN CAROUSEL-->

  <!--BLOQUE SERVICIOS-->
  <section class="layout__services">
    <div class="container services__grid text-center my-5">
      <div class="row services__list">
        <article class="col-sm-6 services__service services__service--first">
          <div class="services__service__img services__service__img--first">
            <img src="storage/images/digital-brain.jpg" alt="Imagen brain">            
          </div>
          <h4 class="fw-bold p-3">CREATIVIDAD SIN LIMITES PARA IMPULSAR TU MARCA</h4>
          <p class="fs-5 p-3">Transformamos ideas en <b>experiencias inolvidables</b>, creando campañas
            que capturan la esencia de tu marca y resuenan profundamente con tu
            audiencia.
          </p>
        </article>

        <article class="col-sm-6 services__service services__service--second">
          <div class="services__service__img services__service__img--second">
            <img src="storage/images/dartboard.jpg" alt="Imagen dartboard">
          </div>
          <h4 class="fw-bold p-3">AGILIDAD Y EFICIENCIA EN CADA PROYECTO</h4>
          <p class="fs-5 p-3"><b>Respuesta rápida y eficiente</b> para un mercado en constante cambio,
            adaptándonos a tus necesidades y superando tus expectativas con cada
            entrega.
          </p>
        </article>

        <article class="col-sm-6 services__service services__service--third">
          <div class="services__service__img services__service__img--third">
            <img src="storage/images/cyber-woman.jpg" alt="Imagen cyber woman">
          </div>
          <h4 class="fw-bold p-3">TECNOLOGÍA PARA RESULTADOS ÓPTIMOS</h4>
          <p class="fs-5 p-3">Innovación tecnológica para potenciar tus campañas publicitarias,
            utilizando <b>las herramientas más avanzadas</b> para alcanzar y superar tus
            objetivos.
          </p>
        </article>

        <article class="col-sm-6 services__service services__service--fourth">
          <div class="services__service__img services__service__img--fourth">
            <img src="storage/images/powerful-partnership.jpg" alt="Imagen powerful partnership">
          </div>
          <h4 class="fw-bold p-3">EQUIPO DE EXPERTOS APASIONADOS Y DEDICADOS</h4>
          <p class="fs-5 p-3">Profesionales apasionados dedicados a impulsar tu marca, combinando
            talento y experiencia para ofrecer<b> resultados excepcionales y transformar
            tu visión en realidad.</b>
          </p>
        </article>
      </div>
    </div>
  </section>
  <!--FIN BLOQUE SERVICIOS-->
  
  <!--BLOQUE WAITER-->
  <section class="layout__waiter">
    <div class="bg-secondary text-light text-center position-relative pb-4">
      <h2 class="mt-4 position-absolute w-100" style="font-size: 50px; top: 70%; left: 50%; transform: translate(-50%, -50%); z-index: 2;">
        VENDEMOS HUMO CON MUCHA PASIÓN
      </h2>
      <img src="storage/images/impacta_waiter.png" alt="Impacta Waiter" class="mb-6" style="top: 60px; width: 30%; position: relative; z-index: 1;">
    </div>
  </section>
  <!--FIN BLOQUE WAITER-->

  <!--BLOQUE DE CLIENTES-->
  <section class="layout__clients">
    <div class="container-fluid clients__content" style="padding-top: 140px 0;">
      <div class="row text-center d-flex justify-content-center align-items-center pb-5 pt-5">
        <h4 class="text-light p-2 mt-5">¿NUESTROS CLIENTES?</h4>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/alcampo.svg" class="img-fluid" alt="logo alcampo" width="80px">
          </div>        
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/basf.svg" class="img-fluid" alt="logo basf" width="80px">
          </div>
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/ferrovial.svg" class="img-fluid" alt="logo ferrovial" width="80px">
          </div>
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/kpmg.svg" class="img-fluid" alt="logo kpmg" width="80px">
          </div>
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/corporateexcellence.svg" class="img-fluid" alt="logo corporate" width="80px">
          </div>
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/bmi.svg" class="img-fluid" alt="logo bmi" width="80px">
          </div>
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/brita.svg" class="img-fluid" alt="logo brita" width="80px">
          </div>
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/cajamar.svg" class="img-fluid" alt="logo cajamar" width="80px">
          </div>
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/cepsa.svg" class="img-fluid" alt="logo cepsa" width="80px">
          </div>
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/schneider.svg" class="img-fluid" alt="logo schneider" width="80px">
          </div>
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/hill.svg" class="img-fluid" alt="logo hill" width="80px">
          </div>
        </div>
        <div class="col-auto">
          <div class="logo_cliente">
            <img src="/storage/images/logos/broseta.svg" class="img-fluid" alt="logo broseta" width="80px">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--FIN BLOQUE DE CLIENTES-->

  <!--FORMULARIO DE CONTACTO-->
  <section class="layout__contact">
    <div class="container-fluid pt-5 border-top">
      <div class="container">
        <h4 class="text-light"><strong>ENVIANOS TU</strong> MENSAJE</h4>
        <form action="{{ route('contacts.store') }}" method="POST" class="row row-cols-2" autocomplete="off">
          @csrf
          <div class="row row-cols-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <label for="name" class="visually-hidden">Nombre</label>
              <input type="text" class="form-control mb-2" name="name" id="name" value="{{ old('name') }}" placeholder="Nombre" required>
              {!! $errors->first('name', '<small class="text-light">:message</small><br>') !!}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <label for="email" class="visually-hidden">Email</label>
              <input type="email" class="form-control mb-2" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required>
              {!! $errors->first('email', '<small class="text-light">:message</small><br>') !!}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <label for="phone" class="visually-hidden">Teléfono</label>
              <input type="text" class="form-control mb-2" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Télefono" required>
              {!! $errors->first('phone', '<small class="text-light">:message</small><br>') !!}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <label for="planet" class="visually-hidden">Planeta de Nacimiento</label>
              <input type="text" class="form-control mb-2" name="planet" id="planet" value="{{ old('planet') }}" placeholder="Planeta de nacimiento" required>
              {!! $errors->first('planet', '<small class="text-light">:message</small><br>') !!}
            </div>
            <div class="col-12 mb-5">
              <label for="message" class="visually-hidden">Mensaje</label>
              <textarea class="form-control mb-3 pb-5" rows="4" name="message" id="message" value="{{ old('message') }}" placeholder="Mensaje" required></textarea>
              {!! $errors->first('message', '<small class="text-light">:message</small><br>') !!}
              <p class="fs-6 text-light">Sus datos serán tratados por IMPACTA para la atención de las consultas o solicitudes de información realizadas.
                Puede ejercer sus derechos conforme a lo dispuesto en la Política de Privacidad. Más información aquí.
              </p>
            </div>
            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
          </div>
          <div class="col ms-4 text-light">
            <h5 class="pb-3">SELECCIONA SOLO <strong>UN RESULTADO</strong></h5>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="deseo_personal" id="feliz" value="Quiero ser feliz" required>
              <input type="text" name="deseo_personal_placeholder1" class="form-control contact__inputDisabled" placeholder="Quiero ser feliz" disabled>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="deseo_personal" id="rico" value="Quiero ser rico">
              <input type="text" name="deseo_personal_placeholder2" class="form-control contact__inputDisabled" placeholder="Quiero ser rico" disabled>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="deseo_personal" id="avión" value="Quiero ser un avión">
              <input type="text" name="deseo_personal_placeholder3" class="form-control contact__inputDisabled" placeholder="Quiero ser un avión" disabled>
            </div>
            <div class="form-check mb-3 pb-5">
              <input class="form-check-input" type="radio" name="deseo_personal" id="dormir" value="Quiero dormir todo el día">
              <input type="text" name="deseo_personal_placeholder4" class="form-control contact__inputDisabled" placeholder="Quiero dormir todo el día" disabled>
            </div>
            <div class="row row-cols-2">
              <div class="form-check">
                <input class="form-check-input border" type="checkbox" value="" id="flexCheckDefault" required>
                <label class="form-check-label ms-2 fs-5" for="flexCheckDefault">
                  He leído y acepto <strong>el aviso legal</strong> y la <strong>política de privacidad</strong>
                </label>
              </div>
              <button type="submit" class="btn btn-warning rounded-pill mb-3 contact__btn">
                <strong> ENVIAR MENSAJE </strong>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!--FIN FORMULARIO DE CONTACTO-->
@endsection