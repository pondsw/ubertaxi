@extends('layouts.master')
@extends('layouts._navbar')

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
          <label for="inputEmail3" class="col-sm-2 control-label">Promotion Code</label>
          <div class="col-sm-8">
            <input type="Code" class="form-control" id="inputEmail3" placeholder="Code">
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-default">Redeem</button>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Voucher Code</label>
          <div class="col-sm-8">
            <input type="Code" class="form-control" id="inputPassword3" placeholder="Code">
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
