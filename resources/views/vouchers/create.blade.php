@extends('layouts.master')

@section('content')
<h1>Add Vouchers</h1>
<div class="" id="vue-add-voucher">
  <form id="add">

    <div class="form-group">
        <label for="point">Point</label>
        <input type="integer" class="form-control" v-model="point" id="point" placeholder="">
    </div>

    <div class="form-group">
        <label for="detail">Detail</label>
        <input type="text" class="form-control" v-model="detail" id="detail" placeholder="">
    </div>

    <div class="form-group">
        <label for="exp_date">Expiration Date</label>
        <input type="date" class="form-control" v-model="exp_date" id="exp_date" placeholder="">
    </div>

    <div class="form-group">
        <label for="limit_number_of_use">Limit Number of use</label>
        <input type="integer" class="form-control" v-model="limit_number_of_use" id="limit_number_of_use" placeholder="">
    </div>


    <div class="form-group">
      <label for="image_path">Vouchers photo</label>
      <input type="file" name="image_path"  id="image_path" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>

    <button class="btn btn-primary" v-on:click="add.submit()">Submit</button>
  </form>
</div>
@endsection

@section('script')
<script>
var vm = new Vue({
    el: '#vue-add-voucher',
    data: {
        'point': '',
        'detail': '',
        'exp_date': '',
        'limit_number_of_use': '',
        'image_path': ''
    },
    methods: {
        submit: function () {
          axios.post('http://ubertaxi.dev/api/vouchers', {
            point: this.point,
            detail: this.detail,
            exp_date: this.exp_date,
            limit_number_of_use: this.limit_number_of_use,
            image_path: this.image_path
          }).then(function (response) {
              console.log(response.data.data);
              alert(response.data.data);
              vm.point = '';
              vm.detail = '';
              vm.exp_date = '';
              vm.limit_number_of_use = '';
              vm.image_path = '';
          }).catch(function (error) {
              alert('Error (see console log)');
              console.log(error);
          });
          alert('Add voucher complate');
        }
    }


});
</script>
@endsection
