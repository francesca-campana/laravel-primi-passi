@section('title')
  Home
@endsection
@extends('layouts.app')

@section('content')
  <main>
    <div class="jumbotron jumbo">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-6">
          <div class="teaser">
            <h1 class="display-4">DIVENTA <strong>SVILUPPATORE WEB</strong></h1>
            <p class="lead">Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>

            <ul class="lista">
              <li>6 mesi di corso intensivo online in diretta</li>
              <li>Nessuna competenza di programmazione richiesta</li>
              <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
            </ul>
          </div>

        </div>
        <div class="col-sm-12 col-lg-6">
          <div class="pc-black">
            <img src="{{ asset('img/pc-black.png') }}" alt="pc-black">
          </div>

        </div>
      </div>

    </div>
    </div>
  </main>

@endsection
