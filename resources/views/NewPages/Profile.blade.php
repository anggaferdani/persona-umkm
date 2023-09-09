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
            <div class="col-md-4 col-6 p-2 ">
                <img class="orang" src="{{asset('../images/profile.png')}}" alt="orang">
                <a class="btn w-100 mt-1 ms-auto text-white" href="#" role="button" style="background-color: #2388FF;">LOG OUT</a>
            </div>
            <div class="col-md-8 p-2 my-md-auto" id="descProfile">
                <h1 class="text-md-start text-center">JOHN DOE</h1>
                <div class="contact_profile justify-content-md-start justify-content-center d-flex gap-3 align-items-center">
                    <p class="mb-0">johndoe12@gmail.com</p>
                    <div class="vr" style="width: .15rem;"></div>
                    <p class="mb-0">0857 4859 5623</p>
                </div>

                <div class="address_profile mt-5 text-black">
                    <h1>Address :</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos perferendis perspiciatis assumenda ut minima eos quis a quidem ipsum omnis.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="profileFooter" style="margin-top: 5rem;">
    @include('NewPagesTemplate.Footer')
</div>




@endsection