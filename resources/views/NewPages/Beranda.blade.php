@extends('NewPagesTemplate.NavbarLengkap')
@section('judul_tab','Beranda')

@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Beranda.css')}}">

<div class="header"  style="padding-top: 2.75rem;">
    <img src="{{asset('../../images/beranda_umkm.png')}}">
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
                    <div class="col-sm-10 col-11">
                        <p class="fw-bold">Persona Brand Anda :</p>
                        @switch($bpamax->brand_personality_aaker)
                            @case('average_sincerity')
                            <h3 class="text-blue fw-bolder">SINCERITY</h3>
                            <p class="mt-3">SINCERITY adalah orang yang  jujur, tulus, dan memiliki integritas. Personal Brand ini sering kali dilihat sebagai dapat dipercaya dan dapat diandalkan.</p>
                            @break
                            @case('average_competence')
                            <h3 class="text-blue fw-bolder">COMPETENCE</h3>
                            <p class="mt-3">COMPETENCE adalah orang yang  kompeten, efisien, dan ahli dalam bidangnya. Personal Brand ini handal dan memiliki keunggulan dalam hal kualitas dan kinerja.</p>
                            @break
                            @case('average_excitement')
                            <h3 class="text-blue fw-bolder">EXCITEMENT</h3>
                            <p class="mt-3">EXCITEMENT adalah orang yang berenergi, bersemangat, dan menarik perhatian konsumen. Personal Brand ini sering dihubungkan dengan inovasi dan kegembiraan.</p>
                            @break
                            @case('average_sophistication')
                            <h3 class="text-blue fw-bolder">SOPHISTICATION</h3>
                            <p class="mt-3">SOPHISTICATION adalah orang yang elegan, anggun, dan mewah. Personal Brand ini sering dihubungkan dengan keanggunan dan gaya yang tinggi.</p>
                            @break
                            @default
                            <h3 class="text-blue fw-bolder">RUGGEDNESS</h3>
                            <p class="mt-3">RUGGEDNESS adalah orang yang Maskulin, Terbuka, Aktif, dan Tangguh. Personal Brand ini sering diidentifikasi dengan kekuatan dan daya tahan.</p>
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

                                    Singkatnya, kepribadian EXCITEMENT dalam kepribadian mengacu pada kepribadian yang hidup, inovatif, dan menstimulasi, yang bertujuan untuk menarik perhatian dan antusiasme konsumen.</p>
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
                        @if($level->team == "iya")
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
                                @if($basic)
                                <span class="text-primary">Basic</span>
                                @elseif($intermediate)
                                <span class="text-primary">Intermediate</span>
                                @elseif($advance1)
                                <span class="text-primary">Advance</span>
                                @elseif($advance2)
                                <span class="text-primary">Advance</span>
                                @elseif($advance3)
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
                    @if(!$strategi)
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#strategianda">
                            <p>Strategi Digital Anda</p>
                        </a>
                    </li>
                    @else
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
                    @endif
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    @if(!$strategi)
                    <div id="strategianda" class="container tab-pane active"><br>
                    <button type="button" class="btn btn-sm btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModalstrategi">
                                Tentukan Strategi Anda
                            </button>
                    </div>
                    @else
                    <div id="SocialMedia" class="container tab-pane active"><br>
                        @if($tiktok95)
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
                                <p class=" my-3"><span class="fw-bold">TikTok</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="95" aria-valuemin="5" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 95%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">95%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_instagram.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Instagram</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_fb.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Facebook</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="05" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @elseif($tiktok901 || $tiktok902)
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
                                <p class=" my-3"><span class="fw-bold">TikTok</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="95" aria-valuemin="5" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">90%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_instagram.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Instagram</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_fb.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Facebook</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="05" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @elseif($tiktok85)
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
                                <p class=" my-3"><span class="fw-bold">TikTok</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="95" aria-valuemin="5" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">85%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_instagram.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Instagram</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_fb.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Facebook</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="05" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>

                        @elseif($instagram95)
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/strategi_instagram.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">Instagram</p>
                                <p>Sesuai dengan hasil test. Sosial Media
                                    yang tepat untuk Anda berjualan Online saat ini adalah Instagram</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_instagram.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Instagram</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="95" aria-valuemin="5" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 95%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">95%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/tiktokMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Tiktok</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_fb.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Facebook</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="50" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @elseif($instagram901 || $instagram902)
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/strategi_instagram.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">Instagram</p>
                                <p>Sesuai dengan hasil test. Sosial Media
                                    yang tepat untuk Anda berjualan Online saat ini adalah Instagram</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_instagram.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Instagram</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="80" aria-valuemin="10" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">90%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/tiktokMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Tiktok</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_fb.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Facebook</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="05" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @elseif($instagram85)
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/strategi_instagram.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">Instagram</p>
                                <p>Sesuai dengan hasil test. Sosial Media
                                    yang tepat untuk Anda berjualan Online saat ini adalah Instagram</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_instagram.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Instagram</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="85" aria-valuemin="15" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">85%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/tiktokMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Tiktok</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-block d-sm-flex text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_fb.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Facebook</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="50" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        <p class="fw-bold mt-4">#Hastag</p>
                        <p>Hastag yang di perlukan agar jualan mu cepat di
                            kenal:</p>
                       <div class="hastag d-flex gap-3 justify-content-between align-items-center flex-wrap">
                        <a href="#"><p>{{$strategi->tag1}}</p></a>
                        <a href="#"><p>{{$strategi->tag2}}</p></a>
                        <a href="#"><p>{{$strategi->tag3}}</p></a>
                        <a href="#"><p>{{$strategi->tag4}}</p></a>
                        <a href="#"><p>{{$strategi->tag5}}</p></a>
                       </div>
                    </div>

                    <div id="OnlineShop" class="container tab-pane fade"><br>
                        @if($shope95)
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/shopeeImg.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">Shopee</p>
                                <p>Sesuai dengan hasil test. E-Commerce
                                    yang tepat untuk Anda berjualan Online saat ini adalah Shopee</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/shopeeMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Shopee</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="95" aria-valuemin="5" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 95%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">95%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_tokped.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Tokopedia</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_lazada.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Lazada</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="50" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @elseif($shope901 || $shope902)
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/shopeeImg.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">Shopee</p>
                                <p>Sesuai dengan hasil test. E-Commerce
                                    yang tepat untuk Anda berjualan Online saat ini adalah Shopee</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/shopeeMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Shopee</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="90" aria-valuemin="10" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">90%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_tokped.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Tokopedia</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_lazada.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Lazada</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="50" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @elseif($shope85)
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/shopeeImg.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">Shopee</p>
                                <p>Sesuai dengan hasil test. E-Commerce
                                    yang tepat untuk Anda berjualan Online saat ini adalah Shopee</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/shopeeMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Shopee</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="85" aria-valuemin="15" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">85%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_tokped.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Tokopedia</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_lazada.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Lazada</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="50" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @elseif($tokped95)
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/strategi_tokped.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">Tokopedia</p>
                                <p>Sesuai dengan hasil test. E-Commerce
                                    yang tepat untuk Anda berjualan Online saat ini adalah Tokopedia</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_tokped.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">TokoPedia</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="95" aria-valuemin="5" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 95%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">95%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/shopeeMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Shopee</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_lazada.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Lazada</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="50" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @elseif($tokped901 || $tokped902)
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/strategi_tokped.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">Tokopedia</p>
                                <p>Sesuai dengan hasil test. E-Commerce
                                    yang tepat untuk Anda berjualan Online saat ini adalah Tokopedia</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_tokped.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">TokoPedia</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="90" aria-valuemin="10" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">90%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/shopeeMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Shopee</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_lazada.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Lazada</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="50" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @elseif($tokped85)
                        <div class="tabPaneContent d-block d-sm-flex text-sm-start text-center align-items-center gap-5">
                            <div class="tpcImage">
                                <img src="{{asset('../../images/strategi_tokped.png')}}">
                            </div>
                            <div class="tcpTex">
                                <p class="fw-bold my-sm-0 my-2">Tokopedia</p>
                                <p>Sesuai dengan hasil test. E-Commerce
                                    yang tepat untuk Anda berjualan Online saat ini adalah Tokopedia</p>
                            </div>
                        </div>
                        <div class="hr-jumbo"></div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_tokped.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">TokoPedia</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="85" aria-valuemin="15" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">85%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/shopeeMini.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Shopee</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="70" aria-valuemin="30" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">70%</p>
                                </div>
                            </div>
                        </div>
                        <div class="apk d-sm-flex d-block text-sm-start text-center align-items-center gap-5 p-3 mt-3">
                            <div class="apkImg">
                                <img src="{{asset('../../images/strategi_lazada.png')}}">
                            </div>
                            <div class="apkText">
                                <p class=" my-3"><span class="fw-bold">Lazada</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                                <div class="progressBar d-flex align-items-center gap-2 my-3">
                                    <div class="progress w-100" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="50" aria-valuemin="50" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <p class="text-blue fw-bolder">50%</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        <button type="button" class="btn mt-3 btn-sm btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModalstrategi">
                                Tentukan Ulang Strategi Anda
                            </button>
                    </div>
                    </div>

                    @endif
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
                        <input type="radio" value="belum" class="form-check-input" required id="exampleInputUsername1 " name="whatsapp_bisnis"><span class="me-2">
                            Belum
                        </span>
                        <input type="radio" value="sudah" class="form-check-input" required id="exampleInputUsername1 " name="whatsapp_bisnis"><span class="me-2">
                            Sudah
                        </span>
                        @error('whatsapp_bisnis')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Merk Anda Menggunakan Google Business?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" required id="exampleInputUsername1 " name="gbusiness"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" required id="exampleInputUsername1 " name="gbusiness"><span class="me-2">
                            Tidak
                        </span>
                        @error('gbusiness')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Merk Anda Memiliki Website?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" required id="exampleInputUsername1 " name="landing_page"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" required id="exampleInputUsername1 " name="landing_page"><span class="me-2">
                            tidak
                        </span>
                        @error('landing_page')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Merk Anda Memiliki Katalog Di Social Media Seperti Facebook Dan Instagram?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" required id="exampleInputUsername1 " name="sosmed"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" required id="exampleInputUsername1 " name="sosmed"><span class="me-2">
                            tidak
                        </span>
                        @error('sosmed')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Merk Anda Menggunakan E Commerce Seperti Shopee Atau Tokopedia?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" required id="exampleInputUsername1 " name="ecommerce"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" required id="exampleInputUsername1 " name="ecommerce"><span class="me-2">
                            tidak
                        </span>
                        @error('ecommerce')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah Merk Anda Memiliki Team Creative?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" required id="exampleInputUsername1 " name="team"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" required id="exampleInputUsername1 " name="team"><span class="me-2">
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
<div class="modal fade" id="exampleModalstrategi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalstrategiLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalstrategiLabel">Level Digital Umkm</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ url('/umkm/strategi-digital') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah merk anda sering menggunakan fitur live streaming untuk mengiklankan product anda?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" required id="exampleInputUsername1 " name="live_stream"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" required id="exampleInputUsername1 " name="live_stream"><span class="me-2">
                            tidak
                        </span>
                        @error('live_stream')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah merk anda ingin menggunakan fitur cod<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" required id="exampleInputUsername1 " name="cod"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" required id="exampleInputUsername1 " name="cod"><span class="me-2">
                            tidak
                        </span>
                        @error('cod')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah merk anda akan sering mengadakan promo?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" required id="exampleInputUsername1 " name="promo"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" required id="exampleInputUsername1 " name="promo"><span class="me-2">
                            tidak
                        </span>
                        @error('promo')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apakah merk anda melayani ekspor?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="iya" class="form-check-input" required id="exampleInputUsername1 " name="ekspor"><span class="me-2">
                            ya
                        </span>
                        <input type="radio" value="tidak" class="form-check-input" required id="exampleInputUsername1 " name="ekspor"><span class="me-2">
                            tidak
                        </span>
                        @error('ekspor')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Apa yang anda gunakan untuk mengiklankan merk anda?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="video" class="form-check-input" required id="exampleInputUsername1 " name="iklan"><span class="me-2">
                            Video
                        </span>
                        <input type="radio" value="foto" class="form-check-input" required id="exampleInputUsername1 " name="iklan"><span class="me-2">
                            Poster/Foto Product
                        </span>
                        @error('iklan')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Produk apa yang anda jual?<span class="text-danger">*</span></label><br>
                        <input type="radio" value="makanan" class="form-check-input" required id="exampleInputUsername1 " name="jenis_product"><span class="me-2">
                            Makanan/Minuman
                        </span>
                        <input type="radio" value="pakaian" class="form-check-input" required id="exampleInputUsername1 " name="jenis_product"><span class="me-2">
                            Pakaian
                        </span><br>
                        <input type="radio" value="elektronik" class="form-check-input" required id="exampleInputUsername1 " name="jenis_product"><span class="me-2">
                            Elektronik
                        </span>
                        <input type="radio" value="aksesoris" class="form-check-input" required id="exampleInputUsername1 " name="jenis_product"><span class="me-2">
                            Aksesoris
                        </span>
                        @error('jenis_product')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="mb-1">Tambahkan 5 Hastag Merk Anda<span class="text-danger">*</span></label><br>
                        <input class="form-control my-1" required placeholder="Hastag #" name="tag1" value="#" type="text">
                        <input class="form-control my-1" required placeholder="Hastag #" name="tag2" value="#" type="text">
                        <input class="form-control my-1" required placeholder="Hastag #" name="tag3" value="#" type="text">
                        <input class="form-control my-1" required placeholder="Hastag #" name="tag4" value="#" type="text">
                        <input class="form-control my-1" required placeholder="Hastag #" name="tag5" value="#" type="text">
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
