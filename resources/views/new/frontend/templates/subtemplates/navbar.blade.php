<nav class="navbar navbar-expand-lg w-100" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('new/images/logo.png') }}" alt="" width="100">
    </a>
    <div class="d-flex d-sm-flex d-md-flex d-lg-none gap-2">
      <a href="{{ route('login') }}" class="btn rounded-pill px-3" style="background: linear-gradient(to right, #8C1AE5, #EC5AEF); border: none; color: white;">LOGIN</a>
      <button class="navbar-toggler border-0 rounded-circle p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="{{ asset('new/images/spaghetti.jpg') }}" alt="" width="40" class="img-fluid rounded-circle">
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link" style="color: #FB36FF !important;" href="#">BERANDA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff !important;" href="{{ route('login') }}">PERSONA UMKM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff !important;" href="{{ route('login') }}">AI <span class="badge bg-white text-dark">NEW</span></a>
        </li>
      </ul>
      <div class="d-none d-sm-none d-md-none d-lg-flex gap-2">
        <a href="{{ route('login') }}" type="button" class="btn rounded-pill px-3" style="background: linear-gradient(to right, #8C1AE5, #EC5AEF); border: none; color: white;">LOGIN</a>
        <div class=""><img src="{{ asset('new/images/spaghetti.jpg') }}" alt="" width="35" class="img-fluid rounded-circle"></div>
      </div>
    </div>
  </div>
</nav>