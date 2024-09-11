@extends('NewPagesTemplate.NavbarLengkap')
@section('judul_tab','Profile')

@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Profile.css')}}">

<div class="pageProfile" style="padding-top: 3rem;">
    <div class="banner">
        <img class="background_banner" src="{{asset('../images/headerProfile.png')}}" alt="bannerProfile">
    </div>
    <div class="container" id="content">
        <div class="row justify-content-md-start justify-content-center">
            <div class="col-md-4 col-6 ">
                @if($profil)
                <img class="orang" src="{{asset('img/'.$profil->foto ?? '-')}}" alt="orang">
                @else
                <img class="orang" src="{{asset('images/profile.jpg')}}" alt="orang">
                @endif
                <a class="btn w-100 mt-1 ms-auto text-white" href="/logout" role="button" style="background-color: #2388FF;">LOG OUT</a>
            </div>
            <div class="col-md-8" id="descProfile">
                <h3 class="text-md-start text-dark text-center mb-1">{{Auth::user()->name ?? '-'}}</h3>
                <div class="text-md-start text-dark text-center mb-1">{{Auth::user()->email ?? '-'}}</div>
                <div class="text-md-start text-dark text-center mb-3">{{Auth::user()->no_telp ?? '-'}}</div>

                <div class="address_profile text-black">
                    @if(!$profil)
                    <button type="button" class="btn btn-lg btn-primary mx-auto fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModaProfil">
                        Lengkapi Profil Anda
                    </button>
                    @else
                        @if(Auth::user()->role == 3)
                        <h5 class="text-md-start text-center fw-bold mb-3">Alamat & Deskripsi UKM :</h5>
                        <p class="text-md-start text-center mb-3">{{$profil->alamat ?? '-'}}</p>
                        <p class="text-md-start text-center mb-3">{{$profil->deskripsi ?? '-'}}</p>

                        <div class="d-flex justify-content-center justify-content-md-start">
                            <button type="button" class="btn btn-sm btn-primary mt-2 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModaProfil">
                                Edit Profil Anda
                            </button>
                        </div>
                        @elseif(Auth::user()->role == 4)
                        <h4 class="fw-bold">Alamat :</h4>
                        <p class="text-md-start text-center mb-3">{{$profil->alamat ?? '-'}}</p>

                        <div class="d-flex justify-content-center justify-content-md-start">
                            <button type="button" class="btn btn-sm btn-primary mt-2 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModaProfil">
                                Edit Profil Anda
                            </button>
                        </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModaProfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalpesanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalpesanLabel">Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if(Auth::user()->role == 3)
        <form action="{{ url('/umkm/profile-submit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group mb-3">
                <label for="exampleInputUsername1">Alamat Anda<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Input Alamat UKM Anda..." name="alamat" value="{{ $profil->alamat ?? '-' }}">
                @error('alamat')
                        <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputUsername1">Deskripsi UKM Anda<span class="text-danger">*</span></label>
                <textarea class="form-control" style="height: 200px" placeholder="Input Deskripsi UKM Anda..." id="floatingTextarea" name="deskripsi">{{ $profil->deskripsi ?? '-' }}</textarea>
                @error('deskripsi')
                        <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputUsername1">Foto Profil<span class="text-danger">* ukuran 1:1</span></label>
                <input type="file" class="form-control" id="exampleInputUsername1" name="foto" value="{{ $profil->foto ?? '-' }}">
                <a href="/img/{{ $profil->foto ?? '-' }}" target="_blank">{{ $profil->foto ?? '-' }}</a>
                @error('foto')
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
        @elseif(Auth::user()->role == 4)
        <form action="{{ url('/marketer/profile-submit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group mb-3">
                <label for="exampleInputUsername1">Alamat Anda<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Input Alamat UKM Anda..." name="alamat" value="{{ $profil->alamat ?? '-' }}">
                @error('alamat')
                        <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputUsername1">Foto Profil<span class="text-danger">* ukuran 1:1</span></label>
                <input type="file" class="form-control" id="exampleInputUsername1" name="foto" value="{{ $profil->foto ?? '-' }}">
                <a href="/img/{{ $profil->foto ?? '-' }}" target="_blank">{{ $profil->foto ?? '-' }}</a>
                @error('foto')
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
        @endif
      </div>
    </div>
  </div>
</div>
<div class="profileFooter" style="margin-top: 5rem;">
    @include('NewPagesTemplate.Footer')
</div>




@endsection