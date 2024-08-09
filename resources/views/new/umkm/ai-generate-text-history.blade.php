@extends('NewPagesTemplate.NavbarLengkap')
@section('judul_tab','History')
@push('styles')
<style>
  ::-webkit-resizer{
    display: none;
  }
  .no-hover:focus,
  .form-control:focus {
    box-shadow: none;
    outline: none;
  }
  </style>
@endpush
@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('css/NewPages/Beranda.css')}}">

<div class="header" style="padding-top: 2.75rem;">
    <img src="{{ asset('images/banner-ai.png') }}">
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active disabled" style="background: #2388FF;">Menu</a>
                <a href="{{ route('umkm.ai') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai') ? 'text-primary' : '' }}">Kenapa AI?</a>
                <a href="{{ route('umkm.ai.generate-text') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-text') ? 'text-primary' : '' }}">AI Generate Text</a>
                <a href="{{ route('umkm.ai.generate-image') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-image') ? 'text-primary' : '' }}">AI Generate Image</a>
                <a href="{{ route('umkm.ai.generate-tag') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-tag') ? 'text-primary' : '' }}">AI Generate Tag</a>
                <a href="{{ route('umkm.ai.generate-text.histories') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-text.histories', 'umkm.ai.generate-image.histories', 'umkm.ai.generate-tag.histories') ? 'text-primary' : '' }}">History</a>
            </div>
        </div>
        <div class="col-md-9">
          <div class="fs-3 text-center text-primary">History</div>
            <div class="col-md-6 m-auto text-center mb-3">Tambahkan catatan, kerangka, atau konten yang ingin Anda gunakan.</div>
          <div class="d-flex justify-content-center mb-3">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link {{ Route::is('umkm.ai.generate-text.histories') ? 'active' : '' }}" href="{{ route('umkm.ai.generate-text.histories') }}">Text</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Route::is('umkm.ai.generate-image.histories') ? 'active' : '' }}" href="">Image</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Route::is('umkm.ai.generate-tag.histories') ? 'active' : '' }}" href="{{ route('umkm.ai.generate-tag.histories') }}">Tag</a>
              </li>
            </ul>
          </div>
          <div class="row g-3 mb-3">
            @foreach($responses as $response)
              <div class="col-12 col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div id="text-to-copy">{{ $response->text_response }}</div>
                    </div>
                    <div class="card-footer bg-white border-0">
                      <div class="text-end"><span class="btn btn-sm btn-primary" onclick="copyText('{{ addslashes($response->text_response) }}')"><i class="fa-regular fa-copy"></i></span></div>
                    </div>
                  </div>
              </div>
            @endforeach
          </div>
          <div class="d-flex justify-content-center">
            <div>{{ $responses->appends(request()->query())->links('pagination::bootstrap-4') }}</div>
          </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
  function adjustHeight(element) {
      element.style.height = 'auto';
      element.style.height = element.scrollHeight + 'px';
  }

  function copyText(text) {
    navigator.clipboard.writeText(text).then(() => {
      alert('copied.');
    });
  }
</script>
@endpush
