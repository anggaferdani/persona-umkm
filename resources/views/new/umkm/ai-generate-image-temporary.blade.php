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
            <div class="fs-3 text-center text-primary">2. Form</div>
            <div class="col-md-6 m-auto text-center mb-5">Lengkapi yang diperlukan untuk diolah dan digenerate oleh AI.</div>

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

            @if($detailProduks->isEmpty())
              <div class="alert alert-important alert-danger" role="alert">Lengkapi detail produk anda <a href="{{ route('umkm.detail-produk') }}">disini.</a></div>
            @endif

            <form action="{{ route('umkm.ai.generate-image.temporary.post') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <label class="mb-1">Template *contoh</label>
              <div class="col-2 mb-3">
                <img src="/image-template/contoh/{{ $imageTemplate->contoh }}" alt="" class="img-fluid w-100" style="pointer-events: none;">
              </div>
              <input type="hidden" class="form-control" name="image_template_id" value="{{ $imageTemplate->id }}">
              <div class="mb-3">
                <label>Produk <span class="text-danger">*</span></label>
                <select class="form-select border border-primary mb-3" name="detail_produk_id" required>
                  <option disabled selected value="">Pilih Produk</option>
                  @foreach($detailProduks as $detailProduk)
                    <option value="{{ $detailProduk->id }}" {{ old('detail_produk_id', session('detail_produk_id')) == $detailProduk->id ? 'selected' : '' }}>{{ $detailProduk->nama_produk }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label>Image <span class="text-danger">*</span></label>
                <div class="mb-1">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="image_option" id="inlineRadio1" value="manual" checked>
                    <label class="form-check-label" for="inlineRadio1">Manual</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="image_option" id="inlineRadio2" value="ai">
                    <label class="form-check-label" for="inlineRadio2">AI <span class="badge bg-blue">NEW</span></label>
                  </div>
                </div>
                <div class="manual">
                  <input type="file" class="form-control" name="image">
                  <div class="text-muted small mt-1">Ukuran dimensi ratio harus 1:1 *persegi</div>
                  @error('image')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="ai">
                  <div class="d-md-flex d-block border border-primary rounded p-3 mb-1">
                    <textarea class="form-control border-0 p-0 mb-3 mb-md-0" name="text_request" id="prompt" rows="1" placeholder="Deskripsikan apa yang mau digenerate?" oninput="adjustHeight(this)"></textarea>
                  </div>
                  <div id="prompt-char-count" class="text-muted small">0/170</div>
                  <div class="small text-muted mb-3">Contoh : Nasi goreng rendang</div>
                </div>
              </div>
              <div class="mb-3">
                <label>Judul <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="judul" id="judul" required>
                <div id="judul-char-count" class="text-muted small mt-1">0/30</div>
                @error('judul')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
              <div class="mb-3">
                <label>Deskripsi <span class="text-danger">*</span></label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" oninput="adjustHeight(this)"></textarea>
                <div id="deskripsi-char-count" class="text-muted small mt-1">0/100</div>
                @error('deskripsi')<div class="text-danger">{{ $message }}</div>@enderror
              </div>
              <div class="d-flex gap-1">
                <a href="{{ route('umkm.ai.generate-image') }}" class="btn btn-secondary">Back</a>
                <div class="manualButton">
                  <button type="submit" class="btn btn-primary" @if($detailProduks->isEmpty()) disabled @endif>Submit</button>
                </div>
                <div class="aiButton">
                  <button type="submit" class="btn btn-primary px-3 d-flex align-items-center gap-2" @if($detailProduks->isEmpty() || Auth::user()->credits == 0) disabled @endif>Generate <i class="fa-solid fa-coins"></i> 10</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const maxCharPrompt = 170;
    const maxCharJudul = 30;
    const maxCharDeskripsi = 100;

    function updateCharCount(inputElement, countElement, maxChar) {
      const currentLength = inputElement.value.length;
      countElement.textContent = `${currentLength}/${maxChar}`;
      if (currentLength > maxChar) {
        inputElement.value = inputElement.value.substring(0, maxChar);
        countElement.textContent = `${maxChar}/${maxChar}`;
      }
    }

    const promptInput = document.getElementById('prompt');
    const judulInput = document.getElementById('judul');
    const deskripsiInput = document.getElementById('deskripsi');
    const promptCharCount = document.getElementById('prompt-char-count');
    const judulCharCount = document.getElementById('judul-char-count');
    const deskripsiCharCount = document.getElementById('deskripsi-char-count');

    promptInput.addEventListener('input', function() {
      updateCharCount(promptInput, promptCharCount, maxCharPrompt);
    });

    judulInput.addEventListener('input', function() {
      updateCharCount(judulInput, judulCharCount, maxCharJudul);
    });

    deskripsiInput.addEventListener('input', function() {
      updateCharCount(deskripsiInput, deskripsiCharCount, maxCharDeskripsi);
    });
  });
</script>
<script>
  function adjustHeight(element) {
      element.style.height = 'auto';
      element.style.height = element.scrollHeight + 'px';
  }

  document.addEventListener("DOMContentLoaded", function() {
    var textareas = document.querySelectorAll("textarea");
    
    textareas.forEach(function(textarea) {
        adjustHeight(textarea);
    });
  });

  function copyText(text) {
    navigator.clipboard.writeText(text).then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Copied!',
            text: 'Text has been copied to clipboard.',
            showConfirmButton: false,
            timer: 1500
        });
    }).catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong while copying text.',
        });
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
    const fileInput = document.querySelector('input[name="image"]');
    const textRequest = document.querySelector('textarea[name="text_request"]');

    function toggleSections() {
      if (radioManual.checked) {
        manualDiv.style.display = 'block';
        aiDiv.style.display = 'none';
        manualButton.style.display = 'block';
        aiButton.style.display = 'none';
        textRequest.value = '';
      } else if (radioAi.checked) {
        manualDiv.style.display = 'none';
        aiDiv.style.display = 'block';
        manualButton.style.display = 'none';
        aiButton.style.display = 'block';
        fileInput.value = '';
      }
    }

    radioManual.addEventListener('change', toggleSections);
    radioAi.addEventListener('change', toggleSections);

    toggleSections();
  });
</script>
@endpush
