@extends('templates.pages')
@section('title', isset($title) ? $title : 'User Management')
@section('content')
<div>
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">User Management</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="card">
            <div class="table-responsive">
              <table class="table table-vcenter card-table datatable">
                <thead>
                  <tr class="text-center">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($user as $item)
                    <tr class="text-center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        @if($item->role == 3)
                        <td>UMKM</td>
                        @else
                        <td>Marketer</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('livewire.kuesioners.modal')
</div>
@endsection