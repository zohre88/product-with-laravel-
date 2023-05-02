@extends('front.layout.master')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Über uns</h2>
        <ol>
          <li><a href="{{ route('home') }}">Heim</a></li>
          <li>Über uns</li>
          </ol>
      </div>
  </div>
</section>
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-5 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="{{ asset('assets/image/Safran_Muschel.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-7 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>ARDA Trading & Consulting GmbH</h3>
          <p class="fst-italic">
            Die ArDa-Trade GmbH ist eine Firma mit großer Liebe für orientalische und mediterrane Spezialitäten. Durch unsere persischen Wurzeln können wir Ihnen die auserlesenste Qualität an Gaumenfreuden präsentieren. 
Unser Premium-Safran mit seiner leuchtend schönen, karminroten Farbe bildet nur den Anfang unserer Produktpalette.                                                                                                                                                                              Wir können eine gleichbleibend hohe Qualität an allen unseren Produkten garantieren. Ein stetig wachsendes Sortiment an exklusiven persischen Spezialitäten, teilweise ganz neu in Europa, zu erschwinglichen Preisen zeichnet uns aus.                                                                                                                                                                                   Mit uns haben Sie einen Partner, der mediterrane und orientalische Kostbarkeiten genauso liebt wie Sie.
          </p>
         
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
@endsection