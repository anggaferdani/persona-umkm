<link rel="stylesheet" href=" {{ asset('../css/NewPagesTemplate/NavbarFull.css')}}">

<nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed w-100" style="z-index: 99;">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <img class="logoPersona" src="{{asset('../../images/logoPersona.png')}}">
        
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <p>
          <span class="navbar-toggler-icon"></span>
        </p>
      </button>
      <div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <div class="menu d-block d-lg-flex justify-content-start">
            <a class="nav-link text-start" aria-current="page" href="/hasil-umkm"><p>Hasil</p></a>
            <a class="nav-link text-start" href="/umkm"><p>UMKM</p></a>
          </div>
          <div class="navbarNotif d-flex align-items-center gap-4 my-md-0 my-3">
            <a href=""><i class="fa-solid fa-bell"></i></a>
            <a href="/profile"><i class="fa-solid fa-user"></i></a>
          </div>
        </div>
       
      </div>
    </div>
  </nav>