@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Hasil Kuisioner')

@section('contentNoCenter')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Hasil.css')}}">

<div class="hasilContent">
    <div class="contentFlex mt-3">
      <div class="carousel">
        <div class="carousel-item text-center">
          <div class="mySlideContent py-5">
            <div class="row justify-content-center">
              <div class="col-10">
                <p>Persona Brand Anda:</p>
                <p class="fw-bold text-blue">SINCERITY</p>
                <div class="row justify-content-center">
                  <div class="col-md-4 col-10"> 
                    <div class="imageCover">
                      <img class="my-3" src="{{asset('../../images/HasilOrangTop.png')}}">
                    </div>
                  </div>
                </div>
                <p><span class="text-blue">SINCERITY</span> adalah orang yang sangat tulus,
                  siap mengambil tindakan untuk melakukan apa yang mereka rasa benar.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mySlideContent">
            <div class="title text-center py-4" style="background-color: #2388FF;">
              <p class="fw-bold text-white">PIKIRAN</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/pikiranImage.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p class="text-primary fw-bold mb-2">78% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: 78%" aria-valuenow="78"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">78%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">22%</p>
                          <p>INTROVERT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu ekstrover siap menikmati aktivitas kelompok dan menghargai interaksi sosial. Mereka cenderung antusias secara lahiriah dan mengekspresikan kegembiraan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mySlideContent">
            <div class="title text-center py-4" style="background-color: #9123FF;">
              <p class="fw-bold text-white">energi</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/energi.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p class="text-primary fw-bold mb-2">78% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: 78%" aria-valuenow="78"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">78%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">22%</p>
                          <p>INTROVERT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu ekstrover siap menikmati aktivitas kelompok dan menghargai interaksi sosial. Mereka cenderung antusias secara lahiriah dan mengekspresikan kegembiraan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mySlideContent">
            <div class="title text-center py-4" style="background-color: #1C8E00;">
              <p class="fw-bold text-white">ALAM</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/alam.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p class="text-primary fw-bold mb-2">78% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: 78%" aria-valuenow="78"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">78%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">22%</p>
                          <p>INTROVERT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu ekstrover siap menikmati aktivitas kelompok dan menghargai interaksi sosial. Mereka cenderung antusias secara lahiriah dan mengekspresikan kegembiraan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mySlideContent">
            <div class="title text-center py-4" style="background-color: #AD000A;">
              <p class="fw-bold text-white">TAKTIK</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/taktik.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p class="text-primary fw-bold mb-2">78% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: 78%" aria-valuenow="78"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">78%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">22%</p>
                          <p>INTROVERT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu ekstrover siap menikmati aktivitas kelompok dan menghargai interaksi sosial. Mereka cenderung antusias secara lahiriah dan mengekspresikan kegembiraan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mySlideContent">
            <div class="title text-center py-4" style="background-color: #D88100;">
              <p class="fw-bold text-white">IDENTITAS</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/taktik.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p class="text-primary fw-bold mb-2">78% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: 78%" aria-valuenow="78"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">78%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">22%</p>
                          <p>INTROVERT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu ekstrover siap menikmati aktivitas kelompok dan menghargai interaksi sosial. Mereka cenderung antusias secara lahiriah dan mengekspresikan kegembiraan mereka.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="w3-center text-center">
            {{-- <button class="dots-button demo" onclick="currentDiv(1)">&#8226;</button> 
            <button class="dots-button demo" onclick="currentDiv(2)">&#8226;</button> 
            <button class="dots-button demo" onclick="currentDiv(3)">&#8226;</button> 
            <button class="dots-button demo" onclick="currentDiv(4)">&#8226;</button> 
            <button class="dots-button demo" onclick="currentDiv(5)">&#8226;</button> 
            <button class="dots-button demo" onclick="currentDiv(6)">&#8226;</button>  --}}
            <div class="buttonNp">
              <div class="w3-section">
                <button class="carousel-prev"><p>❮  Sebelumnya</p></button>
                <button class="carousel-next"><p>Selanjutnya  ❯</p></button>
                <a class="carousel-done" href="/beranda"><p>Selesai  ❯</p></a>
              </div>
            </div>
            
        </div>
      </div>
      {{-- <div class="carousel-container">
        <div class="carousel">
          <div class="carousel-item active">
            <h1>HAIII 1</h1>
          </div>
          <div class="carousel-item">
            <h1>HAIII 2</h1>
          </div>
          <div class="carousel-item">
            <h1>HAIII 3</h1>
          </div>
        </div>
        <button class="carousel-prev">Previous</button>
        <button class="carousel-next">Next</button>
      </div> --}}
      
    </div>
</div>
<div class="FooterKuisioner" style="padding-top: 2.5rem;">
  @include('NewPagesTemplate.Footer')
</div>
@endsection
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script type="text/javascript"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
  const carousel = document.querySelector(".carousel");
  const prevButton = document.querySelector(".carousel-prev");
  const nextButton = document.querySelector(".carousel-next");
  const items = document.querySelectorAll(".carousel-item");
  let currentIndex = 0;

  let last = items.length;
  // console.log(last)
  function showItem(index) {
    items.forEach((item, i) => {
      if (i === index) {
        item.classList.add("active");
      } else {
        item.classList.remove("active");
      }
    });
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showItem(currentIndex);
    console.log(currentIndex)
    if (currentIndex == (last - 1)) {
      $( ".carousel-done" ).css("display", "block");
      $( ".carousel-next" ).css("display", "none");
    }else{
      $( ".carousel-done" ).css("display", "none");
      $( ".carousel-next" ).css("display", "block");
    }
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % items.length;
    showItem(currentIndex);
    if (currentIndex == (last - 1)) {
      $( ".carousel-done" ).css("display", "block");
      $( ".carousel-next" ).css("display", "none");
    }else{
      $( ".carousel-done" ).css("display", "none");
      $( ".carousel-next" ).css("display", "block");
    }
  }

  prevButton.addEventListener("click", prevSlide);
  nextButton.addEventListener("click", nextSlide);

  // Show the initial slide
  showItem(currentIndex);

  function cekLast(e) {
      if ($( ".carousel .carousel-item" ).eq(5).is(":visible")) {
        alert('test')
      } else {
      }
    
  }


});

    </script>