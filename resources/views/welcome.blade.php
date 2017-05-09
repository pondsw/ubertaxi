<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Uber</title>
        <link rel="stylesheet" href="/css/app.css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- google map  -->
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>


    </head>
    <body>



          @include('layouts._navbar')
          <!-- Header -->
          <a name="about"></a>
          <div class="intro-header">
              <div class="container">

                  <div class="row">
                      <div class="col-lg-12">
                          <div class="intro-message">
                              <h1>UBER</h1>
                              <h3>Vouchers and Promotions</h3>
                              <hr class="intro-divider">
                              <ul class="list-inline intro-social-buttons">
                                  <li>
                                      <a href="https://twitter.com/uber" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                                  </li>
                                  <li>
                                      <a href="https://github.com/pondsw/ubertaxi.git" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                                  </li>
                                  <li>
                                      <a href="https://www.facebook.com/uberthai" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Facebook</span></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>

              </div>
              <!-- /.container -->

          </div>
          <!-- Page Content -->

<a  name="booktaxi"></a>
<div class="content-section-a">

    <div class="container">
        <div class="row text-center">
          <h3> Book taxi</h3>
          <div>
            <span >Source : </span><span id="p1"></span>
            <br>
            <span >Destination : </span><span id="p2" ></span>
            <br>
          </div>
          <br>

          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">Book Texi</button>
          </div>
          <br>
          <br>
          <div id="map" style="width:800px;height:600px;"></div>

        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-a -->
          <hr>
          @include('layouts._footer')

          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCNkXGWu9m74IS1Uv7DvloF3NsDKWNSdA&callback=initMap"></script>
          <script>
            // In the following example, markers appear when the user clicks on the map.
            // Each marker is labeled with a single alphabetical character.
            var labels = 'AB';
            var labelIndex = 0;
            var map;
            var markers = [];




            function initialize() {
              var bangalore = { lat: 	13.73, lng: 	100.52 };
              map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: bangalore
              });

              map.addListener('click', function(event) {
                addMarker(event.latLng);
                // document.getElementById("p1").innerHTML = event.latLng;
                // alert(labelIndex);
                if(labelIndex == 3){
                  document.getElementById("p1").innerHTML = event.latLng;
                  document.getElementById("p2").innerHTML = "-";
                }else if(labelIndex == 2){
                  document.getElementById("p2").innerHTML = event.latLng;
                }
                if(labelIndex > 2){
                  deleteMarkers();
                  labelIndex=0;
                  addMarker(event.latLng);
                }
              });

              // Add a marker at the center of the map.
              addMarker(bangalore);
              deleteMarkers();
            }

            // Adds a marker to the map.
            function addMarker(location) {
              // Add the marker at the clicked location, and add the next-available label
              // from the array of alphabetical characters.
              var marker = new google.maps.Marker({
                position: location,
                label: labels[labelIndex++ % labels.length],
                map: map
              });
              markers.push(marker);
            }

            // Sets the map on all markers in the array.
            function setMapOnAll(map) {
                for (var i = 0; i < markers.length; i++) {
                  markers[i].setMap(map);
                }
              }
              // Deletes all markers in the array by removing references to them.
            function deleteMarkers() {
              // alert("Deletes Marker");
              // clearMarkers();

              // map.clearMarkers();

              for(var i =0;i < markers.length ; i++){
                markers[i].setMap(null);
              }
            }


            google.maps.event.addDomListener(window, 'load', initialize);

          </script>


          <script>
          $(document).ready(function(){
              var key = "AIzaSyCCNkXGWu9m74IS1Uv7DvloF3NsDKWNSdA&callback=initMap";
              $("button").click(function(){
                // alert("test");
                // var dest = "origins=13.778910656589076,100.59066771995276&destinations=13.7579028278229,100.58277129661292";
                // var url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&"+dest+"&key="+key+"";
                var url2 = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=13.778910656589076,100.59066771995276&destinations=13.7579028278229,100.58277129661292&key=AIzaSyCCNkXGWu9m74IS1Uv7DvloF3NsDKWNSdA';
                // $.get(url2, function(data){
                  // alert("Data: " + data + "\nStatus: " + status);
                  // alert("test");
                // });
                $.ajax({
                  dataType: "jsonp",
                  url:  url2,
                  success:function(data) {
                    alert(data);
                  }

                });
                // var xhr = new XMLHttpRequest();
                //   xhr.open("GET", url2, true);
                //   xhr.onreadystatechange = function() {
                //     if (xhr.readyState == 4) {
                //       // WARNING! Might be injecting a malicious script!
                //       // document.getElementById("resp").innerHTML = xhr.responseText;
                //       // ...
                //       alert("testss");
                //     }
                //   }
                //   xhr.send();
                });
          });
          </script>
        <script src="/js/app.js" charset="utf-8"></script>

        @yield('script')

    </body>
</html>
