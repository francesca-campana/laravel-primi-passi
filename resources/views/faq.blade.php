@section('title')
  Faq
@endsection

@extends('layouts.app')

@section('content')
  <section class="jumbo-faq">
    <div class="container-fluid">
      <h2>Domande frequenti</h2>
      <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
    </div>
    </section>
    <section class="list-faq">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 before">
          <h3>Prima del corso</h3>
          @foreach ($faq_lista_prima as $faq)
            <div class="question">
              <h4>{{ $faq['question'] }}<i class="fas fa-plus open-faq"></i></h4>

              <p class="answer">{{ $faq['answer'] }}</p>
            </div>
          @endforeach
        </div>

        <div class="col-6 after">
          <h3>Dopo del corso</h3>
          @foreach ($faq_lista_dopo as $faq)
            <div class="question">
              <h4>{{ $faq['question'] }}<i class="fas fa-plus open-faq"></i></h4>
              <p class="answer">{{ $faq['answer'] }}</p>
            </div>
          @endforeach

        </div>

      </div>

    </div>
  </section>
@endsection
