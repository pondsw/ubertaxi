@extends('layouts.master')

@section('content')
<h1>Add Vouchers</h1>
<div class="" id="vue-add-singer">
    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" class="form-control" v-model="name" id="name" placeholder="Singer Name">
    </div>
    <div class="form-group">
        <label for="name">Detail</label>
        <input type="text" class="form-control" v-model="name" id="name" placeholder="Singer Name">
    </div>

    <div class="form-group">
        <label for="name">Expiration Date</label>
        <input type="text" class="form-control" v-model="name" id="name" placeholder="Singer Name">
    </div>

<<<<<<< Updated upstream
=======
    <div class="form-group">
      <label for="name">Vouchers photo</label>
      <input type="file" name="vouchers_img"  id="image_path" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>


>>>>>>> Stashed changes
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
@endsection
