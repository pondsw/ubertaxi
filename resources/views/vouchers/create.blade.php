@extends('layouts.master')

@section('content')
<h1>Add Vouchers</h1>
<div class="">
  <form enctype="multipart/form-data" action="create" method="POST">

    <div class="form-group">
        <label for="point">Point</label>
        <input type="integer" class="form-control" name="point" id="point" placeholder="">
    </div>

    <div class="form-group">
        <label for="detail">Detail</label>
        <input type="text" class="form-control" name="detail" id="detail" placeholder="">
    </div>

    <div class="form-group">
        <label for="exp_date">Expiration Date</label>
        <input type="date" class="form-control" name="exp_date"  id="exp_date" placeholder="">
    </div>

    <div class="form-group">
        <label for="limit_number_of_use">Limit Number of use</label>
        <input type="integer" class="form-control" name="limit_number_of_use" id="limit_number_of_use" placeholder="">
    </div>


    <div class="form-group">
      <label for="image_path">Vouchers photo</label>
      <input type="file" name="image_path" id="image_path" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>

    <button class="btn btn-primary" >Submit</button>
  </form>
</div>
@endsection
