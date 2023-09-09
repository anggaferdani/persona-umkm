<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opening Kemendikbud</title>  
    <link rel="stylesheet" href=" {{ asset('../css/NewPages/Opening.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}">
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
    
    <div class="openingContent">
       <div class="content">
        <img class="my-3 logoPersona" src="{{asset('../../images/logoPersona.png')}}">
        
        <div class="form">
          <div class="form-group my-3">
              <div class="form-input-container">
                  <input type="email" class="form-control email-input" id="txtemailLogin" placeholder="Email">
              </div>
          </div>
          <div class="form-group my-3">
              <div class="form-input-container">
                  <input type="password" class="form-control email-input" id="txtemailLogin" placeholder="Pasword">
              </div>
          </div>
          <a href="/lupapassword" class="text-decoration-none text-end" style="color: grey;"><p>Lupa Password?</p></a>
        </div>
        <div class="button text-center mt-3">
          <a class="btn btn-login bg-blue text-center" href="/otp" role="button"><p class="mb-0">Login</p></a>
        </div>
        <p class="text-center my-2">Belum Punya Akun? <a class="mendaftar" href="/register">Mendaftar</a></p>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>