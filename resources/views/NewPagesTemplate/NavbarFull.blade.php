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
            @if(Auth::user()->role == 3)
            <a class="nav-link text-start" aria-current="page" href="/umkm/beranda"><p>Hasil</p></a>
            <a class="nav-link text-start" href="/umkm/marketer"><p>Marketer</p></a>
            <a class="nav-link text-start" href="{{ route('umkm.ai') }}"><p>AI <span class="badge bg-primary">NEW</span></p></a>
            @elseif(Auth::user()->role == 4)
            <a class="nav-link text-start" aria-current="page" href="/marketer/beranda"><p>Hasil</p></a>
            <a class="nav-link text-start" href="/marketer/umkm"><p>Umkm</p></a>
            @endif
          </div>
          <div class="navbarNotif d-flex align-items-center gap-4 my-md-0 my-3">
            @if(Auth::user()->role == 3)
            <div class="d-flex gap-2"><i class="fa-solid fa-coins text-primary"></i><span class="small"> {{ Auth::user()->credits }}</span></div>
              <div><a href="/umkm/profile"><i class="fa-solid fa-user"></i></a></div>
            @elseif(Auth::user()->role == 4)
              <div><a href="/marketer/profile"><i class="fa-solid fa-user"></i></a></div>
            @endif
          </div>
        </div>
       
      </div>
    </div>
  </nav>