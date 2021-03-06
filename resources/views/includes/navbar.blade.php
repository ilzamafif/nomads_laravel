  <!--start navbar -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="#">
        <img src="{{ url('frontend/images/logo_nomads.png') }}" alt="logo NOMADS">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Paket Travel</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
              Services
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-item" href="#">VISA</div>
              <div class="dropdown-item" href="#">PASPORT</div>
            </div>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Testimonial</a>
          </li>
        </ul>

        @guest
        <!-- mobile button -->
        <form class="form-inline d-sm-block d-md-none">
          <button type="button" class="btn btn-primary btn-login my-2 my-sm-0 px-4" onclick="event.preventDefault(); location.href=`{{ url('login') }}`;">Masuk</button>
        </form>

        <!-- dekstop button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <button type="button" class="btn btn-primary btn-login btn-navbar-right my-2 my-sm-0 px-4" onclick="event.preventDefault(); location.href=`{{ url('login') }}`;">Masuk</button>
        </form>
        @endguest

        @auth
        <!-- mobile button -->
        <form action="{{ url('logout') }}" method="POST" class="form-inline d-sm-block d-md-none">
          @csrf
          <button type="submit" class="btn btn-primary btn-login my-2 my-sm-0 px-4">Keluar</button>
        </form>

        <!-- dekstop button -->
        <form action="{{ url('logout') }}" method="POST" class="form-inline my-2 my-lg-0 d-none d-md-block">
          @csrf
          <button type="submit" class="btn btn-primary btn-login btn-navbar-right my-2 my-sm-0 px-4">Keluar</button>
        </form>
        @endauth

      </div>
    </nav>
  </div>
  <!-- end navbar -->