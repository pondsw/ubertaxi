@extends('layouts.master')

@section('content')
<div class="container" id='vue-app-vouchers'>


    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h2>Redeem Code</h2>
    </header>

    <hr>

    <!-- Title -->
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center" >
      <form class="form-horizontal">
        <div class="form-group">
          <label for="Promotion Code" class="col-sm-2 control-label">Promotion Code</label>
          <div class="col-sm-8">
            <input type="Code" class="form-control" v-model="codePromotion"  name="id" id="id" placeholder="Code" required>
          </div>
          <div class="col-sm-2">
          <a href="#" class="btn btn-primary" v-on:click="redeemPromotion({{ Auth::user()->id }})">Get Now!</a>
          </div>
        </div>
      </form>
    </div>
    <div class="row text-center" >
      <form class="form-horizontal">
        <div class="form-group">
          <label for="Voucher Code" class="col-sm-2 control-label">Voucher Code</label>
          <div class="col-sm-8">
            <input type="Code" class="form-control" v-model="codeVoucher"  name="id" id="id" placeholder="Code" required>
          </div>
          <div class="col-sm-2">
              <a href="#" class="btn btn-primary" v-on:click="redeemVouceher({{ Auth::user()->id }})">Get Now!</a>
          </div>
        </div>
      </form>
    </div>
    <!-- /.row -->


    <!-- Modal -->
</div>
@endsection
@section('script')
<script>
    var vm = new Vue({
        el: '#vue-app-vouchers',

        data:{

          codePromotion : "",
          codeVoucher : "",
        },

        methods:{
            redeemPromotion: function (id){
              axios.post('../api/redeemed_vouchers', {
                  code: this.codePromotion,
                  user_id: id
              }).then(function (response) {
                  alert(response.data.data);
              }).catch(function (error) {
                  alert('Error (see console log)');
                  console.log(error);
              });
          },
          redeemVouceher: function (id){
            axios.post('../api/redeemed_vouchers', {
                code: this.codeVoucher,
                id: id
            }).then(function (response) {
                alert(response.data.data);
            }).catch(function (error) {
                alert('Error (see console log)');
                console.log(error);
            });
        },
        }
    });
</script>

@endsection
