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

        <form action="{{url('/otp/submit', $user->id)}}" method="post">
          @csrf
     <div class="otp-bx mt-4 gap-sm-3 gap-2">
       <input class="no-spinner" type="number" name="otp[]" maxlength="1">
       <input class="no-spinner" type="number" name="otp[]" maxlength="1">
       <input class="no-spinner" type="number" name="otp[]" maxlength="1">
       <input class="no-spinner" type="number" name="otp[]" maxlength="1">
       <input class="no-spinner" type="number" name="otp[]" maxlength="1">
       <input class="no-spinner" type="number" name="otp[]" maxlength="1">
      
     </div>

      <div class="btn-isi d-flex justify-content-center mt-4">
        <button type="submit" class="btn bg-blue d-flex align-items-center gap-2 justify-content-center w-50" role="button">
            <p class="fw-bold">LANJUT</p>
            <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
            <p></p>
        </button>
      </div>
      </form>
      <p id="timer" class="text-center text-danger mt-4"></p>
      <p class="fw-bold text-center mt-4">Tidak Menerima Kode OTP?</p>
      <button class="btn" type="submit" id="resent-otp" style="border: none"><p class="text-blue text-center">Kirim Ulang Kode</p></button>
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

      let timeInSeconds = 60;

    // Get a reference to the timer element
    const timerElement = document.getElementById("timer");

    // Function to update the timer display
    function updateTimer() {
      timerElement.textContent = `00:00:${timeInSeconds}`;

      // If time is up, stop the countdown
      if (timeInSeconds === 0) {
        clearInterval(interval);
        timerElement.textContent = "Time's up!";
      } else {
        timeInSeconds--; // Decrement the time
      }
    }

    // Call updateTimer() every second
    const interval = setInterval(updateTimer, 1000);

    // Initial call to set up the timer display
    updateTimer();
      
    </script>
@endsection