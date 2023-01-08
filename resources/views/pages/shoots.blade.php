@extends('layouts.main')

@section('title', 'IK|FOTOGRAFIA')
 
@section('content')
  {{-- <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Mais do que um fotógrafo, um registrador de magia </h2>
                <p class="animate__animated animate__fadeInUp">Fotógrafo bom é aquele que coloca um pouquinho da alma em cada clique</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">ver mais</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Não deixe para amanhã a fotografia perfeita que pode ter hoje</h2>
                <p class="animate__animated animate__fadeInUp">Quem disse que felicidade não se compra nunca viu o nosso álbum de fotografia</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">ver mais</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">A arte de fazer durar para sempre qualquer segundo </h2>
                <p class="animate__animated animate__fadeInUp">Se não for para registrar os melhores momentos nossa equipe nem vai.</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">ver mais</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section --> --}}
    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Shoots</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {{-- <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todas</li>
              <li data-filter=".filter-app">Estudio</li>
              <li data-filter=".filter-card">Shoots</li>
              <li data-filter=".filter-web">Casamento</li>
            </ul> --}}
          </div>
        </div>

        <div class="row awesome-project-content portfolio-container">

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/1.jpg">
                      <h4>Estudio</h4>
                      <span>Gente que ama uma boa foto</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/2.jpg">
                      <h4>Casamento</h4>
                      <span>Eternize sua felicidade</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/3.jpg">
                      <h4>Beautiful Nature</h4>
                      <span>Web Design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/4.jpg">
                      <h4>Creative Team</h4>
                      <span>Web design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/5.jpg">
                      <h4>Beautiful Flower</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/6.jpg">
                      <h4>Night Hill</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

        </div>
      </div>
    </div><!-- End Portfolio Section -->
@endsection