@extends('layouts.master')
@extends('layouts._navbar')

@section('content')
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>Promotion</h1>

    </header>

    <hr>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Latest Features</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://gazettereview.com/wp-content/uploads/2017/04/Uber-4.jpg" alt="">
                </br>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">More Info</button>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                      </div>
                      <div class="modal-body">
                        <p>Some text in the modal.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://gazettereview.com/wp-content/uploads/2017/02/Uber-2.jpg" alt="">
                </br>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">More Info</button>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                      </div>
                      <div class="modal-body">
                        <p>Some text in the modal.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://zdnet3.cbsistatic.com/hub/i/2017/01/23/b0d806af-9a2d-4963-a5e4-47157f186174/2402da623ccd21108b7d02551a9b9a7f/uber.jpg" alt="">
                </br>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">More Info</button>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                      </div>
                      <div class="modal-body">
                        <p>Some text in the modal.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://media.graytvinc.com/images/Uber-logo.jpg" alt="">
              </br>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">More Info</button>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                      </div>
                      <div class="modal-body">
                        <p>Some text in the modal.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    </div>
    <!-- /.row -->

    <hr>




</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
@endsection
