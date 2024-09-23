<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: "Space Grotesk", sans-serif;
    }
  </style>
</head>
<body>
  <div class="py-3 px-3 px-lg-5 px-md-5 px-sm-3">
    <div class="d-lg-flex d-md-none d-sm-none d-none rounded-pill" style="background: #210253;">
      @include('new.frontend.templates.subtemplates.navbar')
    </div>
    <div class="d-lg-none d-md-flex d-sm-flex d-flex rounded-3" style="background: #210253;">
      @include('new.frontend.templates.subtemplates.navbar')
    </div>
  </div>
  <div class="w-100" style="position: absolute; z-index: -99999; transform: translate(0, 150px);"><img src="{{ asset('new/images/horn.png') }}" class="img-fluid w-100" alt=""></div>
  <div style="background: linear-gradient(to top, #CEE6FF, #ffffff00);">
    <div class="container py-3 py-md-5">
      <div class="col-12 col-md-9 m-auto">
        <div class="row mb-3 mb-md-5">
          <div class="fs-1 fw-bold lh-1 text-center m-auto mb-4 mb-md-4 mb-lg-5 col-12 col-md-10" style="color: #2388FF;">Sebuah Media Baru Untuk Menyajikan Ide Untuk Brand UMKM</div>
          <div class="text-center m-auto mb-4 mb-md-4 mb-lg-5 col-12 col-md-7">Membuat Foto , Tagline, dan Copywriting yang kekinian. Tidak diperlukan keahlian desain atau pengkodean.</div>
          <div class="text-center">
            <a href="" class="btn rounded-pill px-5 py-3" style="background: linear-gradient(to right, #210253, #EC5AEF); border: none; color: white;"><i class="fa-solid fa-arrow-right"></i> TEST PERSONALITY</a>
          </div>
        </div>
        <div class="row g-3 mb-5 py-3 py-md-5">
          <div class="col-12 col-md-4">
            <div class="text-center fs-1 fw-bold" style="color: #2388FF;">178 +</div>
            <div class="text-center">Tes hari ini</div>
          </div>
          <div class="col-12 col-md-4">
            <div class="text-center fs-1 fw-bold" style="color: #B401BB;">17K +</div>
            <div class="text-center">Total tes keseluruhan</div>
          </div>
          <div class="col-12 col-md-4">
            <div class="text-center fs-1 fw-bold" style="color: #EA0000;">90.2% +</div>
            <div class="text-center">Hasil dinilai akurat atau sangat akurat</div>
          </div>
        </div>
        <div class="row mb-1 mb-md-4 py-5">
          <div class="fs-3 fw-bold text-center">Aplikasi Persona UMKM</div>
        </div>
        <div class="row g-3 align-items-center mb-2 mb-md-5 py-4">
          <div class="col-12 col-md-6 order-1 order-md-2">
            <div class="text-center">
              <img src="{{ asset('new/images/digital-marketing-untuk-umkm.png') }}" alt="" class="img-fluid" width="300">
            </div>
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <div class="fs-3 fw-bold lh-sm mb-2" style="color: #2388FF;">Digital Marketing untuk UMKM</div>
            <div class="lh-sm">Lorem ipsum dolor sit amet consectetur. Nibh vehicula vitae varius massa sit velit. Mattis arcu in molestie aliquet. Et libero arcu erat nisi tincidunt. Eget egestas.</div>
          </div>
        </div>
        <div class="row g-3 align-items-center mb-2 mb-md-5 py-4">
          <div class="col-12 col-md-6 order-1 order-md-1">
            <div class="text-center">
              <img src="{{ asset('new/images/strategi-pemasaran-digital.png') }}" alt="" class="img-fluid" width="300">
            </div>
          </div>
          <div class="col-12 col-md-6 order-2 order-md-2">
            <div class="fs-3 fw-bold lh-sm mb-2" style="color: #2388FF;">Strategi Pemasaran Digital</div>
            <div class="lh-sm">Lorem ipsum dolor sit amet consectetur. Nibh vehicula vitae varius massa sit velit. Mattis arcu in molestie aliquet. Et libero arcu erat nisi tincidunt. Eget egestas.</div>
          </div>
        </div>
        <div class="row g-3 align-items-center mb-2 mb-md-5 py-4">
          <div class="col-12 col-md-6 order-1 order-md-2">
            <div class="text-center">
              <img src="{{ asset('new/images/pemasaran-sosial-media.png') }}" alt="" class="img-fluid" width="200">
            </div>
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <div class="fs-3 fw-bold lh-sm mb-2" style="color: #2388FF;">Pemasaran Sosial Media</div>
            <div class="lh-sm">Lorem ipsum dolor sit amet consectetur. Nibh vehicula vitae varius massa sit velit. Mattis arcu in molestie aliquet. Et libero arcu erat nisi tincidunt. Eget egestas.</div>
          </div>
        </div>
        <div class="row g-3 align-items-center mb-2 mb-md-5 py-4">
          <div class="col-12 col-md-6 order-1 order-md-1">
            <div class="text-center">
              <img src="{{ asset('new/images/marketplace-bagi-para-marketer.png') }}" alt="" class="img-fluid" width="300">
            </div>
          </div>
          <div class="col-12 col-md-6 order-2 order-md-2">
            <div class="fs-3 fw-bold lh-sm mb-2" style="color: #2388FF;">Marketplace Bagi Para Marketer</div>
            <div class="lh-sm">Lorem ipsum dolor sit amet consectetur. Nibh vehicula vitae varius massa sit velit. Mattis arcu in molestie aliquet. Et libero arcu erat nisi tincidunt. Eget egestas.</div>
          </div>
        </div>
        <div class="row g-3 align-items-center mb-2 mb-md-5 py-4">
          <div class="col-12 col-md-6 order-1 order-md-2">
            <div class="text-center">
              <img src="{{ asset('new/images/branding-bersama-persona.png') }}" alt="" class="img-fluid" width="300">
            </div>
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <div class="fs-3 fw-bold lh-sm mb-2" style="color: #2388FF;">Branding Berdasarkan Persona</div>
            <div class="lh-sm">Lorem ipsum dolor sit amet consectetur. Nibh vehicula vitae varius massa sit velit. Mattis arcu in molestie aliquet. Et libero arcu erat nisi tincidunt. Eget egestas.</div>
          </div>
        </div>
        <div class="row g-3 align-items-center mb-2 mb-md-5 py-4">
          <div class="col-12 col-md-6 order-1 order-md-1">
            <div class="text-center">
              <img src="{{ asset('new/images/pemasaran-digital-berbasis-neuromarketing.png') }}" alt="" class="img-fluid" width="300">
            </div>
          </div>
          <div class="col-12 col-md-6 order-2 order-md-2">
            <div class="fs-3 fw-bold lh-sm mb-2" style="color: #2388FF;">Pemasaran Digital Berbasis Neuromarketing</div>
            <div class="lh-sm">Lorem ipsum dolor sit amet consectetur. Nibh vehicula vitae varius massa sit velit. Mattis arcu in molestie aliquet. Et libero arcu erat nisi tincidunt. Eget egestas.</div>
          </div>
        </div>
        <div class="row g-3 align-items-center py-4">
          <div class="col-12 col-md-6 order-1 order-md-2">
            <div class="text-center">
              <img src="{{ asset('new/images/aplikasi-dengan-ai.png') }}" alt="" class="img-fluid" width="300">
            </div>
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <div class="fs-3 fw-bold lh-sm mb-2" style="color: #2388FF;">Aplikasi dengan Artificial Intelegent ( AI )</div>
            <div class="lh-sm">Lorem ipsum dolor sit amet consectetur. Nibh vehicula vitae varius massa sit velit. Mattis arcu in molestie aliquet. Et libero arcu erat nisi tincidunt. Eget egestas.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="background: #210253;">
    <div class="container">
      <div class="row pt-5 pb-3 g-4">
        <div class="col-12 col-md-3">
          <div><img src="{{ asset('logo.png') }}" alt="" class="img-fluid" width="200"></div>
        </div>
        <div class="col-12 col-md-2">
          <div class="text-white mb-2 fw-bold">MENU</div>
          <div class="text-white">HOME</div>
          <div class="text-white">UMKM</div>
          <div class="text-white">Pendaftaran</div>
        </div>
        <div class="col-12 col-md-4">
          <div class="text-white mb-2 fw-bold">ADDRESS</div>
          <div class="text-white">Universitas Ibn Khaldun (UIKA) Bogor Jln. KH. Sholeh Iskandar, RT.01/RW.10, Kedung Badak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16162</div>
        </div>
        <div class="col-12 col-md-3">
          <div class="text-white mb-2 fw-bold">CONTACT US</div>
          <div class="text-white mb-2"><i class="fa-solid fa-phone"></i> 088296830496</div>
          <div class="text-white mb-2"><i class="fa-solid fa-envelope"></i> info@personaumkm.com</div>
        </div>
      </div>
      <hr class="text-white m-0">
      <div class="row g-3 py-4">
        <div class="col-12 col-md-6 order-1 order-md-2">
          <div class="d-flex justify-content-between justify-content-md-end gap-3">
            <a href="" class="text-white"><i class="fa-brands fa-facebook-f fs-5"></i></a>
            <a href="" class="text-white"><i class="fa-brands fa-x-twitter fs-5"></i></a>
            <a href="" class="text-white"><i class="fa-brands fa-instagram fs-5"></i></a>
            <a href="" class="text-white"><i class="fa-brands fa-youtube fs-5"></i></a>
            <a href="" class="text-white"><i class="fa-brands fa-tiktok fs-5"></i></a>
          </div>
        </div>
        <div class="col-12 col-md-6 order-2 order-md-1">
          <div class="text-white text-center text-md-start">Copyright By @ Persona UMKM</div>
        </div>
      </div>
    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"   crossorigin="anonymous"></script>
</body>
</html>