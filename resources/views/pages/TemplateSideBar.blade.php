<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul_tab')</title>

    <link rel="stylesheet" href=" {{ asset('../css/Pages/TemplateSideBar.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   <div class="sideBar">
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-large text-end fs-3"
        onclick="w3_close()">&times;</button>
        <a href="#" class="w3-bar-item" id="listMenu"><p>Link ini digunakan untuk</p></a>
        <a href="#" class="w3-bar-item" id="listMenu"><p>Link 2</p></a>
        <a href="#" class="w3-bar-item" id="listMenu"><p>Link 3</p></a>
        <a href="#" class="w3-bar-item" id="listMenu"><p>Link 4</p></a>
        <a href="#" class="w3-bar-item" id="listMenu"><p>Link 5</p></a>
    </div>  
    <img class="sideBarBottom" id="sbbOpen" src="{{asset('../../images/bottomLeft.png')}}" >
   </div>
      
    <div id="main">
        <div class="btnSideBar">
            <img id="openNav" src="{{asset('../../images/sidebarBtn.png')}}" onclick="w3_open()">
        </div>
        <div class="container">
      <div class="w3-container" id="w3-container">
            <div class="contentSidebar">
                @yield('contentSideBar')
            </div>
        </div>
    </div>

      <img class="bottomLeft" src="{{asset('../../images/bottomLeft.png')}}" >
      <img class="bottomRight" src="{{asset('../../images/bottomRight.png')}}" >
      
      
    </div>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet"/>

    <script>
        function w3_open() {
          document.getElementById("main").style.marginLeft = "17.5%";
          document.getElementById("mySidebar").style.width = "17.5%";
        //   document.getElementById("w3-container").style.width = "75%";
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("openNav").style.display = 'none';
          document.getElementById("sbbOpen").style.display = 'block';
        }
        function w3_close() {
          document.getElementById("main").style.marginLeft = "0%";
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("openNav").style.display = "inline-block";
          document.getElementById("sbbOpen").style.display = 'none';

        }
        </script>
  </body>
</html>