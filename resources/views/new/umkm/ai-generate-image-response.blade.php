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
          @include('new.umkm.sidebar')
        </div>
        <div class="col-md-9">
          <div class="fs-3 text-center text-primary">3. Response</div>
          <div class="col-md-6 m-auto text-center mb-5">Tampilkan hasil atau tanggapan setelah proses generasi data oleh AI.</div>

          <div class="d-flex justify-content-center mb-2">
            <div id="canvas" class="mb-2" style="position: relative; width: 300px; height: 300px;  pointer-events: none;">
              @if($temporaryImage->type == 1)
                <img src="/temporary/{{ $temporaryImage->image }}" alt="" class="img-fluid w-100" style="position: absolute; width: 100%; height: 100%;">
              @else
                <img src="{{ $temporaryImage->image }}" alt="" class="img-fluid w-100" style="position: absolute; width: 100%; height: 100%;">
              @endif
              <img src="/image-template/template/{{ $imageTemplate->template }}" alt="" class="img-fluid w-100" style="position: absolute; width: 100%; height: 100%;">
              {!! $finalHtml !!}
            </div>
          </div>
          <div class="col-md-3 col-6 m-auto">
            <button class="btn btn-primary w-100 mb-2" onclick="downloadImage()">Download</button>
            <a href="{{ route('umkm.ai.generate-image.temporary', $imageTemplate->id) }}" class="btn btn-secondary w-100 confirmation-when-i-click-back">Back</a>
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
