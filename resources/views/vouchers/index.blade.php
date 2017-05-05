@extends('layouts.master')

@section('content')
     @if (Auth::user())
        <hr>
        <div class="row">
          <div class="panel panel-default">
              <!-- <div class="panel-heading"></div> -->

              <div class="panel-body">
                  You have 2 point.
              </div>
          </div>
        </div>
      @endif
        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Voucher</h3>
            </div>
        </div>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center" id='vue-app-vouchers'>


            <div class="col-md-3 col-sm-6 hero-feature" v-for="d in data">
            <!-- <div class="col-md-3 col-sm-6 hero-feature"> -->
                <div class="thumbnail">
                    <img :src="'http://ubertaxi.dev/storage/vouchers/' + d.id +'.jpg'" />
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>@{{ checkDetail(d.detail) }}</p>
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

@section('script')
<script>
    var data = <?php echo $resBody; ?>;
    var vjson = new Vue({
        el: '#json-beautifier',
        data: data,
        computed: {
            json: function(){
                return JSON.stringify(this.data, null, 2);
            }
        }
    });

    var vm = new Vue({
        el: '#vue-app-vouchers',
        data: data ,
        methods:{
          checkDetail(contend) {
            if(contend.length > 30){
              return contend.substring(0, 30) + "...";
            }else {
              return contend;
            }
            // return '../assets/' + this.pics[index] + '.png';
          }
        }
    });
</script>
@endsection
