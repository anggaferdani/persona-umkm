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
                <a href="{{ route('umkm.ai.generate-image') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-image.temporary') ? 'text-primary' : '' }}">AI Generate Image</a>
                <a href="{{ route('umkm.ai.generate-tag') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-tag') ? 'text-primary' : '' }}">AI Generate Tag</a>
                <a href="{{ route('umkm.ai.generate-text.histories') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-text.histories', 'umkm.ai.generate-image.histories', 'umkm.ai.generate-tag.histories') ? 'text-primary' : '' }}">History</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="fs-3 text-center text-primary">2. Form</div>
            <div class="col-md-6 m-auto text-center mb-5">Lengkapi yang diperlukan untuk diolah dan digenerate oleh AI.</div>

            @if(Session::get('error'))
              <div class="alert alert-important alert-danger" role="alert">
                {{ Session::get('error') }}
              </div>
            @endif

            <form action="{{ route('umkm.ai.generate-image.temporary.post') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <label class="mb-1">Template *contoh</label>
              <div class="col-2 mb-3">
                <img src="/image-template/contoh/{{ $imageTemplate->contoh }}" alt="" class="img-fluid w-100" style="pointer-events: none;">
              </div>
              <input type="hidden" class="form-control" name="image_template_id" value="{{ $imageTemplate->id }}">
              <div class="mb-3">
                <label>Image</label>
                <div class="mb-1">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="image_option" id="inlineRadio1" value="manual" checked>
                    <label class="form-check-label" for="inlineRadio1">Manual</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="image_option" id="inlineRadio2" value="ai">
                    <label class="form-check-label" for="inlineRadio2">AI</label>
                  </div>
                </div>
                <div class="manual">
                  <input type="file" class="form-control" name="image">
                  <div class="text-danger small mt-1">Ukuran harus 1:1 *persegi</div>
                  @error('image')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="ai">
                  @if($user->detailProduk)
                    <input type="hidden" class="form-control" name="detail_produk_id" value="{{ $user->detailProduk->id }}">
                  @endif
                  <div class="d-md-flex d-block border border-primary rounded p-3 mb-3">
                    <textarea class="form-control border-0 p-0 mb-3 mb-md-0" name="text_request" rows="1" placeholder="Apa yang kamu ingin buat?" oninput="adjustHeight(this)"></textarea>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul">
                @error('judul')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
              <div class="mb-3">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi">
                @error('deskripsi')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
              <div class="d-flex gap-1">
                <a href="{{ route('umkm.ai.generate-image') }}" class="btn btn-secondary">Back</a>
                <div class="manualButton">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="aiButton">
                  <button type="submit" class="btn btn-primary px-3 d-flex align-items-center gap-2" @if(!$user->detailProduk || Auth::user()->credits == 0) disabled @endif>Generate <i class="fa-solid fa-coins"></i> 10</button>
                </div>
              </div>
            </form>
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

  document.addEventListener('DOMContentLoaded', function() {
    const manualDiv = document.querySelector('.manual');
    const manualButton = document.querySelector('.manualButton');
    const aiDiv = document.querySelector('.ai');
    const aiButton = document.querySelector('.aiButton');
    const radioManual = document.getElementById('inlineRadio1');
    const radioAi = document.getElementById('inlineRadio2');

    function toggleSections() {
      if (radioManual.checked) {
        manualDiv.style.display = 'block';
        aiDiv.style.display = 'none';
        manualButton.style.display = 'block';
        aiButton.style.display = 'none';
      } else if (radioAi.checked) {
        manualDiv.style.display = 'none';
        aiDiv.style.display = 'block';
        manualButton.style.display = 'none';
        aiButton.style.display = 'block';
      }
    }

    radioManual.addEventListener('change', toggleSections);
    radioAi.addEventListener('change', toggleSections);

    toggleSections();
  });
</script>
@endpush
