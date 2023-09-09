@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','OTP Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Otp.css')}}">
<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}">
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
    <div class="container" id="containerOtp">
      <p class="fw-bold text-center">MASUKKAN OTP</p>
      <p class=" text-center">kami telah mengirimkan kode <br>
        akses melalui email untuk verifikasi</p>

     <div class="otp-bx mt-4 gap-sm-3 gap-2">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
     </div>

      <div class="btn-isi d-flex justify-content-center mt-4">
        <a class="btn bg-blue d-flex align-items-center gap-2 justify-content-center w-50" href="/welcome" role="button">
            <p class="fw-bold">LANJUT</p>
            <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
            <p></p>
        </a>
      </div>
      <p class="text-center text-danger mt-4">00:00:59</p>
      <p class="fw-bold text-center mt-4">Tidak Menerima Kode OTP?</p>
      <p class="text-blue text-center">Kirim Ulang Kode</p>
    </div>

    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    
    <script type="text/javascript"></script>
    <script>
      const inputs = document.querySelectorAll(".otp-bx input");
    
      inputs.forEach((input, index) => {
        input.dataset.index = index;
        input.addEventListener("paste", handleOtppaste);
        input.addEventListener("keyup", handleOtp);;
      });
    
      function handleOtppaste(e) {
        const data = e.clipboardData.getData("text");
        const value = data.split("");
        if(value.length === inputs.length) {
          inputs.forEach((input, index) => (input.value = value[index]));
          submit();
        }
      }
    
      function handleOtp(e) {
        const input = e.target;
        let value = input.value;
        input.value = "";
        input.value = value ? value[0] : "";
    
        let fieldIndex = input.dataset.index;
        if(value.length > 0 && fieldIndex < inputs.length - 1 ){
          input.nextElementSibling.focus();
        }
    
        if(e.key === "Backspace" && fieldIndex > 0){
          input.previousElementSibling.focus();
        }
    
        if(fieldIndex == inputs.length - 1){
          submit();
        }
      }
      function submit(){
        console.log("Submitting....!");
        let otp = "";
        inputs.forEach((input) => {
          otp += input.value;
          // input.disabled = true;
          // input.classList.add("disabled");
        });
        console.log(otp);
      }
    
    </script>
@endsection