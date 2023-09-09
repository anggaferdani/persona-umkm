@extends('Marketer.NavbarFull')
@section('judul_tab','Beranda')

@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Beranda.css')}}">

<div class="header"  style="padding-top: 2.75rem;">
    <img src="{{asset('../../images/bannerBeranda.png')}}">
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
                <h3 class="text-blue fw-bolder">SINCERITY</h3>
                <p class="mt-3">SINCERITY adalah orang yang sangat tulus, siap mengambil
                    tindakan untuk melakukan apa yang mereka rasa benar.</p>
               </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-6 col-10">
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
            </div>
            <div class="col-sm-6 col-10">
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
            </div>
        </div>

        <div class="col-12">
            

            <h3 class="text-blue fw-bolder my-3">SINCERITY</h3>
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
