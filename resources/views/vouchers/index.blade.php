@extends('layouts.master')

@section('content')
<div class="container" id='vue-app-vouchers'>

     @if (Auth::user())

        <div class="row">
          <div class="panel panel-default">
              <!-- <div class="panel-heading"></div> -->

              <div class="panel-body">
                  You have 2 point.
              </div>
          </div>
        </div>
      @endif


        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Voucher</h3>
            </div>
        </div>

        <!-- /.row -->

        <!-- Page Features -->

        <div class="row text-center" >


            <div class="col-md-3 col-sm-6 hero-feature" v-for="d in dataVoucher">
            <!-- <div class="col-md-3 col-sm-6 hero-feature"> -->
                <div class="thumbnail">
                    <img :src="'http://ubertaxi.dev/storage/vouchers/' + d.id +'.jpg'"  height="200" >
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>@{{ checkDetail(d.detail) }}</p>
                        <p>

                            <a href="#" class="btn btn-primary">Get Now!</a> <a href="#" class="btn btn-default" v-bind:id="d.id" v-on:click="greet" data-toggle="modal" data-target="#myModal">More Info</a>

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

                <!-- <p>@{{ detail }}</p>
                <p>@{{ exp_date }}</p> -->
                <img :src="'http://ubertaxi.dev/storage/vouchers/' + id +'.jpg'"  height="200" >
                <div class="row">
                  <div class="col-sm-3">Detail</div>
                  <div class="col-sm-9">@{{ detail }}</div>
                </div>
                <div class="row">
                  <div class="col-sm-3">Expiration Date </div>
                  <div class="col-sm-9">@{{ exp_date }}</div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
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

        data:{
          dataVoucher : data.data,
          showModal : false,
          detail : "",
          exp_date :"",
          id : 1
        },
        methods:{
          checkDetail: function(contend) {
            if(contend.length > 30){
              return contend.substring(0, 30) + "...";
            }else {
              return contend;
            }

          },
          greet: function (event) {
            showModal = true;
            // `this` inside methods points to the Vue instance
            // alert('Hello ' + showModal + '!');
            // `event` is the native DOM event
            if (event) {
              voucher = this.dataVoucher[event.target.id - 1];
              // alert(event.target.id);
              this.id = voucher.id;
              this.detail = voucher.detail;
              this.exp_date = voucher.exp_date;

            }

          }
        }
    });
</script>

@endsection