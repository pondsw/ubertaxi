@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>{{ $user->name }}'s profile </h2>
        </div>
    </div>
</div>
@endsection
