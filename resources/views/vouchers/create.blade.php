@extends('layouts.master')

@section('content')
<h1>Add Vouchers</h1>
<div class="" id="vue-add-singer">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" v-model="title" id="title" placeholder="Voucher title">
    </div>
    <div class="form-group">
        <label for="detail">Detail</label>
        <input type="text" class="form-control" v-model="detail" id="detail" placeholder="Voucher detail">
    </div>

    <div class="form-group">
        <label for="point">Point</label>
        <input type="text" class="form-control" v-model="point" id="point" placeholder="Voucher Point">
    </div>

    <div class="form-group">
        <label for="name">Expiration Date</label>
        <input type="text" class="form-control" v-model="exp_date" id="exp_date" placeholder="Voucher Expiration Date">
    </div>


    <button class="btn btn-primary" v-on:click="submit()">Submit</button>
</div>
@endsection

@section('script')
<script>
var vm = new Vue({
    el: '#vue-add-singer',
    data: {
        'name': ''
    },
    methods: {
        submit: function () {
            axios.post('http://wongklom.dev/api/singers', {
                name: this.name
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
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
  $( "#exp_date" ).datepicker();
} );
</script>
@endsection
