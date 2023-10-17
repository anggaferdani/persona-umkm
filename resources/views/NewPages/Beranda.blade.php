@extends('NewPagesTemplate.NavbarLengkap')
@section('judul_tab','Beranda')

@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Beranda.css')}}">

<div class="header"  style="padding-top: 2.75rem;">
    <img src="{{asset('../../images/banner_persona.png')}}">
</div>


<div class="container mt-3">
    <div class="d-flex align-items-start justify-content-between responsive-tab-menu">
        <ul class="nav flex-column nav-pills nav-tabs-dropdown me-3" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <div class="headerNavTabs p-3 text-center">
                <p>Jelajahi Tipe Anda</p>
            </div>
            <li class="nav-item">
                <a class="nav-link text-start active" href="#" id="v-pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <p>Hasil</p>
                </a>
                <div class="hr-beranda"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-start" href="#" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <p>Level Digitalisasi UMKM</p>
                </a>
                <div class="hr-beranda"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-start" href="#" id="v-pills-strategi-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-strategi" role="tab" aria-controls="v-pills-strategi"
                    aria-selected="false">
                    <p>Strategi Digital</p>
                </a>
                <div class="hr-beranda"></div>
            </li>
        </ul>
        <div class="tab-content responsive-tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
                tabindex="0">
                <div class="row">
                    <div class="col-sm-2 d-sm-block d-none text-end parentImageHasil">
                        <img src="{{asset('../../images/hasilIcon.png')}}">
                    </div>
                    <div class="col-sm-10 col-11">
                        <p class="fw-bold">Persona Brand Anda :</p>
                        @switch($bpamax->brand_personality_aaker)
                            @case('average_sincerity')
                            <h3 class="text-blue fw-bolder">SINCERITY</h3>
                            <p class="mt-3">SINCERITY adalah orang yang sangat tulus, siap mengambil
                                    tindakan untuk melakukan apa yang mereka rasa benar.</p>
                            @break
                            @case('average_competence')
                            <h3 class="text-blue fw-bolder">COMPETENCE</h3>
                            <p class="mt-3">COMPETENCE adalah orang yang Handal, Bertanggung Jawab, Cerdas, dan Efisien.</p>
                            @break
                            @case('average_excitement')
                            <h3 class="text-blue fw-bolder">EXCITEMENT</h3>
                            <p class="mt-3">EXCITEMENT adalah orang yang Suka Berimajinasi, Suka Hal Baru, Inspiratif, dan Bersemangat.</p>
                            @break
                            @case('average_sophistication')
                            <h3 class="text-blue fw-bolder">SOPHISTICATION</h3>
                            <p class="mt-3">SOPHISTICATION adalah orang yang Romantis, Memiliki Daya Tarik, Menawan, dan Mempesona.</p>
                            @break
                            @default
                            <h3 class="text-blue fw-bolder">RUGGEDNESS</h3>
                            <p class="mt-3">RUGGEDNESS adalah orang yang Maskulin, Terbuka, Aktif, dan Tangguh.</p>
                        @endswitch
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
                        <div class="card-precentage p-3 mt-3">
                        <p style="color: #1C8E00;" class="fw-bold mb-2">{{$bpasincepercent}}% RASA</p>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: {{$bpasincepercent}}%; background-color: #1C8E00;" aria-valuenow="{{$bpasincepercent}}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                                <div class="progress-bar bg-secondary" style="width: {{100 - $bpasincepercent}}%" aria-valuenow="{{100 - $bpasincepercent}}" aria-valuemin="0" aria-valuemax="100">
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
                        <div class="card-precentage p-3 mt-3">
                            <p style="color: #AD000A;" class="fw-bold mb-2">{{$bpacompepercent}}% MENILAI</p>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: {{$bpacompepercent}}%; background-color: #AD000A;" aria-valuenow="{{$bpacompepercent}}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                                <div class="progress-bar bg-secondary" style="width: {{100 - $bpacompepercent}}%" aria-valuenow="{{100 - $bpacompepercent}}"  aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <div class="precentage d-flex justify-content-between">
                                <div class="left text-start text-primary">
                                    <p style="color: #AD000A;" class="fw-bold">{{$bpacompepercent}}%</p>
                                    <p style="color: #AD000A;">MENILAI</p>
                                </div>
                                <div class="right text-end">
                                    <p class="fw-bold">{{100 - $bpacompepercent}}%</p>
                                    <p>PENCARIAN</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-precentage p-3 mt-3">
                        <p style="color: #D88100;" class=" fw-bold mb-2">{{$bparugpercent}}% GEJOLAK</p>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: {{$bparugpercent}}%; background-color: #D88100;" aria-valuenow="{{$bparugpercent}}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                                <div class="progress-bar bg-secondary" style="width: {{100 - $bparugpercent}}%" aria-valuenow="{{100 - $bparugpercent}}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <div class="precentage d-flex justify-content-between">
                                <div class="left text-start text-primary">
                                    <p style="color: #D88100;" class="fw-bold">{{$bparugpercent}}%</p>
                                    <p style="color: #D88100;">GEJOLAK</p>
                                </div>
                                <div class="right text-end">
                                    <p class="fw-bold">{{100 - $bparugpercent}}%</p>
                                    <p>ASERTIF</p>
                                </div>
                            </div>
                        </div>
                        @switch($bpamax->brand_personality_aaker)
                            @case('average_sincerity')
                                <h3 class="text-blue fw-bolder my-3">SINCERITY</h3>
                                <div class="textLong mt-3">
                                    <p class="fw-bold">Reseptif</p>
                                    <p>Tokoh sincerity mempunyai pendapat yang kuat, tetapi mereka tidak berpikiran tertutup.
                                        Mereka menyadari pentingnya membiarkan orang lain mengekspresikan diri mereka
                                        sepenuhnya. Bahkan ketika Protagonis tidak setuju dengan seseorang, mereka mengakui hak
                                        orang tersebut untuk menyuarakan kebenaran mereka.</p>
                                </div>
                            @break
                            @case('average_competence')
                                <h3 class="text-blue fw-bolder my-3">COMPETENCE</h3>
                                <div class="textLong mt-3">
                                    <p class="fw-bold">Reseptif</p>
                                    <p>Tokoh competence mempunyai pendapat yang kuat, tetapi mereka tidak berpikiran tertutup.
                                        Mereka menyadari pentingnya membiarkan orang lain mengekspresikan diri mereka
                                        sepenuhnya. Bahkan ketika Protagonis tidak setuju dengan seseorang, mereka mengakui hak
                                        orang tersebut untuk menyuarakan kebenaran mereka.</p>
                                </div>
                            @break
                            @case('average_excitement')
                            <h3 class="text-blue fw-bolder">EXCITEMENT</h3>
                                <div class="textLong mt-3">
                                    <p class="fw-bold">Reseptif</p>
                                    <p>Tokoh excitement mempunyai pendapat yang kuat, tetapi mereka tidak berpikiran tertutup.
                                        Mereka menyadari pentingnya membiarkan orang lain mengekspresikan diri mereka
                                        sepenuhnya. Bahkan ketika Protagonis tidak setuju dengan seseorang, mereka mengakui hak
                                        orang tersebut untuk menyuarakan kebenaran mereka.</p>
                                </div>
                            @break
                            @case('average_sophistication')
                            <h3 class="text-blue fw-bolder">SOPHISTICATION</h3>
                                <div class="textLong mt-3">
                                    <p class="fw-bold">Reseptif</p>
                                    <p>Tokoh sophistication mempunyai pendapat yang kuat, tetapi mereka tidak berpikiran tertutup.
                                        Mereka menyadari pentingnya membiarkan orang lain mengekspresikan diri mereka
                                        sepenuhnya. Bahkan ketika Protagonis tidak setuju dengan seseorang, mereka mengakui hak
                                        orang tersebut untuk menyuarakan kebenaran mereka.</p>
                                </div>
                            @break
                            @default
                            <h3 class="text-blue fw-bolder">RUGGEDNESS</h3>
                                <div class="textLong mt-3">
                                    <p class="fw-bold">Reseptif</p>
                                    <p>Tokoh ruggedness mempunyai pendapat yang kuat, tetapi mereka tidak berpikiran tertutup.
                                        Mereka menyadari pentingnya membiarkan orang lain mengekspresikan diri mereka
                                        sepenuhnya. Bahkan ketika Protagonis tidak setuju dengan seseorang, mereka mengakui hak
                                        orang tersebut untuk menyuarakan kebenaran mereka.</p>
                                </div>
                        @endswitch
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                tabindex="0">
                <!-- Nav pills -->
                <ul class="nav nav-pills" role="tablist" id="navNTabs">
                    @if($level)
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#anda">
                            <p>Level Anda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#basic">
                            <p>Basic</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#intermediate">
                            <p>Intermediate</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#advance">
                            <p>Advance</p>
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#basic">
                            <p>Basic</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#intermediate">
                            <p>Intermediate</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#advance">
                            <p>Advance</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#anda">
                            <p>Level Anda</p>
                        </a>
                    </li>
                    @endif
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    @if(!$level)
                    <div id="anda" class="container tab-pane fade"><br>
                        @if(!$level)
                            <button type="button" class="btn btn-sm btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModalpesan">
                                Tentukan Level Anda
                            </button>
                        @else
                            <h4 class="fw-bold">Level Digital Anda: 
                                @if($level->team = 'tidak' && $level->ecommerce == 'tidak' && $level->landing_page == 'tidak')
                                <span class="text-primary">Basic</span>
                                @elseif($level->team = 'tidak' && $level->ecommerce == 'tidak' && $level->landing_page == 'iya')
                                <span class="text-primary">Intermediate</span>
                                @elseif($level->team = 'iya' && $level->ecommerce == 'iya' && $level->landing_page == 'iya')
                                <span class="text-primary">Advance</span>
                                @elseif($level->team = 'iya' && $level->ecommerce == 'tidak' && $level->landing_page == 'iya')
                                <span class="text-primary">Advance</span>
                                @elseif($level->team = 'iya' && $level->ecommerce == 'iya' && $level->landing_page == 'tidak')
                                <span class="text-primary">Advance</span>
                                @endif
                            </h4>
                        @endif
                        @if($level)
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_design_thinking.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Tools Design Thinking sederhana</p>
                                    <p>Anda Sudah Memiliki Merk Dengan Nama {{$level->merk}}</p>
                                </div>
                            </div>
                        </div>
                        @if($level->whatsapp_bisnis == 'sudah')
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_whatsapp.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Whatsapp</p>
                                    <p>Anda Telah Menggunakan Whatsapp Business Untuk Merk Anda</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($level->gbusiness == 'iya')
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_gobusines.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Google My Business</p>
                                    <p>Merk Anda Sudah Menggunakan Google Business</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($level->landing_page == 'iya')
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_web.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Landing Page</p>
                                    <p>Merk Anda Telah Memiliki Website Katalog</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_seo.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">SEO</p>
                                    <p>Merk Anda Memiliki Keyword Penting</p>
                                </div>
                            </div>
                        </div>
                        @if($level->ecommerce == 'iya')
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_ecommerce.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">E - Commerce</p>
                                    <p>Merk Anda Telah Menggunakan E-Commerce</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($level->sosmed == 'iya')
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_sosmed.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Sosial Media</p>
                                    <p>Merk Anda Telah Menggunakan Social Media</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($level->team == 'iya')
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_tcreative.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Team Creative</p>
                                    <p>Bisnis Anda Telah Memiliki Team Untuk Merk Anda</p>
                                </div>
                            </div>
                        </div>
                        @endif
                            <button type="button" class="btn btn-sm btn-primary fw-bold mt-3" data-bs-toggle="modal" data-bs-target="#exampleModalpesan">
                                    Kerjakan Ulang Test Level
                            </button>
                        @endif
                    </div>
                    @else
                    <div id="anda" class="container tab-pane active"><br>
                        @if(!$level)
                            <button type="button" class="btn btn-sm btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModalpesan">
                                Tentukan Level Anda
                            </button>
                        @else
                            <h4 class="fw-bold">Level Digital Anda: 
                                @if($level->team = 'tidak' && $level->ecommerce == 'tidak' && $level->landing_page == 'tidak')
                                <span class="text-primary">Basic</span>
                                @elseif($level->team = 'tidak' && $level->ecommerce == 'tidak' && $level->landing_page == 'iya')
                                <span class="text-primary">Intermediate</span>
                                @elseif($level->team = 'iya' && $level->ecommerce == 'iya' && $level->landing_page == 'iya')
                                <span class="text-primary">Advance</span>
                                @elseif($level->team = 'iya' && $level->ecommerce == 'tidak' && $level->landing_page == 'iya')
                                <span class="text-primary">Advance</span>
                                @elseif($level->team = 'iya' && $level->ecommerce == 'iya' && $level->landing_page == 'tidak')
                                <span class="text-primary">Advance</span>
                                @endif
                            </h4>
                        @endif
                        @if($level)
                            <div class="textBasic mt-3">
                                <div class="d-flex">
                                    <div class="">
                                        <img src="{{asset('../../images/level_design_thinking.png')}}" alt="">
                                    </div>
                                    <div class="my-auto ms-3">
                                        <p class="fw-bold">Tools Design Thinking sederhana</p>
                                        <p>Anda Sudah Memiliki Merk Dengan Nama {{$level->merk}}</p>
                                    </div>
                                </div>
                            </div>
                            @if($level->whatsapp_bisnis == 'sudah')
                            <div class="textBasic mt-3">
                                <div class="d-flex">
                                    <div class="">
                                        <img src="{{asset('../../images/level_whatsapp.png')}}" alt="">
                                    </div>
                                    <div class="my-auto ms-3">
                                        <p class="fw-bold">Whatsapp</p>
                                        <p>Anda Telah Menggunakan Whatsapp Business Untuk Merk Anda</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($level->gbusiness == 'iya')
                            <div class="textBasic mt-3">
                                <div class="d-flex">
                                    <div class="">
                                        <img src="{{asset('../../images/level_gobusines.png')}}" alt="">
                                    </div>
                                    <div class="my-auto ms-3">
                                        <p class="fw-bold">Google My Business</p>
                                        <p>Merk Anda Sudah Menggunakan Google Business</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($level->landing_page == 'iya')
                            <div class="textBasic mt-3">
                                <div class="d-flex">
                                    <div class="">
                                        <img src="{{asset('../../images/level_web.png')}}" alt="">
                                    </div>
                                    <div class="my-auto ms-3">
                                        <p class="fw-bold">Landing Page</p>
                                        <p>Merk Anda Telah Memiliki Website Katalog</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="textBasic mt-3">
                                <div class="d-flex">
                                    <div class="">
                                        <img src="{{asset('../../images/level_seo.png')}}" alt="">
                                    </div>
                                    <div class="my-auto ms-3">
                                        <p class="fw-bold">SEO</p>
                                        <p>Merk Anda Memiliki Keyword Penting</p>
                                    </div>
                                </div>
                            </div>
                            @if($level->ecommerce == 'iya')
                            <div class="textBasic mt-3">
                                <div class="d-flex">
                                    <div class="">
                                        <img src="{{asset('../../images/level_ecommerce.png')}}" alt="">
                                    </div>
                                    <div class="my-auto ms-3">
                                        <p class="fw-bold">E - Commerce</p>
                                        <p>Merk Anda Telah Menggunakan E-Commerce</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($level->sosmed == 'iya')
                            <div class="textBasic mt-3">
                                <div class="d-flex">
                                    <div class="">
                                        <img src="{{asset('../../images/level_sosmed.png')}}" alt="">
                                    </div>
                                    <div class="my-auto ms-3">
                                        <p class="fw-bold">Sosial Media</p>
                                        <p>Merk Anda Telah Menggunakan Social Media</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($level->team == 'iya')
                            <div class="textBasic mt-3">
                                <div class="d-flex">
                                    <div class="">
                                        <img src="{{asset('../../images/level_tcreative.png')}}" alt="">
                                    </div>
                                    <div class="my-auto ms-3">
                                        <p class="fw-bold">Team Creative</p>
                                        <p>Bisnis Anda Telah Memiliki Team Untuk Merk Anda</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        <button type="button" class="btn btn-sm btn-primary fw-bold mt-3" data-bs-toggle="modal" data-bs-target="#exampleModalpesan">
                                Kerjakan Ulang Test Level
                        </button>
                        @endif
                    </div>
                    @endif

                    @if(!$level)
                    <div id="basic" class="container tab-pane active"><br>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_design_thinking.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Tools Design Thinking sederhana</p>
                                    <p>Bikin Merk dan narasi bisnis</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_whatsapp.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Whatsapp</p>
                                    <p>Akun Bisnis WhatsApp dan WhatsApp katalog</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_gobusines.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Google My Business</p>
                                    <p>Lokasi Penjualan atau rumah UMKM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div id="basic" class="container tab-pane fade"><br>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_design_thinking.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Tools Design Thinking sederhana</p>
                                    <p>Bikin Merk dan narasi bisnis</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_whatsapp.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Whatsapp</p>
                                    <p>Akun Bisnis WhatsApp dan WhatsApp katalog</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_gobusines.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Google My Business</p>
                                    <p>Lokasi Penjualan atau rumah UMKM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div id="intermediate" class="container tab-pane fade"><br>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_design_thinking.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Tools Design Thinking sederhana</p>
                                    <p>Merk dengan Tagline yang relate</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_whatsapp.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Whatsapp</p>
                                    <p>Akun Bisnis WhatsApp dan katalog lengkap dengan MILSHKE</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_gobusines.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Google My Business</p>
                                    <p>Merawat dan menjawab semua review</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_web.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Landing Page</p>
                                    <p>Mulai Landing Page Sederhana</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_seo.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">SEO</p>
                                    <p>GMB, maintain satu keyword</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_sosmed.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Sosial Media</p>
                                    <p>Instagram dan TikTok</p>
                                </div>
                            </div>
                        </div>
                    </div>

                       

                    <div id="advance" class="container tab-pane fade"><br>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_design_thinking.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Tools Design Thinking sederhana</p>
                                    <p>Merk yang kuat dengan terus dipantau “ Kesehatannya “</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_whatsapp.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Whatsapp</p>
                                    <p>Akun Bisnis WhatsApp dan katalog verified lengkap dengan MILSHKE</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_gobusines.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Google My Business</p>
                                    <p>Di aktivitas semua reseller</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_web.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">Landing Page</p>
                                    <p>Website yang meyakinkan</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_seo.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">SEO</p>
                                    <p>3 - 5 Keyword penting</p>
                                </div>
                            </div>
                        </div>
                        <div class="textBasic mt-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('../../images/level_ecommerce.png')}}" alt="">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="fw-bold">E - Commerce</p>
                                    <p>WhatsApp, semua E - Commerce dengan supply Chain terintegrasi SIRCLO atau FORSTOCK</p>
                                </div>
                            </div>
                        </div>
                            <div class="textBasic mt-3">
                                <div class="d-flex">
                                    <div class="">
                                        <img src="{{asset('../../images/level_sosmed.png')}}" alt="">
                                    </div>
                                    <div class="my-auto ms-3">
                                        <p class="fw-bold">Sosial Media</p>
                                        <p>Facebook, Instagram, Tiktok, dan Linked In</p>
                                    </div>
                                </div>
                            </div>
                            <div class="textBasic mt-3">
                                <div class="d-flex">
                                    <div class="">
                                        <img src="{{asset('../../images/level_tcreative.png')}}" alt="">
                                    </div>
                                    <div class="my-auto ms-3">
                                        <p class="fw-bold">Team Creative</p>
                                        <p>Team besar dengan Brand Guidline yang tepat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="tab-pane fade" id="v-pills-strategi" role="tabpanel" aria-labelledby="v-pills-strategi-tab"
                tabindex="0">
                <!-- Nav pills -->
                <ul class="nav nav-pills" role="tablist" id="navNTabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#SocialMedia">
                            <p>Social Media</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#OnlineShop">
                            <p>Online Shop</p>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="SocialMedia" class="container tab-pane active"><br>
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/tiktokImage.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">TikTok</p>
                                <p>Sesuai dengan hasil test. Sosial Media
                                    yang tepat untuk Anda berjualan Online saat ini adalah TikTok</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/tiktokMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">TikTok</span> untuk saat ini platform paling
                                    cocok untuk anda
                                    berjualan.</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar w-75"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">95%</p>
                                </div>
                            </div>
                        </div>

                        <p class="fw-bold mt-4">#Hastag</p>
                        <p>Hastag yang di perlukan agar jualan mu cepat di
                            kenal:</p>
                       <div class="hastag d-flex gap-3 justify-content-between align-items-center flex-wrap">
                        <a href=""><p>#pakaianpria</p></a>
                        <a href=""><p>#pakaianpria</p></a>
                        <a href=""><p>#pakaianpria</p></a>
                        <a href=""><p>#pakaianpria</p></a>
                        <a href=""><p>#pakaianpria</p></a>
                        <a href=""><p>#pakaianpria</p></a>
                       </div>
                    </div>

                    <div id="OnlineShop" class="container tab-pane fade"><br>
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/shopeeImg.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">TikTok</p>
                                <p>Sesuai dengan hasil test. Sosial Media
                                    yang tepat untuk Anda berjualan Online saat ini adalah TikTok</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/shopeeMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">TikTok</span> untuk saat ini platform paling
                                    cocok untuk anda
                                    berjualan.</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar w-75"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">95%</p>
                                </div>
                            </div>
                        </div>

                        <p class="fw-bold mt-4">#Hastag</p>
                        <p>Hastag yang di perlukan agar jualan mu cepat di
                            kenal:</p>
                       <div class="hastag d-flex gap-3 justify-content-between align-items-center flex-wrap">
                        <a href=""><p>#pakaianpria</p></a>
                        <a href=""><p>#pakaianpria</p></a>
                        <a href=""><p>#pakaianpria</p></a>
                        <a href=""><p>#pakaianpria</p></a>
                        <a href=""><p>#pakaianpria</p></a>
                        <a href=""><p>#pakaianpria</p></a>
                       </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalpesan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalpesanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalpesanLabel">Level Digital Umkm</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ url('/umkm/level-umkm') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1">Merk Anda<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Input Merk Name..." name="merk">
                        @error('merk')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Whatsapp Bisnis Anda Sudah Terverified?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="belum" class="form-check-input" id="exampleInputUsername1 " name="whatsapp_bisnis"><span class="me-2">
                            Belum
                        </span>
                        <input type="radio" value="sudah" class="form-check-input" id="exampleInputUsername1 " name="whatsapp_bisnis"><span class="me-2">
                            Sudah
                        </span>
                        @error('whatsapp_bisnis')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Merk Anda Menggunakan Google Business?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" id="exampleInputUsername1 " name="gbusiness"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" id="exampleInputUsername1 " name="gbusiness"><span class="me-2">
                            Tidak
                        </span>
                        @error('gbusiness')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Merk Anda Memiliki Website?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" id="exampleInputUsername1 " name="sosmed"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" id="exampleInputUsername1 " name="sosmed"><span class="me-2">
                            tidak
                        </span>
                        @error('sosmed')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Merk Anda Memiliki Katalog Di Social Media Seperti Facebook Dan Instagram?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" id="exampleInputUsername1 " name="landing_page"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" id="exampleInputUsername1 " name="landing_page"><span class="me-2">
                            tidak
                        </span>
                        @error('landing_page')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Merk Anda Menggunakan E Commerce Seperti Shopee Atau Tokopedia?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" id="exampleInputUsername1 " name="ecommerce"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" id="exampleInputUsername1 " name="ecommerce"><span class="me-2">
                            tidak
                        </span>
                        @error('ecommerce')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Merk Anda Memiliki Team Creative?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" id="exampleInputUsername1 " name="team"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" id="exampleInputUsername1 " name="team"><span class="me-2">
                            tidak
                        </span>
                        @error('team')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="modal-footer gap-1">
                    <button type="button" class="btn btn-outline-warning btn-icon-text" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        <button type="submit" id="dis" class="btn btn-outline-primary btn-icon-text">
                            Submit
                        </button>
                    </div>
                </form>
      </div>
    </div>
  </div>
</div>
<div class="footerBeranda" style="margin-top: 5rem;">
    @include('NewPagesTemplate.Footer')
</div>




@endsection
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src="text/javascript"></script>
<script>
    < script >
        $('.nav-tabs-dropdown')
        .on("click", ".nav-link:not('.active')", function (event) {
            // alert('e');
            $(this).closest('ul').removeClass("open");
        })
        .on("click", ".nav-link.active", function (event) {
            // alert('e');
            $(this).closest('ul').toggleClass("open");
        });

</script>
</script>
