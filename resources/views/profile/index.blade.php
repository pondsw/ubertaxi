@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div>
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <div class="panel-heading">
              <h2>{{ $user->name }}'s profile </h2>
            </div>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>

            <div>
                  <div>
                    E-mail : {{ $user->email }}
                  </div>
            </div>
          </div>
        </div>
      </div>
      <h3 class="page-header">
        Your Point  : {{ $user->point }}
      </h3>
      <h3 class="page-header">
        My vouchers
      </h3>
      <div class="row" >
        @foreach($owned_vouchers as $value)
        <div class="col-md-2 col-sm-4 hero-feature" >

            <div class="thumbnail">
                <img src="img/vouchers/{{ $value->voucher_id }}.jpg"  height="100" >
                <div class="caption">
                    <p><b>Detail : </b>{{ $value->voucher->detail }}</p>
                    <p><b>Code : </b>{{ $value->code }}</p>
                    <p>
                        <!-- <a href="#" class="btn btn-primary" >Get Now!</a> -->
                    </p>
                </div>
            </div>

          </div>
          @endforeach
        </div>
        <!-- <p>My History vouchers</p> -->
        <h3 class="page-header">
          My History vouchers
        </h3>
        <div class="row" >
          @foreach($redeemed_vouchers as $value)
          <div class="col-md-2 col-sm-3 hero-feature" >

            <div class="thumbnail">
                <img src="img/vouchers/{{ $value->voucher_id }}.jpg"  height="200" >
                <div class="caption">

                    <p><b>Detail : </b>{{ $value->voucher->detail }}</p>
                    <p><b>Code : </b>{{ $value->code }}</p>
                    <p><b>Date : </b>{{ $value->redeem_date }}</p>
                    <p>
                        <!-- <a href="#" class="btn btn-primary" >Get Now!</a> -->
                    </p>
                </div>
            </div>

          </div>
          @endforeach
        <piv>

    </div>
</div>
@endsection
