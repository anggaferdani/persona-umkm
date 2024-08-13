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
                <a href="{{ route('umkm.ai.generate-image') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-image.response') ? 'text-primary' : '' }}">AI Generate Image</a>
                <a href="{{ route('umkm.ai.generate-tag') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-tag') ? 'text-primary' : '' }}">AI Generate Tag</a>
                <a href="{{ route('umkm.ai.generate-text.histories') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-text.histories', 'umkm.ai.generate-image.histories', 'umkm.ai.generate-tag.histories') ? 'text-primary' : '' }}">History</a>
            </div>
        </div>
        <div class="col-md-9">
          <div class="fs-3 text-center text-primary">3. Response</div>
          <div class="col-md-6 m-auto text-center mb-5">Tampilkan hasil atau tanggapan setelah proses generasi data oleh AI.</div>

          <div class="m-auto col-4 mb-3">
            <div id="canvas" class="mb-2" style="position: relative; aspect-ratio: 1; pointer-events: none;">
              <img src="/temporary/{{ $temporaryImage->image }}" alt="" class="img-fluid w-100" style="position: absolute;">
              <img src="/image-template/template/{{ $imageTemplate->template }}" alt="" class="img-fluid w-100" style="position: absolute;">
            </div>
            <div>
              <button class="btn btn-primary w-100 mb-2" onclick="downloadImage()">Download</button>
              <a href="{{ route('umkm.ai.generate-image.temporary', $imageTemplate->id) }}" class="btn btn-secondary w-100 confirmation-when-i-click-back">Back</a>
            </div>
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

  const imageFilename = '{{ $temporaryImage->image }}';

  function downloadImage() {
    domtoimage.toPng(document.getElementById('canvas'))
      .then(function (dataUrl) {
          var link = document.createElement('a');
          link.href = dataUrl;
          link.download = imageFilename; 
          link.click();
      })
      .catch(function (error) {
          console.error('Error', error);
      });
  }
</script>
@endpush
