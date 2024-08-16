@extends('NewPagesTemplate.NavbarLengkap')
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
            <div class="col-md-6 m-auto text-center mb-5">Semua yang pernah anda generate seperti text, image dan tag tersimpan disini.</div>
            <div class="d-flex justify-content-center mb-3">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link {{ Route::is('umkm.ai.generate-text.histories') ? 'active' : '' }}" href="{{ route('umkm.ai.generate-text.histories') }}">Text</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Route::is('umkm.ai.generate-image.histories') ? 'active' : '' }}" href="{{ route('umkm.ai.generate-image.histories') }}">Image</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Route::is('umkm.ai.generate-tag.histories') ? 'active' : '' }}" href="{{ route('umkm.ai.generate-tag.histories') }}">Tag</a>
                </li>
              </ul>
            </div>
            <div class="row g-3 mb-5">
              @foreach ($temporaryImages as $temporaryImage)
                <div class="d-flex justify-content-center mb-2">
                    <div id="canvas-{{ $temporaryImage->id }}" class="mb-2" style="position: relative; width: 300px; height: 300px; pointer-events: none;">
                      @if($temporaryImage->type == 1)
                        <img src="/temporary/{{ $temporaryImage->image }}" alt="" class="img-fluid w-100" style="position: absolute; width: 100%; height: 100%;">
                      @else
                        <img src="{{ $temporaryImage->image }}" alt="" class="img-fluid w-100" style="position: absolute; width: 100%; height: 100%;">
                      @endif
                        <img src="/image-template/template/{{ $temporaryImage->imageTemplate->template }}" alt="" class="img-fluid w-100" style="position: absolute; width: 100%; height: 100%;">
                        {!! $temporaryImage->finalHtml !!}
                    </div>
                </div>
                <div class="col-md-3 col-6 m-auto mb-5">
                    <button class="btn btn-primary w-100 mb-2" onclick="downloadImage('{{ $temporaryImage->id }}', '{{ $temporaryImage->image }}')">Download</button>
                </div>
              @endforeach
            </div>
            <div class="d-flex justify-content-center">
              <div class="">{{ $temporaryImages->appends(request()->query())->links('pagination::bootstrap-4') }}</div>
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

  function disableButton() {
      document.getElementById('submitButton').disabled = true;
  }

  function downloadImage(canvasId, imageFilename) {
    const canvasElement = document.getElementById('canvas-' + canvasId);
    
    if (canvasElement) {
        domtoimage.toPng(canvasElement)
            .then(function (dataUrl) {
                var link = document.createElement('a');
                link.href = dataUrl;
                link.download = imageFilename;
                link.click();
            })
            .catch(function (error) {
                console.error('Error:', error);
            });
    } else {
        console.error('Canvas element not found:', canvasId);
    }
  }
</script>
@endpush
