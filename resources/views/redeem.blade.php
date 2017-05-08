@extends('layouts.master')

@section('content')
<div class="container" id='vue-app-redeem'>


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
            <input type="Code" class="form-control" name="id" id="id" placeholder="Code" required>
          </div>
          <div class="col-sm-2">
          <a href="#" class="btn btn-primary" v-on:click="getnow($event, {{ Auth::user()->id }})">Get Now!</a>
          </div>
        </div>
      </form>
    </div>
    <div class="row text-center" >
      <form class="form-horizontal">
        <div class="form-group">
          <label for="Voucher Code" class="col-sm-2 control-label">Voucher Code</label>
          <div class="col-sm-8">
            <input type="Code" class="form-control" name="id" id="id" placeholder="Code" required>
          </div>
          <div class="col-sm-2">
              <a href="#" class="btn btn-primary" v-on:click="getnow($event, {{ Auth::user()->id }})">Get Now!</a>
          </div>
        </div>
      </form>
    </div>
    <!-- /.row -->


    <!-- Modal -->

@endsection
@section('script')
<script>
    var code = $('input[name="id"]').val();
    var vm = new Vue({
        el: '#vue-app-redeem',

        data:{
          dataVoucher : data.data,
          showModal : false,
          detail : "",
          exp_date :"",
          id : 1
        },

        methods:{
            getnow: function (event , id){
              axios.post('/api/owned_vouchers', {
                  code: code,
                  user_id: id,
              }).then(function (response) {
                  console.log(response.data.data);
                  alert(response.data.data);
                  vm.name = '';
              }).catch(function (error) {
                  alert('Error (see console log)');
                  console.log(error);
              });
          }
        }
    });
</script>

@endsection
