<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title or "REST API" }}</title>
        <link rel="stylesheet" href="/css/app.css">
        <meta name = "format-detection" content = "telephone=no" />
        <!-- <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.2.1.js"></script>
        <script src="js/script.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/jquery.ui.totop.js"></script>
        <script src="js/jquery.equalheights.js"></script>
        <script src="js/jquery.mobilemenu.js"></script>
        <script src="js/jquery.easing.1.3.js"></script> -->
    </head>
    <body>
        <div id ="app">

          @include('layouts._navbar')
          <div class="container" style="margin-top:77px">
              @yield('content')
              <hr>
              @include('layouts._footer')
          </div>
        </div>



        <script src="/js/app.js" charset="utf-8"></script>
        @yield('script')

    </body>
</html>
