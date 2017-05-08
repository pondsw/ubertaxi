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
      <form action="/action_page.php">
        CODE : <input type="text" name="code" value="">
        <input type="submit" value="Submit">
      </form>
    </div>
    <!-- /.row -->


    <!-- Modal -->

@endsection
