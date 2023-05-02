@extends('front.layout.master')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>{{ ucfirst($page) }}</h2>
        <ol>
          <li><a href="{{ route('home') }}">Heim</a></li>
          <li>{{ $page }}</li>
          </ol>
      </div>
  </div>
</section>
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
@foreach ($recipes as $recipe)

<div class="row border-b">
    <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="100">
        <div class="about-img">
          <img src="{{ asset($recipe->image) }}" alt="" class="img-fluid">
        </div>
      </div>
    <div class="col-lg-7 pt-4 pt-lg-0 content">
      <h2>{{ $recipe->title }}</h2>
      <p>{{ $recipe->date }}</p>
      <p class="fst-italic">{!! $recipe->content !!}</p>
    </div>
  </div>
    
@endforeach
     

    </div>
  </section><!-- End About Section -->
@endsection