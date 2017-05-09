@extends('layouts.master')

@section('content')
<h1>Add Promotion</h1>
<div class="">
  <form enctype="multipart/form-data" action="create" method="POST">
    <div class="form-group">
        <label for="name">Promotion Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="">
    </div>
    <div class="form-group">
        <label for="detail">Promotion Detail</label>
        <input type="text" class="form-control" name="detail" id="detail" placeholder="">
    </div>
    <div class="form-group">
        <label for="start">Start Date</label>
        <input type="date" class="form-control" name="start_date" id="start_date" placeholder="">
    </div>
    <div class="form-group">
        <label for="exp">Expiration Date</label>
        <input type="date" class="form-control" name="exp_date" id="exp_date" placeholder="">
    </div>
    <div class="form-group">
      <label for="name">Promotion photo</label>
      <input type="file" name="image_path">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>

    <button class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
