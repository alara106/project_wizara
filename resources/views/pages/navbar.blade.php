<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container d-flex justify-content-center align-items-center"> 
    <img src="logo1.jpg" alt="logo1" width="50" height="57" class="mx-5 ">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link px-5" href="{{ route('home.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-5" href="{{ route('secteur.index') }}">Secteur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-5" href="{{ route('niveau.index') }}">Niveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-5" href="{{ route('opperateur.index') }}">Opperateur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-5" href="{{ route('cadre.index') }}">Cadre delaboration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-5" href="{{ route('programme.index') }}">Programme</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
