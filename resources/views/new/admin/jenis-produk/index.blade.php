@extends('new.admin.templates.pages')
@section('title')
@section('header')
<h1>Jenis Produk</h1>
@endsection
@section('content')
<div class="row">
  <div class="col-12">

    @if(Session::get('success'))
      <div class="alert alert-important alert-primary" role="alert">
        {{ Session::get('success') }}
      </div>
    @endif

    @if(Session::get('error'))
      <div class="alert alert-important alert-danger" role="alert">
        {{ Session::get('error') }}
      </div>
    @endif
  
    <div class="card">
      <div class="card-body">
        <div class="float-left">
          <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus"></i></button>
        </div>
        <div class="float-right">
          <form id="filter" action="{{ route('admin.jenis-produk.index') }}" method="GET">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="search" id="search" value="">
            </div>
          </form>
        </div>

        <div class="clearfix mb-3"></div>

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="align-items-center text-center text-nowrap">No.</th>
                <th class="align-items-center text-center text-nowrap">Jenis Produk</th>
                <th class="align-items-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($jenisProduks as $jenisProduk)
                <tr>
                  <td class="align-items-center text-center text-nowrap">{{ ($jenisProduks->currentPage() - 1) * $jenisProduks->perPage() + $loop->iteration }}</td>
                  <td class="align-items-center text-center text-nowrap">{{ $jenisProduk->jenis_produk }}</td>
                  <td class="align-items-center text-nowrap">
                    <form action="{{ route('admin.jenis-produk.destroy', $jenisProduk->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#editModal{{ $jenisProduk->id }}"><i class="fas fa-pen"></i></button>
                      <button type="button" class="btn btn-icon btn-danger delete"><i class="fas fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="align-items-center text-center text-nowrap">Empty</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="float-right">
          {{ $jenisProduks->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="createModal" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.jenis-produk.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="">Jenis Produk <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="jenis_produk">
            @error('jenis_produk')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@foreach($jenisProduks as $jenisProduk)
<div class="modal fade" id="editModal{{ $jenisProduk->id }}" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.jenis-produk.update', $jenisProduk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="form-group">
            <label for="">Jenis Produk <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="jenis_produk" value="{{ $jenisProduk->jenis_produk }}">
            @error('jenis_produk')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection
@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function() {
      document.getElementById('search').addEventListener('input', function() {
          document.getElementById('filter').submit();
      });
  });
</script>
<script>
  const urlParams = new URLSearchParams(window.location.search);
  const searchQuery = urlParams.get('search');

  document.addEventListener("DOMContentLoaded", function() {
      const searchInput = document.getElementById('search');

      if (searchQuery) {
          searchInput.value = searchQuery;
      }
  });
</script>
@endpush