<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title or "REST API" }}</title>
        <link rel="stylesheet" href="/css/app.css">
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
