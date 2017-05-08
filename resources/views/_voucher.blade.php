@extends('layouts.master')

@section('content')
<!-- Jumbotron Header -->
        <!-- <header class="jumbotron hero-spacer">
            <h1>Voucher</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p><a class="btn btn-primary btn-large">Call to action!</a>
            </p>
            <p>
              Your point is 10
            </p>
        </header> -->
        <!-- <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
                You are logged in!
            </div>
        </div> -->
        <!-- <p>
          sd
        </p> -->
        <hr>
        <div class="row">
          <div class="panel panel-default">
              <!-- <div class="panel-heading"></div> -->

              <div class="panel-body">
                  <h2>You have {{ $user->point }} point </h2>
              </div>
          </div>
        </div>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Voucher</h3>
            </div>
        </div>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Get Now!</a> <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Get Now!</a> <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Get Now!</a> <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Get Now!</a> <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
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
@endsection
