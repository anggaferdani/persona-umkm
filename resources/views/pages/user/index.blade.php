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
                  <tr>
                    <th>No.</th>
                    <th>Action</th>
                    <th>Produk UKM Anda</th>
                    <th>UKM Anda berdomisili di</th>
                    <th>Nomor ponsel Anda</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>

                        </td>
                    </tr>
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