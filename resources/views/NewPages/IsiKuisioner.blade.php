@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Kuisioner Kemendikbud')

@section('contentNoCenter')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    var itemsPerPage = 3;
    var $contentContainer = $('#content-container');
    var $pagination = $('#pagination');
    var $percentageLabel = $('#percentage-label');
    var $content = $contentContainer.find('.content');

    var numItems = $content.length;
    var numPages = Math.ceil(numItems / itemsPerPage);

    // Initialize the pagination links
    for (var i = 1; i <= numPages; i++) {
        $pagination.append('<a href="#" class="page-link">' + i + '</a>');
    }

    // Show the first page of content
    $content.slice(0, itemsPerPage).show();

    // Display the percentage label
    updatePercentageLabel(1, numPages);

    // Handle pagination click event
    $pagination.on('click', '.page-link', function(event) {
        event.preventDefault();
        var page = $(this).text();
        $content.hide();
        var startIndex = (page - 1) * itemsPerPage;
        var endIndex = startIndex + itemsPerPage;
        $content.slice(startIndex, endIndex).show();
        updatePercentageLabel(page, numPages);
    });

   
    
    // Function to update the percentage label
    function updatePercentageLabel(currentPage, totalPages) {
        let percentage = ((currentPage / totalPages) * 100);
        
        console.log(percentage)
        $percentageLabel.text( '(' + percentage + '%)' );
        $(".percentage-bro").text( percentage + '%') ;
        document.getElementById('progress-bar-top').style.width = percentage + '%';
    }
});

</script>
<link rel="stylesheet" href=" {{ asset('../css/NewPages/IsiKuisioner.css')}}">

<div class="isiKuisionerContent">
    <div class="header">
       <div class="container">
        @if(Auth::user()->role == 3)
        <h3 class="text-center text-white mb-5 fw-bold">TENTUKAN PERSONA <br> BRAND ANDA</h3>
        @elseif(Auth::user()->role == 4)
        <h3 class="text-center text-white mb-5 fw-bold">TENTUKAN PERSONA <br> MARKETER ANDA</h3>
        @endif
        <div class="row justify-content-center">
            <div class=" col-10 col-sm-6 col-md-4 mt-2">
                <div class="card p-4 mx-sm-0 mx-2">
                    <div class="card-img d-flex justify-content-center mb-3">
                        <img src="{{asset('../../images/IsiKuisioner.png')}}">
                    </div>
                    <p>Jadilah diri sendiri dan jawab dengan
                        jujur untuk mengetahui tipe
                        kepribadian Anda.</p>
                </div>
            </div>
            <div class=" col-10 col-sm-6 col-md-4 mt-2">
                <div class="card p-4 mx-sm-0 mx-2">
                    <div class="card-img d-flex justify-content-center mb-3">
                        <img src="{{asset('../../images/keranjang.png')}}">
                    </div>
                    <p>Pelajari bagaimana tipe kepribadian Anda memengaruhi UMKM yang sedang anda bangun.</p>
                </div>
            </div>
            <div class=" col-10 col-sm-6 col-md-4 mt-2">
                <div class="card p-4 mx-sm-0 mx-2">
                    <div class="card-img d-flex justify-content-center mb-3">
                        <img src="{{asset('../../images/panahAtas.png')}}">
                    </div>
                    <p>Tumbuh menjadi orang yang Anda inginkan dengan Panduan Premium opsional Anda.</p>
                </div>
            </div>
        </div>
       </div>
      @if(Auth::user()->role == 3)
       <form action="{{ url('/umkm/kuisioner/store') }}" method="post">
        @csrf
            <div class="container">
                <p class="fw-bold text-center">Kerjakan Sesuai Kepribadian Diri Anda</p>
                <p class="fw-bold text-center">Keterangan 1: Tidak Setuju, 2: Kurang Setuju, 3: Cukup Setuju, 4: Setuju, 5: Sangat Setuju</p>
                <div class="bar-progress d-flex align-items-center gap-2">
                    <p class="fw-bold percentage-bro">
                    
                    </p>
                    <div class="progress w-100" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-blue" id="progress-bar-top"></div>
                    </div>
                </div>
                <div class="soal">
                <div id="content-container">
                    <div class="content row mt-4 foreach">
                        <div class="col-12">
                            <p class="fw-bold">1. Sincerity: orang yang dapat dipercaya dan berkomitmen tulus terhadap kesejahteraan pelanggannya.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Hangat dan ramah<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="sincerity_hangat_dan_ramah" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="sincerity_hangat_dan_ramah" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="sincerity_hangat_dan_ramah" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="sincerity_hangat_dan_ramah" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="sincerity_hangat_dan_ramah" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Penuh kasih sayang<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_penuh_kasih_sayang" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_penuh_kasih_sayang" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_penuh_kasih_sayang" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_penuh_kasih_sayang" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_penuh_kasih_sayang" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Tulus<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_tulus" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_tulus" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_tulus" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_tulus" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_tulus" value="5"><span class="form-check-label">5</span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Jujur<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_jujur" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_jujur" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_jujur" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_jujur" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_jujur" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Dapat dipercaya<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_dapat_dipercaya" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_dapat_dipercaya" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_dapat_dipercaya" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_dapat_dipercaya" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_dapat_dipercaya" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="content row mt-4 foreach">
                        <div class="col-12">
                            <p class="fw-bold">2. Competence: orang yang memberikan pelayanan yang dapat  diandalkan, dan dipercaya bahwa merek tersebut adalah otoritas dalam ceruk pasarnya.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Andal<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_andal" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_andal" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_andal" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_andal" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_andal" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Terpercaya<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_terpercaya" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_terpercaya" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_terpercaya" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_terpercaya" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_terpercaya" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Memiliki reputasi yang baik<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_memiliki_reputasi_yang_baik" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_memiliki_reputasi_yang_baik" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_memiliki_reputasi_yang_baik" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_memiliki_reputasi_yang_baik" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_memiliki_reputasi_yang_baik" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Berkinerja baik<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_berkinerja_baik" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_berkinerja_baik" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_berkinerja_baik" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_berkinerja_baik" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_berkinerja_baik" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Memberikan nilai<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="competence_memberikan_nilai" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="competence_memberikan_nilai" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="competence_memberikan_nilai" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="competence_memberikan_nilai" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="competence_memberikan_nilai" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="content row mt-4 foreach">
                        <div class="col-12">
                            <p class="fw-bold">3. Excitement: orang menciptakan rasa kegembiraan dan keterlibatan di antara audiens target mereka.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Inovatif<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_inovatif" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_inovatif" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_inovatif" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_inovatif" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_inovatif" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Menarik<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menarik" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menarik" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menarik" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menarik" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menarik" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Penuh semangat<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_penuh_semangat" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_penuh_semangat" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_penuh_semangat" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_penuh_semangat" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_penuh_semangat" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Menyenangkan<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menyenangkan" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menyenangkan" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menyenangkan" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menyenangkan" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menyenangkan" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Selalu ada yang baru<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_selalu_ada_yang_baru" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_selalu_ada_yang_baru" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_selalu_ada_yang_baru" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_selalu_ada_yang_baru" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_selalu_ada_yang_baru" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="content row mt-4 foreach">
                        <div class="col-12">
                            <p class="fw-bold">4. Sophistication: orang yang sering kali menonjolkan seni, keahlian, dan perhatian terhadap detail yang ada pada produk atau layanan mereka.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Elegan<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_elegan" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_elegan" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_elegan" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_elegan" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_elegan" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Berkelas<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_berkelas" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_berkelas" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_berkelas" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_berkelas" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_berkelas" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Bergaya<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_bergaya" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_bergaya" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_bergaya" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_bergaya" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_bergaya" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Canggih<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_canggih" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_canggih" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_canggih" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_canggih" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_canggih" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Mewah<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_mewah" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_mewah" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_mewah" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_mewah" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_mewah" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="content row mt-4 foreach">
                        <div class="col-12">
                            <p class="fw-bold">5. Ruggedness: orang yang menekankan ketangguhan sering kali bertujuan untuk menarik konsumen yang mencari produk yang tahan terhadap lingkungan yang menantang dan penggunaan yang lama.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Tangguh<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tangguh" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tangguh" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tangguh" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tangguh" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tangguh" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Berkelas<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berkelas" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berkelas" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berkelas" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berkelas" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berkelas" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Mandiri<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_mandiri" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_mandiri" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_mandiri" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_mandiri" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_mandiri" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Berani<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berani" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berani" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berani" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berani" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berani" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Tidak takut mengambil risiko<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tidak_takut_mengambil_risiko" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tidak_takut_mengambil_risiko" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tidak_takut_mengambil_risiko" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tidak_takut_mengambil_risiko" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tidak_takut_mengambil_risiko" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                    <div class="row justify-content-center mt-5">
                    <div class="col-md-6 col-sm-7 col-10 text-center">
                        <p class="fw-bold">Jenis Kelamin</p>
                        <p>Ini akan menentukan avatar Anda di layar hasil</p>
                        <select name="gender" required class="form-select p-sm-3 p-1 my-3 mx-auto" aria-label="Default select example">
                            <option disabled selected>Pilih kelamin Anda</option>
                            <option value="men">Laki-Laki</option>
                            <option value="women">Perempuan</option>
                        </select>
                    </div>
                </div>
                @if (session('error'))
                    <div class="text-danger text-center">
                        Isi Data Dengan Lengkap
                    </div>
                @endif
                <div class="btn-next d-flex justify-content-center mt-5">
                    <button type="submit" class="btn bg-blue d-flex align-items-center gap-2 justify-content-center py-sm-3 py-2 px-5" role="button">
                        <p>Lihat Hasil</p>
                        <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                        <p></p>
                    </button>
                </div>
                    </div>
                </div>
                <div id="pagination" class="d-flex gap-3">
                   
                </div>
                    
                </div>
                
            </div>
        </form>
        @elseif(Auth::user()->role == 4)
        <form action="{{ url('/marketer/kuisioner/store') }}" method="post">
        @csrf
            <div class="container">
                <p class="fw-bold text-center">Kerjakan Sesuai Kepribadian Diri Anda</p>
            <p class="fw-bold text-center">Keterangan 1: Tidak Setuju, 2: Kurang Setuju, 3: Cukup Setuju, 4: Setuju, 5: Sangat Setuju</p>
                <div class="bar-progress d-flex align-items-center gap-2">
                    <p class="fw-bold percentage-bro">
                    
                    </p>
                    <div class="progress w-100" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-blue" id="progress-bar-top"></div>
                    </div>
                </div>
                <div class="soal">
                <div id="content-container">
                    <div class="content row mt-4 foreach">
                        <div class="col-12">
                            <p class="fw-bold">1. Sincerity: sifat pribadi yang berharga yang melibatkan kejujuran dan ketulusan dalam tindakan dan interaksi dengan orang lain.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Hangat dan ramah<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="sincerity_hangat_dan_ramah" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="sincerity_hangat_dan_ramah" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="sincerity_hangat_dan_ramah" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="sincerity_hangat_dan_ramah" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="sincerity_hangat_dan_ramah" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Penuh kasih sayang<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_penuh_kasih_sayang" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_penuh_kasih_sayang" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_penuh_kasih_sayang" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_penuh_kasih_sayang" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_penuh_kasih_sayang" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Tulus<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_tulus" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_tulus" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_tulus" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_tulus" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_tulus" value="5"><span class="form-check-label">5</span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Jujur<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_jujur" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_jujur" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_jujur" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_jujur" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_jujur" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Dapat dipercaya<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_dapat_dipercaya" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_dapat_dipercaya" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_dapat_dipercaya" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_dapat_dipercaya" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sincerity_dapat_dipercaya" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="content row mt-4 foreach">
                        <div class="col-12">
                            <p class="fw-bold">2. Competence: seorang yang dipandang sangat terampil, dapat diandalkan, dan mampu memberikan kualitas yang konsisten.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Andal<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_andal" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_andal" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_andal" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_andal" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_andal" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Terpercaya<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_terpercaya" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_terpercaya" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_terpercaya" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_terpercaya" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_terpercaya" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Memiliki reputasi yang baik<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_memiliki_reputasi_yang_baik" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_memiliki_reputasi_yang_baik" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_memiliki_reputasi_yang_baik" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_memiliki_reputasi_yang_baik" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_memiliki_reputasi_yang_baik" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Berkinerja baik<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_berkinerja_baik" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_berkinerja_baik" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_berkinerja_baik" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_berkinerja_baik" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="competence_berkinerja_baik" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Memberikan nilai<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="competence_memberikan_nilai" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="competence_memberikan_nilai" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="competence_memberikan_nilai" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="competence_memberikan_nilai" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio"  name="competence_memberikan_nilai" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="content row mt-4 foreach">
                        <div class="col-12">
                            <p class="fw-bold">3. Excitement: kepribadian yang memiliki citra yang energik, dinamis, dan menawan.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Inovatif<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_inovatif" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_inovatif" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_inovatif" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_inovatif" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_inovatif" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Menarik<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menarik" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menarik" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menarik" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menarik" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menarik" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Penuh semangat<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_penuh_semangat" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_penuh_semangat" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_penuh_semangat" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_penuh_semangat" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_penuh_semangat" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Menyenangkan<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menyenangkan" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menyenangkan" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menyenangkan" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menyenangkan" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_menyenangkan" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Selalu ada yang baru<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_selalu_ada_yang_baru" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_selalu_ada_yang_baru" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_selalu_ada_yang_baru" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_selalu_ada_yang_baru" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="excitement_selalu_ada_yang_baru" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="content row mt-4 foreach">
                        <div class="col-12">
                            <p class="fw-bold">4. Sophistication: orang dengan pribadi elegan, halus, dan berbudaya.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Elegan<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_elegan" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_elegan" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_elegan" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_elegan" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_elegan" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Berkelas<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_berkelas" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_berkelas" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_berkelas" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_berkelas" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_berkelas" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Bergaya<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_bergaya" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_bergaya" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_bergaya" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_bergaya" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_bergaya" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Canggih<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_canggih" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_canggih" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_canggih" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_canggih" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_canggih" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Mewah<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_mewah" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_mewah" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_mewah" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_mewah" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="sophistication_mewah" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="content row mt-4 foreach">
                        <div class="col-12">
                            <p class="fw-bold">5. Ruggedness: orang dengan kepribadian yang tangguh, kokoh, dan kuat.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Tangguh<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tangguh" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tangguh" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tangguh" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tangguh" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tangguh" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Berkelas<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berkelas" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berkelas" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berkelas" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berkelas" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berkelas" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Mandiri<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_mandiri" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_mandiri" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_mandiri" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_mandiri" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_mandiri" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Berani<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berani" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berani" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berani" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berani" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_berani" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-4 mt-2">
                                <p class="form-label required">Tidak takut mengambil risiko<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-sm-6 col-8">
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tidak_takut_mengambil_risiko" value="1"><span class="form-check-label">1</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tidak_takut_mengambil_risiko" value="2"><span class="form-check-label">2</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tidak_takut_mengambil_risiko" value="3"><span class="form-check-label">3</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tidak_takut_mengambil_risiko" value="4"><span class="form-check-label">4</span></p>
                                <p class="form-check form-check-inline"><input class="form-check-input" required type="radio" name="ruggedness_tidak_takut_mengambil_risiko" value="5"><span class="form-check-label">5</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                    <div class="row justify-content-center mt-5">
                    <div class="col-md-6 col-sm-7 col-10 text-center">
                        <p class="fw-bold">Jenis Kelamin</p>
                        <p>Ini akan menentukan avatar Anda di layar hasil</p>
                        <select name="gender" required class="form-select p-sm-3 p-1 my-3 mx-auto" aria-label="Default select example">
                            <option selected disabled>Pilih kelamin Anda</option>
                            <option value="men">Laki-Laki</option>
                            <option value="women">Perempuan</option>
                        </select>
                    </div>
                </div>
                @if (session('error'))
                    <div class="text-danger text-center">
                        Isi Data Dengan Lengkap
                    </div>
                @endif
                <div class="btn-next d-flex justify-content-center mt-5">
                    <button type="submit" class="btn bg-blue d-flex align-items-center gap-2 justify-content-center py-sm-3 py-2 px-5" role="button">
                        <p>Lihat Hasil</p>
                        <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                        <p></p>
                    </button>
                </div>
                    </div>
                </div>
                <div id="pagination" class="d-flex gap-3">
                   
                </div>
                    
                </div>
                
            </div>
        </form>
        @endif
    <div class="FooterKuisioner" style="padding-top: 12.5rem;">
        @include('NewPagesTemplate.Footer')
    </div>
    </div>
</div>
@endsection



