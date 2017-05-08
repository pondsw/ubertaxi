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
            <h3>Features</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">



        <div class="col-md-3 col-sm-6 hero-feature" >
            <div class="thumbnail">
                <img src="http://www.123newyear.com/wp-content/uploads/2015/04/chinese-new-year-card.jpg" alt="">
                </br>
                <p>Chinese New Year Promotion </p>
                </br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#getCode">Get Now!</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#getInfo">More Info</button>
                <div class="modal fade" id="getInfo" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Information</h4>
                      </div>
                      <div class="modal-body">
                        <p>type code "CHINA" to get 50 Baht discount. This code can use unlimited times until 28 Feb. 2017</p>
                      </br>
                        <p> 2017-02-01 - 2017-02-28 </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="getCode" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Code</h4>
                      </div>
                      <div class="modal-body">
                        <p>CHINA</p>
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
                <img src="http://krui.fm/wordpress/wp-content/uploads/2016/10/halloween.jpg" alt="">
                </br>
                <p>Halloween Promotion </p>
                </br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#getCode2">Get Now!</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#getInfo2">More Info</button>
                <div class="modal fade" id="getInfo2" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Information</h4>
                      </div>
                      <div class="modal-body">
                        <p>type code "HALLOWEEN" to get 50 Baht discount. This code can use up to 3 times.
                        </p>
                        </br>
                        <p> 2017-08-27 - 2017-09-03</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="getCode2" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Code</h4>
                      </div>
                      <div class="modal-body">
                        <p>HALLOWEEN</p>
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
<script>
function makeid()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 10; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
</script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

@endsection
