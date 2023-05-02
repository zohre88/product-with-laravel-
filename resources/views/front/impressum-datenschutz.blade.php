@extends('front.layout.master')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>{{ $page }}</h2>
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

      <div class="row">
          <h3>Personenbezogene Daten</h3>
          <p class="fst-italic">Wir liefern ausschliesslich an gewerbliche Kunden. Sollten Sie als Privatperson mit einer Frage oder einem Anliegen an uns treten, gilt folgendes:
            Wir behalten die Daten von Ihnen, die zur Bearbeitung Ihrer Anfrage nötig sind. Wenn Sie uns eine E-Mail schreiben, wird diese nach Beantwortung / Bearbeitung in unserem Postfach abgelegt und nicht sofort gelöscht, falls künftig weitere Nachfragen, die darauf Bezug nehmen, von Ihnen kommen. Die Nachrichten werden nach fünf Jahren gelöscht. Dritte haben zu unserem elektronischen Postfach keinen Zugang. Daten werden an Dritte keinesfalls weitergegeben. Auf Wunsch werden wir Ihre bei uns vorhandenen personenbezogenen Daten an Sie übermitteln und/oder löschen.
            Eine andere Aufbewahrungsform als das E-Mail-Postfach für Ihre Daten führen wir nicht.</p>
            <h3>Eingebettete Inhalte von anderen Websites</h3>
            <p class="fst-italic">
                Beiträge auf dieser Website können eingebettete Inhalte beinhalten (z. B. Videos, Bilder, Beiträge etc.). Eingebettete Inhalte von anderen Websites verhalten sich exakt so, als ob der Besucher die andere Website besucht hätte.

Diese Websites können Daten über Sie sammeln, Cookies benutzen, zusätzliche Tracking-Dienste von Dritten einbetten und Ihre Interaktion mit diesem eingebetteten Inhalt aufzeichnen, inklusive Ihrer Interaktion mit dem eingebetteten Inhalt, falls Sie ein Konto haben und auf dieser Website angemeldet sind.
            </p>
            <h3>Analysedienst</h3>
            <p class="fst-italic">Angaben zur Seitennutzung (Besucherzahlen) werden vor deren lokaler Speicherung anonymisiert. Wir benutzen dazu WP Statistics: Cookies (Textdateien), die auf Ihrem Computer gespeichert werden, ermöglichen eine Analyse der Benutzung der Website. Die durch Cookies erzeugten Informationen über Ihre Benutzung dieses Internetangebotes werden auf einem Server in den USA gespeichert. Die IP-Adresse wird sofort nach der Verarbeitung und vor deren Speicherung anonymisiert. Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich nutzen können.</p>
      </div>

    </div>
  </section><!-- End About Section -->
@endsection