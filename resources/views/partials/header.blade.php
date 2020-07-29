<header>

  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand logo" href="{{ route('home') }}">
      <img src="{{ asset('img/logo.png') }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">HOME<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('policy') }}">PRIVACY-POLICY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CORSO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">DOPO IL CORSO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LEZIONE GRATUITA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#"></a>
        </li>
        <li>
          <button class="candidati btn btn-sm btn-outline-secondary align-right" type="button">CANDIDATI ORA</button>
        </li>
      </ul>
    </div>
</nav>
</header>
