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
                    <th scope="col"><p>Marketer</p></th>
                    <th scope="col"><p>Media</p></th>
                    <th scope="col"><p>Presentase Kecocokan</p></th>
                    <th scope="col"><p>Kelengkapan</p></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($marketer as $item)
                  <tr class="text-center mt-2">
                    <td scope="row"><p>{{$loop->iteration}}</p></td>
                    <td><p>{{$item->name}}</p></td>
                    <td class="parentImage"><img src="{{asset('../../images/marketerImage.png')}}"></td>
                    <td class="precentage"><div class="progressBar d-flex align-items-center gap-2 my-3">
                        <div class="progress w-100" role="progressbar" aria-label="Basic example"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar w-75"></div>
                        </div>
                        <p class="fw-bolder">95%</p>
                    </div></td>
                    <td>
                        <div class="top d-flex gap-1 justify-content-center">
                            @foreach($item->marketer as $file)
                                <a href="{{ URL( '/dw-cv/'.$file->cv)  }}"><p>CV</p></a>
                                <a href="{{ URL( '/dw-porto/'.$file->portofolio)  }}"><p>PORTOFOLIO</p></a>
                            @endforeach
                        </div>
                        <div class="middle my-2">
                            @foreach($item->marketer as $link)
                                <a target="_blank" href="{{$link->link_portofolio_1}}"><p>Link Portofolio</p></a>
                                @if($link->link_portofolio_2 != NULL)
                                    <a target="_blank" href="{{$link->link_portofolio_2}}"><p>Link Portofolio</p></a>
                                @elseif($link->link_portofolio_3 != NULL)
                                    <a target="_blank" href="{{$link->link_portofolio_3}}"><p>Link Portofolio</p></a>
                                @endif
                            @endforeach
                        </div>
                        <div class="bottom">
                            <a class="btn btn-success py-1 mt-3" href="{{ url('/umkm/marketerdetail/'.$item->id) }}" role="button"><p>Lihat Detail</p></a>
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