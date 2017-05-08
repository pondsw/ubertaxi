@extends('layouts.master')

@section('content')
<h1>Add Promotion</h1>
<div class="" id="vue-add-promotion">
    <div class="form-group">
        <label for="name">Promotion Name</label>
        <input type="text" class="form-control" v-model="name" id="name" placeholder="">
    </div>
    <div class="form-group">
        <label for="detail">Promotion Detail</label>
        <input type="text" class="form-control" v-model="name" id="detail" placeholder="">
    </div>
    <div class="form-group">
        <label for="start">Start Date</label>
        <input type="date" class="form-control" v-model="date" id="start_date" placeholder="">
    </div>
    <div class="form-group">
        <label for="exp">Expiration Date</label>
        <input type="date" class="form-control" v-model="date" id="exp_date" placeholder="">
    </div>
    <div class="form-group">
      <label for="photo">Promotion photo</label>
      <input type="file" name="promotions_img">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>

    <button class="btn btn-primary" v-on:click="submit()">Submit</button>
</div>
@endsection

@section('script')
<script>
var vm = new Vue({
    el: '#vue-add-promotion',
    data: {
        'name': '',
        'detail' :'',
        'start_date':'',
        'exp_date':'',
        'image_path':''
    },

    methods: {
        submit: function () {
            axios.post('http://ubertaxi.dev/api/promotions', {
                name: this.name,
                detail: this.detail,
                start_date: this.start_date,
                exp_date: this.exp_date,
                image_path: this.image_path
            }).then(function (response) {
                console.log(response.data.data);
                alert(response.data.data);
                vm.name = '';
                vm.detail = '';
                vm.start_date = '';
                vm.exp_date = '';
                vm.image_path='';
            }).catch(function (error) {
                alert('Error (see console log)');
                console.log(error);
            });
        }
    }
});
</script>
@endsection
