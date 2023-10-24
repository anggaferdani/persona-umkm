@extends('Marketer.NavbarFull')
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
                    <th scope="col"><p>Presentase</p></th>
                    <th scope="col"><p>Detail</p></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($umkm as $item)
                  <tr class="text-center mt-2">
                    <td>1</td>
                    <td><p>{{$item->name}}</p></td>
                    <td class="parentImage">
                      <img src="{{asset('../../images/marketerImage.png')}}">
                    </td>
                    <td class="precentage">
                      <div class="progressBar d-flex align-items-center gap-2 my-3">
                        <div class="progress w-100" role="progressbar" aria-label="Basic example"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar w-75"></div>
                        </div>
                        <p class="fw-bolder">95%</p>
                      </div>
                    </td>
                    <td><a href="{{ url('/marketer/detail-umkm/'.$item->id) }}" class="btn btn-primary">Detail Umkm</a></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('NewPagesTemplate.Footer')




@endsection