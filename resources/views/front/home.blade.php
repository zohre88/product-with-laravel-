@extends('front.layout.master')
@section('content')

 <!-- ======= Portfolio Details Section ======= -->
 <section id="portfolio-details" class="portfolio-details p0">
    <div class="container-fluid p0">
        <div class="portfolio-details-container">
            <div class="owl-carousel portfolio-details-carousel">
                <img src="{{ asset('assets/image/slider.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->
<!-- ======= About Section ======= -->
<section id="about" class="about" >
    <div class="container">

      <div class="row">
        <div class="col-xl-12 col-lg-12 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <div class="section-title">
            <h3>Über uns</h3>
            <h2>Warum sollten <span>Sie uns wählen</span>?</h2>
            <p>Die ArDa-Trade GmbH ist eine Firma mit großer Liebe für orientalische und mediterrane Spezialitäten. Durch unsere persischen Wurzeln können wir Ihnen die auserlesenste Qualität an Gaumenfreuden präsentieren. Unser Premium-Safran mit seiner leuchtend schönen, karminroten Farbe bildet nur den Anfang unserer Produktpalette. Wir können eine gleichbleibend hohe Qualität an allen unseren Produkten garantieren. Ein stetig wachsendes Sortiment an exklusiven persischen Spezialitäten, teilweise ganz neu in Europa, zu erschwinglichen Preisen zeichnet uns aus. Mit uns haben Sie einen Partner, der mediterrane und orientalische Kostbarkeiten genauso liebt wie Sie.</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  
    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h3>Kategorien</h3>
            <h2>Produkte Kollektion</h2>
          </div>
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="course-item">
                  <a href=""><img src="{{ asset('assets/image/freeze-dried.jpg') }}" class="img-fluid" alt="..."> </a>
                  <div class="course-content">
                    <h3><a href="">Gefriergetrocknet</a></h3>
                  </div>
                </div>
              </div> <!-- End Course Item-->
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="course-item">
                <a href=""><img src="{{ asset('assets/image/dried-apple.jpg') }}" class="img-fluid" alt="..."></a>
                  <div class="course-content">
                    <h3><a href="">Getrocknete Früchtet</a></h3>
                  </div>
                </div>
              </div> <!-- End Course Item-->
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="course-item">
                  <img src="{{ asset('assets/image/saffrons.jpg') }}" class="img-fluid" alt="...">
                  <div class="course-content">
                    <h3><a href="#">Safran</a></h3>
                  </div>
                </div>
              </div> <!-- End Course Item-->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="{{ asset('assets/image/roses.jpg') }}" class="img-fluid" alt="...">
                <div class="course-content">
                  <h3><a href="#">Rosen & Kräuter</a></h3>
                </div>
              </div>
            </div> <!-- End Course Item-->
           
            
           
          </div>
        </div>
      </section><!-- End Popular Courses Section -->
       <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>
      </section><!-- End Cta Section -->

@endsection