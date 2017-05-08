@extends('layouts.master')
@extends('layouts._navbar')

@section('content')
<div class="container" id='vue-app-promotions'>


    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>Promotion</h1>

    </header>

    <hr>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Features</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center" >


        <div class="col-md-3 col-sm-6 hero-feature" v-for="d in dataPromotion">
        <!-- <div class="col-md-3 col-sm-6 hero-feature"> -->
            <div class="thumbnail">
                <img :src="'http://ubertaxi.dev/img/promotions/' + d.id +'.jpg'"  height="200" >
                <div class="caption">
                    <h3>@{{ checkDetail(d.name) }}</h3>
                  </br>
                    <p>

                        <a href="#" class="btn btn-primary" v-bind:id="d.id" v-on:click="greet" data-toggle="modal" data-target="#getCode">Get Now!</a>
                        <a href="#" class="btn btn-default" v-bind:id="d.id" v-on:click="greet" data-toggle="modal" data-target="#myModal">More Info</a>

                    </p>
                </div>


            </div>
        </div>

    </div>
    <!-- /.row -->


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">

            <!-- <p>@{{ detail }}</p>
            <p>@{{ exp_date }}</p> -->
            <img :src="'http://ubertaxi.dev/storage/promotions/' + id +'.jpg'"  height="200" >
            <div class="row">
              <div class="col-sm-3">Detail</div>
              <div class="col-sm-9">@{{ detail }}</div>
            </div>
            <div class="row" >
              <div class="col-sm-3">Code </div>
              <div class="col-sm-9">@{{ code }}</div>
            </div>
            <div class="row">
              <div class="col-sm-3">Start Date </div>
              <div class="col-sm-9">@{{ start_date }}</div>
            </div>
            <div class="row">
              <div class="col-sm-3">Expiration Date </div>
              <div class="col-sm-9">@{{ exp_date }}</div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <div class="modal fade" id="getCode" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Code</h4>
          </div>
          <div class="modal-body">
            <p>@{{ code }}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection

@section('script')
<script>
var data = <?php echo $resBody; ?>;
var vjson = new Vue({
    el: '#json-beautifier',
    data: data,
    computed: {
        json: function(){
            return JSON.stringify(this.data, null, 2);
        }
    }
});

var vm = new Vue({
    el: '#vue-app-promotions',

    data:{
      dataPromotion : data.data,
      showModal : false,
      detail : "",
      start_date : "",
      exp_date :"",
      id : 1,
      code:""
    },
    methods:{
      checkDetail: function(contend) {
        if(contend.length > 30){
          return contend.substring(0, 30) + "...";
        }else {
          return contend;
        }

      },
      greet: function (event) {
        showModal = true;
        // `this` inside methods points to the Vue instance
        // alert('Hello ' + showModal + '!');
        // `event` is the native DOM event
        if (event) {
          promotion = this.dataPromotion[event.target.id - 1];
          
          // alert(event.target.id);
          this.id = promotion.id;
          this.detail = promotion.detail;
          this.start_date = promotion.start_date;
          this.exp_date = promotion.exp_date;
          this.code = promotion.code;
        }

      }
    }
});
</script>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>


<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

@endsection
