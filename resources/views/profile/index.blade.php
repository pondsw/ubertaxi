@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div>
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <div class="panel-heading"><h2>{{ $user->name }}'s profile </h2></div>
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
                  <div>
                  Point  : {{ $user->point }}
                  </div>

            </div>
          </div>

        </div>

        <div>

        <div>
          @foreach($owned_vouchers as $value)
            {{ $value->voucher_id }}
            {{ $value->code }}
            {{ $value->voucher->detail }}
          @endforeach
        </div>

        <div>
          @foreach($redeemed_vouchers as $value)
            {{ $value->voucher_id }}
            {{ $value->code }}
            {{ $value->voucher->detail }}
            {{ $value->redeem_date }}
          @endforeach
        </div>

    </div>
</div>
@endsection
