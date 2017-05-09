@extends('layouts.master')

@section('content')
<div class="container" id='vue-app-vouchers'>

     @if (Auth::user())

        <div class="row">
          <div class="panel panel-default">
              <!-- <div class="panel-heading"></div> -->

              <div class="panel-body">
                  You have {{ Auth::user()->point }} point.
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

        <div class="row text-center"  >


            <div class="col-md-3 col-sm-6 hero-feature" v-for="d in dataVoucher">

                <div class="thumbnail">
                    <img :src="'img/vouchers/' + d.image_path"  height="200" >
                    <div class="caption">
                        <h3>@{{ d.point }} points</h3>
                        <p>@{{ checkDetail(d.detail) }}</p>
                        <p>
                             @if (Auth::user())
                            <a href="#" class="btn btn-primary" v-on:click="getnow($event, {{ Auth::user()->id }})">Get Now!</a>
                            @endif

                            <a href="#" class="btn btn-default" v-bind:id="d.id" v-on:click="greet" data-toggle="modal" data-target="#myModal">More Info</a>


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

                <img :src="'img/vouchers/' + id +'.jpg'"  height="200" >
                <div class="row">
                  <div class="col-sm-3">Detail</div>
                  <div class="col-sm-9">@{{ detail }}</div>
                </div>
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
          id : 1,
          point: 0
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
              this.point = voucher.point;

            }

            },

            getnow: function (event , id){
              axios.post('../api/owned_vouchers', {
                  voucher_id: this.id,
                  user_id: id,
                  code: 12345
              }).then(function (response) {
                  // console.log(response.data.data);
                  // alert(response.data.success);
                  // vm.name = '';
                  if(response.data.success){
                    
                  }else{
                    alert(response.data.data);
                  }
              }).catch(function (error) {
                  alert('Error (see console log)');
                  console.log(error);
              });


          }
        }
    });
</script>

@endsection
