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
            <div class="card-body border-bottom py-3">
              <div class="d-flex flex-column flex-md-row align-items-center gap-2 gap-md-0 justify-content-between">
                <div class="btn-list w-100">
                  
                </div>
                <div class="d-flex w-100 flex-md-row flex-column gap-2 justify-content-end">
                  <form id="searchForm" method="GET" action="{{ route('admin.marketer.index') }}" class="d-flex">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <button id="clearSearchButton" type="button" class="btn btn-danger">Clear</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-vcenter card-table datatable">
                <thead>
                  <tr class="text-center">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($marketers as $item)
                    <tr class="text-center">
                        <td>{{ ($marketers->currentPage() - 1) * $marketers->perPage() + $loop->iteration }}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer d-flex align-items-center">
              <ul class="pagination m-0 ms-auto">
                @if($marketers->hasPages())
                  {{ $marketers->appends(request()->query())->links('pagination::bootstrap-4') }}
                @else
                  <li class="page-item">No more records</li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script>
  document.getElementById('clearSearchButton').addEventListener('click', function() {
      document.querySelector('input[name="search"]').value = '';
      document.getElementById('searchForm').submit();
  });
</script>
@endpush