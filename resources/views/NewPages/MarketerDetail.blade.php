@extends('NewPagesTemplate.NavbarLengkap')
@section('judul_tab','Beranda')

@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/MarketerDetail.css')}}">

<div class="container" style="padding-top: 5rem;">
    <a href="/marketer" class="backButton d-flex align-items-center gap-2">
        <i class="fa-solid fa-arrow-left"></i>
        <p>Back</p>
    </a>

    <div class="content">
        <div class="row">
            <div class="col-lg-5 col-12 d-flex justify-content-center">
                <td><img src="{{asset('../../images/marketerDetail.png')}}"></td>
            </div>
            <div class="col-lg-7 col-12">
                <p class="fw-bold mb-2">Marketer A</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Donec nisi nec in diam porttitor. Velit a potenti aliquam velit euismod gravida magna. Pulvinar rutrum turpis sem molestie adipiscing magna malesuada. Aliquet sit cursus auctor arcu cursus mattis posuere aenean hendrerit. Nunc vel fringilla neque vitae sit et. Imperdiet orci amet ut varius pretium sed luctus. Massa et id odio nam lobortis arcu bibendum at. Elit donec ullamcorper commodo malesuada viverra nunc fermentum eros. Pellentesque in amet amet quis. Diam cum sed egestas lectus velit tellus vivamus nisl.

Enim posuere sit est maecenas mollis a duis nisl praesent. Leo sit sem felis justo dignissim. Suspendisse posuere massa eget massa adipiscing. Commodo accumsan pellentesque augue tincidunt quisque faucibus felis feugiat facilisis. A elementum pretium vel mi condimentum. Rhoncus consectetur urna pretium netus non tellus sed. Amet ultrices neque bibendum pellentesque. Nisi consequat amet aliquet suspendisse risus id facilisi sit accumsan. Dignissim ullamcorper gravida scelerisque urna orci et consequat mi risus. Cursus netus mauris rutrum eu risus ut odio tortor. Luctus egestas condimentum enim ornare adipiscing non scelerisque proin. Id ut arcu nullam ultrices consequat sociis scelerisque. Scelerisque amet lacinia eu lorem odio sagittis.

                </p>
            </div>
        </div>
    </div>
</div>

<div class="marketerFooter mt-5">
    @include('NewPagesTemplate.Footer')
</div>




@endsection