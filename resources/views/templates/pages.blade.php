<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <!-- CSS files -->
    <link href="{{ asset('tabler/dist/css/tabler.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/tabler-flags.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/tabler-payments.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/demo.min.css?1684106062') }}" rel="stylesheet"/>
    <link href="{{ asset('jquery-plugin-for-animated-stackable-toast-messages-toast/dist/jquery.toast.min.css') }}" rel="stylesheet"/>
    @stack('stylesheets')
    @livewireStyles
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
      ::-webkit-resizer{
        display: none;
      }
    </style>
  </head>
  <body >
    <script src="{{ asset('tabler/dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page">
      <!-- Sidebar -->
      @include('templates.subtemplates.sidebar')
      <!-- Navbar -->
      @include('templates.subtemplates.header')
      <div class="page-wrapper">
        
        @yield('content')

        @include('templates.subtemplates.footer')
      </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('tabler/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/maps/world.js?1684106062') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('tabler/dist/js/tabler.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('tabler/dist/js/demo.min.js?1684106062') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('jquery-plugin-for-animated-stackable-toast-messages-toast/dist/jquery.toast.min.js') }}" defer></script>
    <script src="{{ asset('jquery-plugin-for-animated-stackable-toast-messages-toast/src/jquery.toast.js') }}" defer></script>

    <script type="text/javascript">
      document.addEventListener("livewire:load", function(){
        Livewire.on('success', postId => {
          $.toast({
            text: "Lorem ipsum dolor sit amet consectetur adipiscing elit aptent netus penatibus cum nam",
            position: "top-right",
            bgColor:'#2fb344',
          });
        });
      });
    </script>

    <script type="text/javascript">
      document.addEventListener("livewire:load", function(){
        Livewire.on('error', postId => {
          $.toast({
            text: "Lorem ipsum dolor sit amet consectetur adipiscing elit aptent netus penatibus cum nam",
            position: "top-right",
            bgColor:'#d63939',
          });
        });
      });
    </script>

    @stack('scripts')
    @livewireScripts
  </body>
</html>