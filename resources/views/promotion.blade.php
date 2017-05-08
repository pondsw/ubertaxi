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
                <p>โปรโมชันนั่งฟรี 1 ครั้ง </p>
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
                        <p>โปรโมชันนั่งฟรี 1 ครั้ง สำหรับผู้ใช้บริการครั้งแรกหรือผู้ที่ใช้บริการอยู่แล้ว</p>
                      </br>
                        <p> ใช้ได้เพียง 1 ครั้ง เท่านั้น </p>
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
                        <p>z6FWQM4IhB</p>
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
                <p>ส่วนลดค่าโดยสาร 300 บาท </p>
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
                        <p>โปรโมชันแจกส่วนลดค่าเดินทาง 300 บาท
                          เพียงแค่กรอกรหัสผ่านทางแอพพลิเคชัน
                        </p>
                        </br>
                        <p> ใช้ได้ตั้งแต่วันที่ 1-7 พฤษภาคม พ.ศ. 2560 </p>
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
                        <p>Ptp8grIS23</p>
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
              <p>ส่วนลดค่าโดยสาร 20% </p>
              </br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#getCode3">Get Now!</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#getInfo3">More Info</button>
                <div class="modal fade" id="getInfo3" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Information</h4>
                      </div>
                      <div class="modal-body">
                        <p>โปรโมชันแจกส่วนลดทันที 20% เพียงแค่กรอกรหัสลงในแอพพลิเคชั่น</p>
                      </br>
                      <p> ใช้ได้ตั้งแต่วันที่ 1-15 พฤษภาคม พ.ศ. 2560 </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="getCode3" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Code</h4>
                      </div>
                      <div class="modal-body">
                        <p>x9AfV3FNBz</p>
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
              <p>ส่วนลด 100 บาท สำหรับใช้ลดค่าเดินทาง </p>
              </br>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#getCode4">Get Now!</button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#getInfo4">More Info</button>
              <div class="modal fade" id="getInfo4" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Information</h4>
                    </div>
                    <div class="modal-body">
                      <p>โปรโมชันแจกส่วนลดค่าเดินทาง 100 บาท
                        เพียงแค่กรอกรหัสผ่านทางแอพพลิเคชัน
                      </p>
                      </br>
                      <p> ใช้ได้ตั้งแต่วันที่ 1-31 พฤษภาคม พ.ศ. 2560 </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="getCode4" role="dialog" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" >&times;</button>
                      <h4 class="modal-title">Code</h4>
                    </div>
                    <div class="modal-body" >
                      <p>5csNiGlmBK</p>
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
