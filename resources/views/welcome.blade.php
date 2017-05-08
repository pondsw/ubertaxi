<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Uber</title>
        <link rel="stylesheet" href="/css/app.css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    </head>
    <body>


          @include('layouts._navbar')
          <!-- Header -->
          <a name="about"></a>
          <div class="intro-header">
              <div class="container">

                  <div class="row">
                      <div class="col-lg-12">
                          <div class="intro-message">
                              <h1>UBER</h1>
                              <h3>Vouchers and Promotions</h3>
                              <hr class="intro-divider">
                              <ul class="list-inline intro-social-buttons">
                                  <li>
                                      <a href="https://twitter.com/uber" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                                  </li>
                                  <li>
                                      <a href="https://github.com/pondsw/ubertaxi.git" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                                  </li>
                                  <li>
                                      <a href="https://www.facebook.com/uberthai" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Facebook</span></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>

              </div>
              <!-- /.container -->

          </div>
          <hr>
          @include('layouts._footer')



        <script src="/js/app.js" charset="utf-8"></script>
        @yield('script')

    </body>
</html>
