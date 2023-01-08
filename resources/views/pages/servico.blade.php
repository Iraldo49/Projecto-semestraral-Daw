@extends('layouts.main')

@section('title', 'IK|FOTOGRAFIA')
 
@section('content')
 <!-- ======= Services Section ======= -->
 <div id="services" class="services-area area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Escolha um dos Serviços para Começar!</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <!-- Start Left services -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="about-move">
            <div class="services-details">
              <div class="single-services">
                
               
                <p>
                  Oferecemos uma ampla gama de soluções de alojamento web com os preços mais baixos do mercado, comece com um dos nossos planos que atenda às suas necessidades
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        {{-- <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="bi bi-card-checklist"></i>
                </a>
                <h4>Creative Designer</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="bi bi-bar-chart"></i>
                </a>
                <h4>Wordpress Developer</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="bi bi-binoculars"></i>
                </a>
                <h4>Social Marketer </h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <!-- End Left services -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="bi bi-brightness-high"></i>
                </a>
                <h4>Seo Expart</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
        <!-- End Left services -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="bi bi-calendar4-week"></i>
                </a>
                <h4>24/7 Support</h4>
                <p>
                  will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                </p>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Services Section --> --}}
  <!-- ======= Pricing Section ======= -->
  <div id="pricing" class="pricing-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>basic <br /> <span>25.000,00 MZN</span></h3>
            <ol >
              {{-- <li class="check" ><i class="bi bi-check"></i><span style="text-align: center">Casamento</span></li>
              <li class="check"><i class="bi bi-x"></i><span>Sem drone</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Fotografia</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Slide Show</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Flash personalizado ou CD</span></li> --}}


              <li class="check"><i class="bi bi-check"></i><span>Casamento</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Fotografia</span></li>
              <li class="check"><i class="bi bi-x"></i><span>Sem Video Resumo</span></li>
              <li class="check"><i class="bi bi-x"></i><span>Sem Pre-wedding</span></li>
              <li class="check"><i class="bi bi-x"></i><span>Sem drone</span></li>
              <li class="check"><i class="bi bi-x"></i><span>Sem Album Grande A4</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Slide Show</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Flash personalizado ou CD</span></li>
             
            </ol>
            <button>sign up now</button>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list active">
            <span class="saleon">Top venda</span>
            <h3>standard <br /> <span>40.000,00 MZN</span></h3>
            <ol>
              {{-- <li class="check"><i class="bi bi-check"></i><span>Casamento</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Fotografia</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Drone</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Album medio</span></li>
              <li class="cross"><i class="bi bi-x"></i><span>Slide Show</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Flash personalizado ou CD</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Video Resumo</span></li> --}}
              

              <li class="check"><i class="bi bi-check"></i><span>Casamento</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Fotografia</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Video Resumo</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Pre-wedding</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Drone</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Album Medio</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Slide Show</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Flash personalizado ou CD</span></li>
            </ol>
            <button>sign up now</button>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>premium <br /> <span>70.000,00 MZN</span></h3>
            <ol>
              <li class="check"><i class="bi bi-check"></i><span>Casamento</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Fotografia</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Video Resumo</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Pre-wedding</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Drone</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Album Grande A4</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Slide Show</span></li>
              <li class="check"><i class="bi bi-check"></i><span>Flash personalizado ou CD</span></li>
            </ol>
            <button>sign up now</button>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Pricing Section -->
@endsection