@extends('layouts.master')

@section('content')
<div class="container" id='vue-app-promotions'>


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
            <input type="Code" class="form-control" id="Promotion Code" placeholder="Code" required>
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-default">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="row text-center" >
      <form class="form-horizontal">
        <div class="form-group">
          <label for="Voucher Code" class="col-sm-2 control-label">Voucher Code</label>
          <div class="col-sm-8">
            <input type="Code" class="form-control" id="Voucher Code" placeholder="Code" required>
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-default">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <!-- /.row -->


    <!-- Modal -->

@endsection
