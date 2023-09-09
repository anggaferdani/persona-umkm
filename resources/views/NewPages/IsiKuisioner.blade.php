@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Kuisioner Kemendikbud')

@section('contentNoCenter')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/IsiKuisioner.css')}}">

<div class="isiKuisionerContent">
    <div class="header">
       <div class="container">
        <h3 class="text-center text-white mb-5 fw-bold">TENTUKAN PERSONA <br> BRAND ANDA</h3>
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
                        <img src="{{asset('../../images/IsiKuisioner.png')}}">
                    </div>
                    <p>Jadilah diri sendiri dan jawab dengan
                        jujur untuk mengetahui tipe
                        kepribadian Anda.</p>
                </div>
            </div>
        </div>
       </div>

       <div class="container">
        <div class="bar-progress d-flex align-items-center gap-2">
            <p class="fw-bold">50%</p>
            <div class="progress w-100" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-blue" style="width: 50%"></div>
        </div>
        </div>
        <div class="soal">
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-a" id="flexRadioDefault1" value="jawaban-a">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-b" id="flexRadioDefault1" value="jawaban-b">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-c" id="flexRadioDefault1" value="jawaban-c">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-d" id="flexRadioDefault1" value="jawaban-d">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-a" id="flexRadioDefault1" value="jawaban-a">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-b" id="flexRadioDefault1" value="jawaban-b">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-c" id="flexRadioDefault1" value="jawaban-c">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-d" id="flexRadioDefault1" value="jawaban-d">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-a" id="flexRadioDefault1" value="jawaban-a">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-b" id="flexRadioDefault1" value="jawaban-b">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-c" id="flexRadioDefault1" value="jawaban-c">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-d" id="flexRadioDefault1" value="jawaban-d">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-a" id="flexRadioDefault1" value="jawaban-a">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-b" id="flexRadioDefault1" value="jawaban-b">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-c" id="flexRadioDefault1" value="jawaban-c">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-d" id="flexRadioDefault1" value="jawaban-d">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-a" id="flexRadioDefault1" value="jawaban-a">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-b" id="flexRadioDefault1" value="jawaban-b">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-c" id="flexRadioDefault1" value="jawaban-c">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-d" id="flexRadioDefault1" value="jawaban-d">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-a" id="flexRadioDefault1" value="jawaban-a">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-b" id="flexRadioDefault1" value="jawaban-b">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-c" id="flexRadioDefault1" value="jawaban-c">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-d" id="flexRadioDefault1" value="jawaban-d">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-a" id="flexRadioDefault1" value="jawaban-a">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-b" id="flexRadioDefault1" value="jawaban-b">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-c" id="flexRadioDefault1" value="jawaban-c">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-d" id="flexRadioDefault1" value="jawaban-d">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-a" id="flexRadioDefault1" value="jawaban-a">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-b" id="flexRadioDefault1" value="jawaban-b">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-c" id="flexRadioDefault1" value="jawaban-c">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-d" id="flexRadioDefault1" value="jawaban-d">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-4 foreach">
                <div class="col-12">
                    <p class="fw-bold">1. Bagaimana Bapak/Ibu memproduksi barang yang akan dijual ?</p>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-a" id="flexRadioDefault1" value="jawaban-a">
                        <label class="form-check-label" for="flexRadioDefault1">
                           <p> Manual dengan tenaga manusia</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-b" id="flexRadioDefault1" value="jawaban-b">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan alat produksi manual</p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-12 mt-2">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-c" id="flexRadioDefault1" value="jawaban-c">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi dan alat produksi manual</p>
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="jawaban-d" id="flexRadioDefault1" value="jawaban-d">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Dengan mesin produksi</p>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-sm-7 col-10 text-center">
                <p class="fw-bold">Jenis Kelamin</p>
                <p>Ini akan menentukan avatar Anda di layar hasil</p>
                <select class="form-select p-sm-3 p-1 my-3 mx-auto" aria-label="Default select example">
                    <option selected>Pilih kelamin Anda</option>
                    <option value="1">Laki-Laki</option>
                    <option value="2">Perempuan</option>
                  </select>
            </div>
        </div>
        <div class="btn-next d-flex justify-content-center mt-5">
            <a class="btn bg-blue d-flex align-items-center gap-2 justify-content-center py-sm-3 py-2 px-5" href="/hasil" role="button">
                <p>Lihat Hasil</p>
                <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                <p></p>
            </a>
        </div>
    </div>
    <div class="FooterKuisioner" style="padding-top: 12.5rem;">
        @include('NewPagesTemplate.Footer')
    </div>
    </div>
</div>
@endsection
