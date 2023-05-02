@extends('front.layout.master')

@section('content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $category->name }}</h2>
                <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>{{ $category->name }}</li>
                </ol>
            </div>
        </div>
    </section>
  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">
      <div class="section-title" data-aos="zoom-in">
        <h2>{{ $category->name }} </h2>
      </div>
      <div class="row">
        @foreach ($products as $product)         
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
                <div class="member-img">
                <a href=""><img src="{{ asset($product->image) }}" class="img-fluid" alt=""></a>
                <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                </div>
                </div>
                <a href="{{ route('product.detail',['id'=>$product->id,'slug'=>$product->slug]) }}">
                <div class="member-info apple-color">
                  @if($category->name=='Getrocknete Früchte')
                <span class="{{ $product->slug }}-color"> Getrocknet</span>
                  @elseif($category->name=='Gefriergetrocknet')
                  <span class="{{ $product->slug }}-color">  {{ $category->name }} </span>  
                  @endif
                    <h3>{{ $product->title }}</h3>
                </div>
                </a>
                @if($category->name=='Gefriergetrocknet')
                <span class="aa-badge aa-vegan" href=" #">@if ( $product->category_id==6) 100% Früchte @elseif ( $product->category_id==5) Gemüse @endif</span>
            @endif
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Team Section -->

@endsection