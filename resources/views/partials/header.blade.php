<header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand logo" href="#">
    <img src="{{ asset('img/logo.png') }}" alt="Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('policy') }}">Policy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Corso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
</header>
