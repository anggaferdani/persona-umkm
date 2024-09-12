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
            <div class="fs-3 text-center text-primary">Tag</div>
            <div class="col-md-6 m-auto text-center mb-3">Buat Hastag agar produkmu terkenal.</div>
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
              @if($todayEvent)
              <form action="{{ route('umkm.ai.generate-tag.store') }}" method="post">
                @csrf
                <select class="form-select border border-primary mb-3" name="detail_produk_id" required>
                  <option disabled selected value="">Pilih Produk</option>
                  @foreach($detailProduks as $detailProduk)
                    <option value="{{ $detailProduk->id }}" {{ old('detail_produk_id', session('detail_produk_id')) == $detailProduk->id ? 'selected' : '' }}>{{ $detailProduk->nama_produk }}</option>
                  @endforeach
                </select>
                <input type="hidden" class="form-control" name="text_request" value="buat yang bertemakan {{ $todayEvent['keterangan'] }}">
                <div class="alert alert-important alert-success" role="alert">
                  <div class="d-flex justify-content-center mb-2"><img src="{{ asset('images/bouncy-calendar-with-marked-day-and-pencil.gif') }}" alt="" class="" width="100"></div>
                  <div class="text-center mb-3">Bertepatan dengan <span class="fw-bold">{{ $todayEvent['keterangan'] }}</span> pada tanggal <span class="fw-bold">{{ $todayEvent['tanggal'] }}</span> apakah anda ingin membuat tag bertemakan <span class="fw-bold">{{ $todayEvent['keterangan'] }}</span>?</div>
                  <button id="submitButton" type="submit" class="btn btn-primary m-auto px-3 d-flex align-items-center gap-2" @if($detailProduks->isEmpty() || Auth::user()->credits == 0) disabled @endif>Generate <i class="fa-solid fa-coins"></i> 10</button>
                </div>
              </form>
              @endif
              @if($detailProduks->isEmpty())
                <div class="alert alert-important alert-danger" role="alert">Lengkapi detail produk anda <a href="{{ route('umkm.detail-produk') }}">disini.</a></div>
              @endif
            <form action="{{ route('umkm.ai.generate-tag.store') }}" method="post">
              @csrf
              <select class="form-select border border-primary mb-3" name="detail_produk_id" required>
                <option disabled selected value="">Pilih Produk</option>
                @foreach($detailProduks as $detailProduk)
                  <option value="{{ $detailProduk->id }}" {{ old('detail_produk_id', session('detail_produk_id')) == $detailProduk->id ? 'selected' : '' }}>{{ $detailProduk->nama_produk }}</option>
                @endforeach
              </select>
              <div class="d-md-flex d-block border border-primary rounded p-3 mb-1">
                <textarea class="form-control border-0 p-0 mb-3 mb-md-0" name="text_request" id="prompt" rows="1" placeholder="Deskripsikan apa yang mau digenerate? lebih detail lebih baik hasilnya" oninput="adjustHeight(this)">{{ old('text_request', session('text_request', '')) }}</textarea>
                <div>
                  <button id="submitButton" type="submit" class="btn btn-primary px-3 w-100 d-flex align-items-center gap-2" @if($detailProduks->isEmpty() || Auth::user()->credits == 0) disabled @endif>Generate <i class="fa-solid fa-coins"></i> 10</button>
                </div>
              </div>
              <div id="prompt-char-count" class="text-muted small">0/170</div>
              <div class="small text-muted mb-3">Contoh : Buatkan tag yang sedang trending bertemakan 17 Agustus.</div>
            </form>
            @if(session('responses') && count(session('responses')) > 0)
            <div class="row g-3">
              @foreach(session('responses') as $response)
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
            @endif
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const maxCharPrompt = 170;

    function updateCharCount(inputElement, countElement, maxChar) {
      const currentLength = inputElement.value.length;
      countElement.textContent = `${currentLength}/${maxChar}`;
      if (currentLength > maxChar) {
        inputElement.value = inputElement.value.substring(0, maxChar);
        countElement.textContent = `${maxChar}/${maxChar}`;
      }
    }

    const promptInput = document.getElementById('prompt');
    const promptCharCount = document.getElementById('prompt-char-count');

    promptInput.addEventListener('input', function() {
      updateCharCount(promptInput, promptCharCount, maxCharPrompt);
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
</script>
@endpush
