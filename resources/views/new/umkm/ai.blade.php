@extends('NewPagesTemplate.NavbarLengkap')
@section('judul_tab','AI')
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
          <div class="fs-3 text-center text-primary mb-2">Kenapa AI?</div>
            <div class="m-auto text-center mb-3">Kecerdasan Buatan (AI) adalah teknologi yang memungkinkan mesin untuk meniru kemampuan kognitif manusia, seperti belajar, memahami, dan beradaptasi. AI mencakup berbagai aplikasi yang dapat meningkatkan efisiensi dan kreativitas dalam berbagai bidang. Salah satu contoh penerapan AI adalah ChatGPT, model bahasa yang dikembangkan oleh OpenAI.</div>
            <div class="row">
              <div class="col-12 col-md-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{ asset('images/3d-casual-life-chatbot-using-laptop.png') }}" class="img-fluid mb-2" width="150" alt="">
                    </div>
                    <div class="fs-5 mb-2 text-primary text-center">Generate Image</div>
                    <div class="text-center">Dengan AI, deskripsi teks dapat diubah menjadi gambar visual sesuai kebutuhan, mempermudah pembuatan konten visual yang tepat dan menarik.</div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{ asset('images/3d-casual-life-chatgpt-robot-holding-loupe.png') }}" class="img-fluid mb-2" width="105" alt="">
                    </div>
                    <div class="fs-5 mb-2 text-primary text-center">Generate Text</div>
                    <div class="text-center">ChatGPT dapat menciptakan deskripsi media sosial yang menarik dan relevan, membantu meningkatkan keterlibatan audiens di platform media sosial.</div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{ asset('images/3d-casual-life-chatgpt-robot-with-speech-bubble.png') }}" class="img-fluid mb-2" width="150" alt="">
                    </div>
                    <div class="fs-5 mb-2 text-primary text-center">Generate Tag</div>
                    <div class="text-center">AI dapat menghasilkan tag yang efektif dan sesuai dengan konten yang diposting, meningkatkan jangkauan dan visibilitas di media sosial.</div>
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
  function adjustHeight(element) {
      element.style.height = 'auto';
      element.style.height = element.scrollHeight + 'px';
  }
</script>
@endpush
