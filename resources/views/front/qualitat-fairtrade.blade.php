@extends('front.layout.master')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>{{ ucwords(str_replace('-',' ',$page)) }}</h2>
          <ol>
            <li><a href="{{ route('home') }}">Heim</a></li>
            <li>{{ $page }}</li>
            </ol>
        </div>
    </div>
  </section>
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-4">
          <img src="{{ asset('assets/image/QC-lab.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-8 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <h3>Qualitätskontrolle:</h3>
            <p class="fst-italic">
                Unsere Produkte werden direkt auf den Feldern geerntet und im hygienischen Zustand in die jeweiligen Betriebsstätten mit kontrollierten Raumkonditionen befördert.
                Um eine Kreuzkontamination zu vermeiden sind die einzelnen Produktionsräume voneinander getrennt. Die Qualität wird im Unternehmenslabor nach physischen, chemischen und mikrobiologischen Verfahren untersucht. 
                Durch die Zusammenarbeit mit anerkannten Labors für Lebensmittelanalyse in Deutschland, können wir Ihnen die Qualitätsklasse und die Reinheit unserer Produkte von jedem einzelnen Batch nachweisen. 
                Somit können wir Ihnen eine Verkehrsfähigkeitsbescheinigung und Unbedenklichkeitserklärung eines akkreditierten Labors zur Verfügung stellen.
                Selbst die Logistikpartner sind nach den entsprechenden Qualitätskriterien und Zertifizierungen ausgesucht und beauftragt</p>
            <h3>Fairtrade:</h3>
            <p class="fst-italic">
                Unsere Lieferanten produzieren im Sinne von Sedex (Supplier Ehtical Data Exchange). </p>
            </div>
      </div>

    </div>
  </section><!-- End About Section -->
@endsection