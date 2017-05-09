@extends('layouts.master')

@section('content')
<div class="container" id='vue-app-vouchers'>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div>
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <div class="panel-heading">
              <h2>{{ $user->name }}'s profile </h2>
            </div>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>

            <div>
                  <div>
                    E-mail : {{ $user->email }}
                  </div>
            </div>
          </div>
        </div>
      </div>
      <h3 class="page-header">
        Your Point  : {{ $user->point }}
      </h3>
      <h3 class="page-header">
        My vouchers
      </h3>
      <div class="row" >
        @foreach($owned_vouchers as $value)
        <div class="col-md-2 col-sm-4 hero-feature" >

            <div class="thumbnail">
                <img src="img/vouchers/{{ $value->voucher_id }}.jpg"  height="100" >
                <div class="caption">
                    <p><b>Detail : </b>{{ $value->voucher->detail }}</p>
                    <p><b>Code : </b>{{ $value->code }}</p>
                    <p>
                        <!-- <a href="#" class="btn btn-primary" >Get Now!</a> -->
                    </p>
                    <a href="#" class="btn btn-default"  v-on:click="greet('{{ $value->code }}')" data-toggle="modal" data-target="#myModal">View Barcode</a>
                </div>
            </div>

          </div>
          @endforeach
        </div>
        <!-- <p>My History vouchers</p> -->
        <h3 class="page-header">
          My History vouchers
        </h3>
        <div class="row" >
          @foreach($redeemed_vouchers as $value)
          <div class="col-md-2 col-sm-3 hero-feature" >

            <div class="thumbnail">
                <img src="img/vouchers/{{ $value->voucher_id }}.jpg"  height="200" >
                <div class="caption">

                    <p><b>Detail : </b>{{ $value->voucher->detail }}</p>
                    <p><b>Code : </b>{{ $value->code }}</p>
                    <p><b>Date : </b>{{ $value->redeem_date }}</p>
                    <p>
                        <!-- <a href="#" class="btn btn-primary" >Get Now!</a> -->
                    </p>
                </div>
            </div>

          </div>
          @endforeach
        <piv>

    </div>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body col-centered" >

        <img :src="barcode"  height="200" >

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
    var data = <?php echo $owned_vouchers; ?>;
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
          point: 0,
          barcode: ""
        },
        methods:{
          checkDetail: function(contend) {
            if(contend.length > 30){
              return contend.substring(0, 30) + "...";
            }else {
              return contend;
            }

          },
          greet: function (code) {
            showModal = true;
            this.barcode = "http://barcode.tec-it.com/barcode.ashx?translate-esc=off&data="+code+"&code=Code128&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=000000&bgcolor=FFFFFF&qunit=Mm&quiet=0";


          }
        }
    });
</script>

@endsection
