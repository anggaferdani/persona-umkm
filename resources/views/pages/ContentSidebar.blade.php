@extends('Pages.TemplateSideBar')
@section('judul_tab','Login Kemendikbud')

@section('contentSideBar')
<link rel="stylesheet" href=" {{ asset('../css/Pages/ContentSidebar.css')}}">



    <div class="sideBarContent">
        <h3 class="fw-bold text-center mb-5 text-blue">UMKM</h3>


        <div class="search">
            <button type="submit" class="searchButton">
                <i class="fa-solid fa-magnifying-glass" style="color: grey;"></i>
           </button>
            <input type="text" class="searchTerm" placeholder="What are you looking for?">
            <button type="submit" class="sendButton">
                <i class="fa-solid fa-circle-chevron-right" style="color: grey"></i>
           </button>
         </div>

         <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-2">
            <div class="col text-center px-3 mt-5">
                <img src="{{asset('../../images/mikro.png')}}">
                <p class="fw-bold my-sm-3 my-1">MIKRO</p>

                <div class="rangkum mt-3">
                    <p class="comment more text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id cupiditate expedita!</p>
                </div>
                <div class="rangkum mt-3">
                    <p class="comment more text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id cupiditate expedita!</p>
                </div>
                <div class="rangkum mt-3">
                    <p class="comment more text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id cupiditate expedita!</p>
                </div>
            </div>
            <div class="col text-center px-3 mt-5">
                <img src="{{asset('../../images/mikro.png')}}">
                <p class="fw-bold my-sm-3 my-1">MIKRO</p>

                <div class="rangkum mt-3">
                    <p class="comment more text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id cupiditate expedita!</p>
                </div>
                <div class="rangkum mt-3">
                    <p class="comment more text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id cupiditate expedita!</p>
                </div>
                <div class="rangkum mt-3">
                    <p class="comment more text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id cupiditate expedita!</p>
                </div>
            </div>
            <div class="col text-center px-3 mt-5">
                <img src="{{asset('../../images/mikro.png')}}">
                <p class="fw-bold my-sm-3 my-1">MIKRO</p>

                <div class="rangkum mt-3">
                    <p class="comment more text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id cupiditate expedita!</p>
                </div>
                <div class="rangkum mt-3">
                    <p class="comment more text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id cupiditate expedita!</p>
                </div>
                <div class="rangkum mt-3">
                    <p class="comment more text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id cupiditate expedita!</p>
                </div>
            </div>
         </div>
    </div>
@endsection