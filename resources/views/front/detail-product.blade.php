@extends('front.layout.master')

@section('css')
{{-- <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> --}}
@endsection
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>{{ $product->title }}</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">{{$product->category->name}}</a></li>
  
            <li>{{ $product->title }}</li>
            </ol>
        </div>
    </div>
  </section>



  
  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">
      <div class="row">
          <!-- Modal view slider -->
          <div class="col-md-5 col-sm-12 col-xs-12">                              
              <!-- ======= Portfolio Details Section ======= -->
              <section id="portfolio-details" class="portfolio-details">
                  <div class="container">
                      <div class="portfolio-details-container">
                          <div class="owl-carousel portfolio-details-carousel">
                            @foreach($product->galleries as $gallery)
                            <img src="{{ asset($gallery->path) }}" class="img-fluid" alt="">
                            @endforeach                              
                          </div>
                      </div>
                  </div>
              </section><!-- End Portfolio Details Section -->
          </div>
          <!-- Modal view content -->
          <div class="col-md-7 col-sm-12 col-xs-12">
              <div class="product-view-content">
               
                  <h1><span class="c-theme-color">{{ $product->title }}</span></h1>
                  <br>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#description">Beschreibung</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#nutrition">Ernährung</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="#ean">EAN</a>
                      </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div id="description" class="container tab-pane  active"><br>
                        <p class="product-description">{!! $product->description !!}</p> 
                      </div>
                      <div id="nutrition" class="container tab-pane fade">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                              <thead>
                                <th colspan="3">Nutrition Information<br>
                                  Durchschnittliche Nährwerte      
                                  </th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Average  Quantity<br>
                                  Durchschnittliche Menge
                                  </td>
                                  <td>Per 100g<br>
                                  Pro 100g
                                  </td>
                                  <td>
                                    % Daily Intake *<br> 
                                    %Empfohlene<br> Tagesmenge*
                                  </td>
                                </tr>
                                <tr>
                                  <td>Energy/Energie</td>
                                  <td>1552 kJ<br>
                                    371 kcal
                                    </td>
                                  <td>18 %</td>
                                </tr>
                                <tr>
                                  <td>Fat, total/Fett</td>
                                  <td>11 g</td>
                                  <td>16 %</td>
                                </tr>
                                <tr>
                                  <td> &nbsp; -saturated/gesättigt </td>
                                  <td>0 g</td>
                                  <td>0 %</td>
                                </tr>
                                <tr>
                                  <td> &nbsp;  -unsaturated/ungesättigt</td>
                                  <td>0.3 g</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>Carbohydrate/Kohlenhydrate		</td>
                                  <td>93 g</td>
                                  <td>36 %</td>
                                </tr>
                                <tr>
                                  <td>    &nbsp;  -sugars/davon Zucker</td>
                                  <td>	74 g</td>
                                  <td>	82 %</td>
                                </tr>
                                <tr>
                                  <td>Dietary Fiber/ Ballaststoffe  </td>
                                  <td>11 g</td>
                                  <td>39 %</td>
                                </tr>
                                <tr>
                                  <td>Protein/Protein		</td>
                                  <td>3 g</td>
                                  <td>6 %</td>
                                </tr>
                                <tr>
                                  <td>Salt/Salz		</td>
                                  <td>0.1 g</td>
                                  <td>1 %</td>
                                </tr>
                                <tr>
                                  <td>Cholesterol/Cholesterin</td>
                                  <td>0 mg</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Potassium/ Kalium		</td>
                                  <td>560 mg</td>
                                  <td>28 %</td>
                                </tr>
                                <tr>
                                  <td>Magnesium/Magnesium		</td>
                                  <td>7 mg</td>
                                  <td>2 %</td>
                                </tr>
                                <tr >
                                  <td>Calcium/Kalzium		</td>
                                  <td>14 mg</td>
                                  <td>2 %</td>
                                </tr>
                                <tr class="tbl-footer">
                                  <td colspan="3">*Percentage Daily Intakes are based on an average adult diet of 8400 kJ/2000 kcal. Your daily intakes may be higher or lower depending on your energy needs.
                                    <br>*Referenzmenge für einen durchschnittlichen Erwachsenen.
                                    </td>
                                </tr>

                              </tbody>
                          </table>
                        </div>
                      </div>
                      <div id="ean" class="container tab-pane fade">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th colspan="5">ARDA {{$product->category->name}}</th>
                                  </tr>
                                  <tr>
                                    <th scope="col">Art./Nr.</th>
                                    <th scope="col">Beschreibung</th>
                                    <th scope="col">VPE</th>
                                    <th scope="col">EAN Code Produkt</th>
                                    <th scope="col">EAN-Code VPE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($eans as $ean )
                                  <tr>
                                    <td>{{ $ean->art }}</td>
                                    <td>
                                      @foreach (explode('-', $ean->title) as $string)
                                      {{ $string }} <br>
                                      @endforeach
                                     
                                    </td>
                                    <td>{{ $ean->VPE }}</td>
                                    <td>{{ $ean->code_product }}</td>
                                    <td>{{ $ean->code_VPE }}</td>
                                </tr>
                                  @endforeach
                                </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  

                  
                  

                  
              </div>
          </div>
      </div>
    </div>
  </section>
   

@endsection

@section('script')
{{-- <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script> --}}
@endsection