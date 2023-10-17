@extends('Marketer.NavbarFull')
@section('judul_tab','Beranda')

@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Beranda.css')}}">

<div class="header"  style="padding-top: 2.75rem;">
    <img src="{{asset('../../images/banner_persona.png')}}">
</div>


<div class="container mt-3">
    <div class="row">
        <div class="row">
            <div class="col-lg-6 col-md-8 d-flex align-items-center gap-2">
                <div class="marketerIcon">
                    <img src="{{asset('../../images/hasilIcon.png')}}">
                </div>
               <div class="desc">
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
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-10">
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
            </div>
            <div class="col-sm-6 col-10">
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
            </div>
            <div class="col-sm-6 col-10">
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
            </div>
            <div class="col-sm-6 col-10">
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
            </div>
            <div class="col-sm-6 col-10" style="align-items: left">
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
            </div>
        </div>

        <div class="col-12">
            
                @switch($bpamax->brand_personality_aaker)
                    @case('average_sincerity')
                    <h3 class="text-blue fw-bolder my-3">SINCERITY</h3>
                    @break
                    @case('average_competence')
                    <h3 class="text-blue fw-bolder my-3">COMPETENCE</h3>
                    @break
                    @case('average_excitement')
                    <h3 class="text-blue fw-bolder my-3">EXCITEMENT</h3>
                    @break
                    @case('average_sophistication')
                    <h3 class="text-blue fw-bolder my-3">SOPHISTICATION</h3>
                    @break
                    @default
                    <h3 class="text-blue fw-bolder my-3">RUGGEDNESS</h3>
                @endswitch
            <div class="textLong mt-3">
                <p class="fw-bold">Reseptif</p>
                <p>Tokoh sincerity mempunyai pendapat yang kuat, tetapi mereka tidak berpikiran tertutup.
                    Mereka menyadari pentingnya membiarkan orang lain mengekspresikan diri mereka
                    sepenuhnya. Bahkan ketika Protagonis tidak setuju dengan seseorang, mereka mengakui hak
                    orang tersebut untuk menyuarakan kebenaran mereka.</p>
            </div>
            <div class="textLong mt-3">
                <p class="fw-bold">Reseptif</p>
                <p>Tokoh sincerity mempunyai pendapat yang kuat, tetapi mereka tidak berpikiran tertutup.
                    Mereka menyadari pentingnya membiarkan orang lain mengekspresikan diri mereka
                    sepenuhnya. Bahkan ketika Protagonis tidak setuju dengan seseorang, mereka mengakui hak
                    orang tersebut untuk menyuarakan kebenaran mereka.</p>
            </div>
            <div class="textLong mt-3">
                <p class="fw-bold">Reseptif</p>
                <p>Tokoh sincerity mempunyai pendapat yang kuat, tetapi mereka tidak berpikiran tertutup.
                    Mereka menyadari pentingnya membiarkan orang lain mengekspresikan diri mereka
                    sepenuhnya. Bahkan ketika Protagonis tidak setuju dengan seseorang, mereka mengakui hak
                    orang tersebut untuk menyuarakan kebenaran mereka.</p>
            </div>
            <div class="textLong mt-3">
                <p class="fw-bold">Reseptif</p>
                <p>Tokoh sincerity mempunyai pendapat yang kuat, tetapi mereka tidak berpikiran tertutup.
                    Mereka menyadari pentingnya membiarkan orang lain mengekspresikan diri mereka
                    sepenuhnya. Bahkan ketika Protagonis tidak setuju dengan seseorang, mereka mengakui hak
                    orang tersebut untuk menyuarakan kebenaran mereka.</p>
            </div>
            <div class="textLong mt-3">
                <p class="fw-bold">Reseptif</p>
                <p>Tokoh sincerity mempunyai pendapat yang kuat, tetapi mereka tidak berpikiran tertutup.
                    Mereka menyadari pentingnya membiarkan orang lain mengekspresikan diri mereka
                    sepenuhnya. Bahkan ketika Protagonis tidak setuju dengan seseorang, mereka mengakui hak
                    orang tersebut untuk menyuarakan kebenaran mereka.</p>
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
