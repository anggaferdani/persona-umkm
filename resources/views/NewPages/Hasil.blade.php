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
                <p class="fw-bold text-blue">
                  @switch($bpamax->brand_personality_aaker)
                    @case('average_sincerity')
                      SINCERITY
                      @break
                    @case('average_competence')
                     COMPETENCE
                     @break
                    @case('average_excitement')
                      EXCITEMENT
                     @break
                    @case('average_sophistication')
                     SOPHISTICATION
                     @break
                     @default
                     RUGGEDNESS
                  @endswitch
                </p>
                <div class="row justify-content-center">
                  <div class="col-md-4 col-10"> 
                    <div class="imageCover">
                      <img class="my-3" src="{{asset('../../images/HasilOrangTop.png')}}">
                    </div>
                  </div>
                </div>
                <p>@switch($bpamax->brand_personality_aaker)
                    @case('average_sincerity')
                    <span class="text-blue">SINCERITY</span>  adalah orang yang Ramah, Dapat Dipercaya, dan Menyenangkan
                      @break
                    @case('average_competence')
                     <span class="text-blue">COMPETENCE</span>  adalah orang yang Handal, Bertanggung Jawab, Cerdas, dan Efisien
                     @break
                    @case('average_excitement')
                      <span class="text-blue">EXCITEMENT</span>  adalah orang yang Suka Berimajinasi, Suka Hal Baru, Inspiratif, dan Bersemangat
                     @break
                    @case('average_sophistication')
                     <span class="text-blue">SOPHISTICATION</span>  adalah orang yang Romantis, Memiliki Daya Tarik, Menawan, dan Mempesona
                     @break
                     @default
                     <span class="text-blue">RUGGEDNESS</span>  adalah orang yang Maskulin, Terbuka, Aktif, dan Tangguh
                  @endswitch
                  </p>
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
                  <p class="text-primary fw-bold mb-2">{{$bpasophispercent}}% EXTROVERT</p>
                  <div class="progress mb-3">
                      <div class="progress-bar bg-primary" style="width: {{$bpasophispercent}}%" aria-valuenow="{{$bpasophispercent}}"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: {{100 - $bpasophispercent}}%" aria-valuenow="{{100 - $bpasophispercent}}"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p class="fw-bold">{{$bpasophispercent}}%</p>
                          <p>EXTROVERT</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">{{100 - $bpasophispercent}}%</p>
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
              <p class="fw-bold text-white">ENERGI</p>
            </div>
            <div class="row justify-content-center py-sm-5 py-3">
              <div class="col-md-4 col-10 imageCover">
                <img src="{{asset('../../images/energi.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p style="color: #9123FF;" class=" fw-bold mb-2">{{$bpaexcipercent}}% INTUITIF</p>
                  <div class="progress mb-3">
                      <div class="progress-bar" style="width: {{$bpaexcipercent}}%; background-color: #9123FF;" aria-valuenow="{{$bpaexcipercent}}"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: {{100 - $bpaexcipercent}}%" aria-valuenow="{{100 - $bpaexcipercent}}"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p style="color: #9123FF;" class="fw-bold">{{$bpaexcipercent}}%</p>
                          <p style="color: #9123FF;">INTUITIF</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">{{100 - $bpaexcipercent}}%</p>
                          <p>OBSERVANT</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu yang intuitif sangat imajinatif, berpikiran terbuka, dan ingin tahu. Mereka menghargai orisinalitas dan fokus pada makna tersembunyi dan kemungkinan yang jauh.</p>
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
                  <p style="color: #1C8E00;" class="fw-bold mb-2">{{$bpasincepercent}}% RASA</p>
                  <div class="progress mb-3">
                      <div class="progress-bar" style="width: {{$bpasincepercent}}%; background-color: #1C8E00;" aria-valuenow="{{$bpasincepercent}}"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: {{100 - $bpasincepercent}}%" aria-valuenow="{{100 - $bpasincepercent}}"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start text-primary">
                          <p style="color: #1C8E00;" class="fw-bold">{{$bpasincepercent}}%</p>
                          <p style="color: #1C8E00;">RASA</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">{{100 - $bpasincepercent}}%</p>
                          <p>PEMIKIRAN</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Merasa individu menghargai ekspresi emosional dan kepekaan. Mereka sangat mementingkan empati, harmoni sosial, dan kerja sama.</p>
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
                  <p style="color: #AD000A;" class=" fw-bold mb-2">{{$bpacompepercent}}% MENILAI</p>
                  <div class="progress mb-3">
                      <div class="progress-bar" style="width: {{$bpacompepercent}}%; background-color: #AD000A;" aria-valuenow="{{$bpacompepercent}}"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: {{100 - $bpacompepercent}}%" aria-valuenow="{{100 - $bpacompepercent}}"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start ">
                          <p style="color: #AD000A;" class="fw-bold">{{$bpacompepercent}}%</p>
                          <p style="color: #AD000A;">MENILAI</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">{{100 - $bpacompepercent}}%</p>
                          <p>PENCARIAN</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Menilai individu sangat menentukan, menyeluruh, dan sangat terorganisir. Mereka menghargai kejelasan, prediktabilitas, dan penutupan, lebih memilih struktur dan perencanaan daripada spontanitas.</p>
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
                <img src="{{asset('../../images/identitas.png')}}">
              </div>
              <div class="col-md-6 col-10">
                <div class="card-precentage p-3 mt-3">
                  <p style="color: #D88100;" class=" fw-bold mb-2">{{$bparugpercent}}% GEJOLAK</p>
                  <div class="progress mb-3">
                      <div class="progress-bar" style="width: {{$bparugpercent}}%; background-color: #D88100;" aria-valuenow="{{$bparugpercent}}"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                      <div class="progress-bar bg-secondary" style="width: {{100 - $bparugpercent}}%" aria-valuenow="{{100 - $bparugpercent}}"
                          aria-valuemin="0" aria-valuemax="100">
                      </div>
                  </div>
                  <div class="precentage d-flex justify-content-between">
                      <div class="left text-start ">
                          <p style="color: #D88100;" class="fw-bold">{{$bparugpercent}}%</p>
                          <p style="color: #D88100;">GEJOLAK</p>
                      </div>
                      <div class="right text-end">
                          <p class="fw-bold">{{100 - $bparugpercent}}%</p>
                          <p>ASERTIF</p>
                      </div>
                  </div>
                </div>
                <p class="p-3">Individu yang bergejolak sadar diri dan peka terhadap stres. Mereka merasakan urgensi dalam emosi mereka dan cenderung didorong oleh kesuksesan, perfeksionis, dan bersemangat untuk berkembang.</p>
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