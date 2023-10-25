@extends('NewPagesTemplate.NavbarLengkap')
@section('judul_tab','Beranda')

@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Marketer.css')}}">

<div class="header" style="padding-top: 2.75rem;">
    <img src="{{asset('../../images/marketer.png')}}">
</div>

<div class="content my-5">
    <div class="container">
        <p class="fw-bold">List Marketer</p>

        <div class="table-responsive">
            <table class="table">
                <thead id="tableHead">
                  <tr class="text-center">
                    <th scope="col"><p>No.</p></th>
                    <th>Marketer</th>
                    <th>Media</th>
                    <th>Persentase Kecocokan</th>
                    <th>Kelengkapan</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($umkm1Comparison as $comparison)
                  <tr class="text-center mt-2">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $comparison['name'] }}</td>
                    <td class="parentImage">
                        <img src="{{asset('../../images/marketerImage.png')}}">
                </td>
                    <td class="precentage">
                        <div class="progressBar d-flex align-items-center gap-2 my-3">
                        <div class="progress w-100" role="progressbar" aria-label="Basic example"
                            aria-valuenow="{{$comparison['percentage']}}" aria-valuemin="{{100 - $comparison['percentage']}}" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{$comparison['percentage']}}%"></div>
                        </div>
                        <p class="fw-bolder">{{substr($comparison['percentage'],0,2)}}%</p>
                    </div></td>
                    <td>
                    <div class="top d-flex gap-1 justify-content-center">
                                <a href="{{ URL( '/dw-cv/'.$comparison['cv'])  }}"><p>CV</p></a>
                                <a href="{{ URL( '/dw-porto/'.$comparison['portofolio'])  }}"><p>PORTOFOLIO</p></a>
                        </div>
                        <div class="middle my-2">
                                <a target="_blank" href="{{$comparison['link_portofolio_1']}}"><p>Link Portofolio</p></a>
                                @if($comparison['link_portofolio_2'] != NULL)
                                    <a target="_blank" href="{{$comparison['link_portofolio_2']}}"><p>Link Portofolio</p></a>
                                @elseif($comparison['link_portofolio_3'] != NULL)
                                    <a target="_blank" href="{{$comparison['link_portofolio_3']}}"><p>Link Portofolio</p></a>
                                @endif
                        </div>
                        <div class="bottom">
                        <a class="btn btn-success py-1 mt-3" href="{{ url('/umkm/marketerdetail/'.$comparison['id']) }}" role="button"><p>Lihat Detail</p></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('NewPagesTemplate.Footer')




@endsection