@extends('Marketer.NavbarFull')
@section('judul_tab','Beranda')

@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Beranda.css')}}">

<div class="header"  style="padding-top: 2.75rem;">
    <img src="{{asset('../../images/beranda_marketer.png')}}">
</div>


<div class="container mt-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 d-flex align-items-center gap-2">
                <div class="marketerIcon">
                @switch($bpamax->brand_personality_aaker)
                        @case('average_sincerity')
                            @if($bpa->gender == 'men')
                                <img src="{{asset('../../images/sincerity_boy.png')}}">
                            @else
                                <img src="{{asset('../../images/sincerity_girl.png')}}">
                            @endif
                        @break
                        @case('average_competence')
                            @if($bpa->gender == 'men')
                                <img src="{{asset('../../images/competence_boy.png')}}">
                            @else
                                <img src="{{asset('../../images/competence_girl.png')}}">
                            @endif
                        @break
                        @case('average_excitement')
                            @if($bpa->gender == 'men')
                                <img src="{{asset('../../images/exitement_boy.png')}}">
                            @else
                                <img src="{{asset('../../images/exitement_girl.png')}}">
                            @endif
                        @break
                        @case('average_sophistication')
                            @if($bpa->gender == 'men')
                                <img src="{{asset('../../images/shopistication_boy.png')}}">
                            @else
                                <img src="{{asset('../../images/shopistication_girl.png')}}">
                            @endif
                        @break
                        @default
                            @if($bpa->gender == 'men')
                                <img src="{{asset('../../images/ruggednes_boy.png')}}">
                            @else
                                <img src="{{asset('../../images/ruggednes_girl.png')}}">
                            @endif
                    @endswitch
                </div>
               <div class="desc">
                <p class="fw-bold">Persona Marketer Anda :</p>
                @switch($bpamax->brand_personality_aaker)
                    @case('average_sincerity')
                    <h3 class="text-blue fw-bolder">SINCERITY</h3>
                    <p class="mt-3">SINCERITY adalah orang yang  jujur, tulus, dan memiliki integritas. Personality ini sering kali dilihat sebagai dapat dipercaya dan dapat diandalkan.</p>
                    @break
                    @case('average_competence')
                    <h3 class="text-blue fw-bolder">COMPETENCE</h3>
                    <p class="mt-3">COMPETENCE adalah orang yang  kompeten, efisien, dan ahli dalam bidangnya. Personality ini handal dan memiliki keunggulan dalam hal kualitas dan kinerja.</p>
                    @break
                    @case('average_excitement')
                    <h3 class="text-blue fw-bolder">EXCITEMENT</h3>
                    <p class="mt-3">EXCITEMENT adalah orang yang berenergi, bersemangat, dan menarik perhatian konsumen. Personality ini sering dihubungkan dengan inovasi dan kegembiraan.</p>
                    @break
                    @case('average_sophistication')
                    <h3 class="text-blue fw-bolder">SOPHISTICATION</h3>
                    <p class="mt-3">SOPHISTICATION adalah orang yang elegan, anggun, dan mewah. Personality ini sering dihubungkan dengan keanggunan dan gaya yang tinggi.</p>
                    @break
                    @default
                    <h3 class="text-blue fw-bolder">RUGGEDNESS</h3>
                    <p class="mt-3">RUGGEDNESS adalah orang yang Maskulin, Terbuka, Aktif, dan Tangguh. Personality ini sering diidentifikasi dengan kekuatan dan daya tahan.</p>
                @endswitch
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-12">
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
            <div class="col-sm-6 col-12">
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
            <div class="col-sm-6 col-12">
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
            <div class="col-sm-6 col-12">
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
            <div class="col-sm-6 col-12" style="align-items: left">
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
                    <div class="textLong mt-3">
                        <p class="">SINCERITY mengacu pada kualitas bersikap tulus, jujur, dan jujur dalam tindakan, perkataan, dan niat seseorang. SINCERITY menyiratkan bahwa seseorang bertindak tanpa tipu daya atau motif tersembunyi dan bersikap lugas serta transparan dalam perilakunya. Hal ini sering dikaitkan dengan integritas, keaslian, dan kurangnya kepura-puraan. <br>

                        SINCERITY adalah atribut penting dalam hubungan interpersonal, karena menumbuhkan kepercayaan dan keandalan. Ketika orang merasakan ketulusan pada orang lain, mereka akan lebih percaya pada apa yang dikatakan atau dilakukan dan merasa lebih nyaman dalam interaksi mereka.<br>

                        Dalam konteks branding dan pemasaran, kepribadian SINCERITY juga dapat menjadi salah satu dimensi kepribadian, seperti yang telah disebutkan sebelumnya. Kepribadian SINCERITY dalam komunikasi dan tindakannya dipandang sebagai orang yang dapat dipercaya dan berkomitmen tulus terhadap kesejahteraan pelanggannya.<br>

                        Singkatnya, kepribadian SINCERITY adalah sifat pribadi yang berharga yang melibatkan kejujuran dan ketulusan dalam tindakan dan interaksi dengan orang lain. Ini berkontribusi untuk membangun kepercayaan dan hubungan positif.</p>
                    </div>
                @break
                @case('average_competence')
                    <h3 class="text-blue fw-bolder my-3">COMPETENCE</h3>
                    <div class="textLong mt-3">
                        <p class="">COMPETENCE mengacu pada kepribadian yang memiliki citra dan reputasi sebagai orang yang terampil, mampu, dan mahir dalam memberikan produk atau layanan berkualitas. Kepribadian COMPETENCE dipandang dapat diandalkan, dapat dipercaya, dan ahli di bidangnya. Mereka dikenal karena kemampuannya untuk secara konsisten memenuhi atau melampaui harapan pelanggan. <br>

                        Kepribadian COMPETENCE sering kali berfokus pada kualitas seperti keahlian, ketergantungan, dan jaminan kualitas. Mereka mungkin menggunakan pesan dan strategi pemasaran yang menonjolkan rekam jejak, sertifikasi, pengetahuan industri, dan dedikasi mereka terhadap keunggulan. Kepribadian ini berupaya menciptakan rasa percaya diri dan kepastian di benak konsumen. <br>

                        Pelanggan COMPETENCE sering kali mencari produk atau layanan yang dapat mereka andalkan, dan mereka percaya bahwa merek tersebut adalah otoritas dalam ceruk pasarnya. Kepribadian COMPETENCE dapat menjadi sangat penting dalam industri yang mengutamakan presisi, keahlian, dan kepercayaan, seperti layanan kesehatan, jasa keuangan, dan jasa profesional. <br>

                        Singkatnya, Kepribadian COMPETENCE adalah seorang yang dipandang sangat terampil, dapat diandalkan, dan mampu memberikan kualitas yang konsisten. Mereka membangun kepercayaan dan keyakinan pelanggan melalui keahlian dan keandalan mereka.</p>
                    </div>
                @break
                @case('average_excitement')
                <h3 class="text-blue fw-bolder">EXCITEMENT</h3>
                    <div class="textLong mt-3">
                        <p class="">EXCITEMENT mengacu pada kepribadian yang memiliki citra yang energik, dinamis, dan menawan. Kepribadian EXCITEMENT sering dikaitkan dengan inovasi, kesenangan, dan rasa petualangan. Mereka bertujuan untuk menarik konsumen dengan membangkitkan antusiasme dan kegembiraan seputar produk atau layanan mereka.<br>

                        Seseorang dengan kepribadian EXCITEMENT yang kuat dapat menggunakan warna-warna cerah, kampanye pemasaran dinamis, dan teknologi mutakhir untuk menciptakan gebrakan seputar penawaran mereka. Mereka ingin dianggap sebagai trendsetter dan pemimpin di industrinya. Kepribadian ini sering kali menarik konsumen yang mencari pengalaman baru dan mendebarkan, dan mereka mungkin memposisikan diri sebagai merek yang berpikiran maju dan terdepan di pasarnya masing-masing.<br>

                        Contoh Seorang dengan kepribadian EXCITEMENT antara lain bekerja di industri teknologi, hiburan, dan olahraga. Mereka menggunakan kepribadian mereka untuk menciptakan rasa kegembiraan dan keterlibatan di antara audiens target mereka.<br>

                        Singkatnya, kepribadian EXCITEMENT dalam kepribadian merek mengacu pada merek yang hidup, inovatif, dan menstimulasi, yang bertujuan untuk menarik perhatian dan antusiasme konsumen.</p>
                    </div>
                @break
                @case('average_sophistication')
                <h3 class="text-blue fw-bolder">SOPHISTICATION</h3>
                    <div class="textLong mt-3">
                        <p class="">SOPHISTICATION mengacu pada citra dan reputasi sebagai pribadi elegan, halus, dan berbudaya. Kepribadian ini sering kali memposisikan dirinya sebagai yang terdepan dalam industrinya dan melayani konsumen yang menghargai kemewahan, estetika, dan cita rasa yang tinggi.<br>

                        Kepribadian SOPHISTICATION sering kali menggunakan desain elegan, bahan premium, dan strategi pemasaran kelas atas untuk menyampaikan kesan eksklusivitas. Mereka menargetkan konsumen yang mencari pengalaman, produk, atau layanan yang lebih baik. Kepribadian SOPHISTICATION sering dihubungkan dengan kualitas, eksklusivitas, dan rasa kehalusan.<br>

                        Kepribadian SOPHISTICATION biasanya ditemukan di industri seperti fesyen kelas atas, mobil mewah, santapan mewah, dan barang konsumsi kelas atas. Mereka sering kali menonjolkan seni, keahlian, dan perhatian terhadap detail yang ada pada produk atau layanan mereka.<br>

                        Singkatnya, Kepribadian SOPHISTICATION adalah kepribadian yang dianggap elegan, halus, dan mewah. Mereka bertujuan untuk menarik konsumen yang menghargai pengalaman premium dan produk dengan rasa dan kualitas tingkat tinggi.</p>
                    </div>
                @break
                @default
                <h3 class="text-blue fw-bolder">RUGGEDNESS</h3>
                    <div class="textLong mt-3">
                        <p class="">RUGGEDNESS dalam konteks kepribadian mengacu pada kepribadian yang tangguh, kokoh, dan kuat. Kepribadian RUGGEDNESS sering dikaitkan dengan kualitas seperti daya tahan, kekuatan, dan rasa petualangan. Mereka menargetkan konsumen yang menghargai pengalaman dan produk yang tangguh dan luar ruangan. <br>

                        Kepribadian RUGGEDNESS sering kali menggunakan citra dan pemasaran yang menyampaikan rasa eksplorasi, kecakapan fisik, dan kemampuan untuk bertahan dalam kondisi yang keras. Barang-barang tersebut mungkin terkait dengan olahraga luar ruangan dan petualangan, perlengkapan luar ruangan, dan produk atau layanan yang dibuat agar tahan terhadap kerusakan. <br>

                        Kepribadian RUGGEDNESS biasanya ditemukan di industri pakaian luar ruangan, peralatan hiking, dan kendaraan off-road. Merek yang menekankan ketangguhan sering kali bertujuan untuk menarik konsumen yang mencari produk yang tahan terhadap lingkungan yang menantang dan penggunaan yang lama. <br>

                        Singkatnya, kepribadian RUGGEDNESS adalah kepribadian yang dipandang tangguh, kuat, dan penuh petualangan. Mereka ditujukan untuk konsumen yang menghargai produk atau barang yang tangguh dan kuat.</p>
                    </div>
            @endswitch
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
