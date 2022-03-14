<?php require_once 'server/process-protect-page.php'?>


<?php require_once 'include/headers.php';?>
<style>
      #mapCanvas {
        width: 100%;
        height: 600px;
      }

      body{

background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1181%26quot%3b)' fill='none'%3e%3cpath d='M-23.561%2c577.261C13.425%2c574.58%2c46.928%2c555.965%2c65.421%2c523.822C83.864%2c491.766%2c85.163%2c452.38%2c66.735%2c420.315C48.245%2c388.144%2c13.471%2c371.335%2c-23.561%2c368.997C-65.95%2c366.32%2c-112.263%2c372.314%2c-136.035%2c407.511C-162.246%2c446.319%2c-163.962%2c499.536%2c-138.096%2c538.574C-114.24%2c574.578%2c-66.638%2c580.383%2c-23.561%2c577.261' fill='rgba(244%2c 168%2c 65%2c 1)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1472.6145365047237-47.09272527645122L1344.2132000163635 166.60298454751154 1557.9089098403263 295.0043210358717 1686.3102463286864 81.30861121190897z' fill='rgba(15%2c 157%2c 88%2c 1)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1239.4993740399536 206.99036349403283L1321.9042991175336 52.009240025746635 1166.9231756492475-30.39568505183331 1084.5182505716675 124.58543841645289z' fill='rgba(219%2c 68%2c 88%2c 1)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1107.347154700069 589.3943281712214L968.6803235828786 748.9122698178885 1277.2906516114742 877.1535456703405z' fill='rgba(66%2c 133%2c 244%2c 1)' class='triangle-float3'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1181'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");

        background-size:cover;
    background-repeat:no-repeat;

    
  }
    </style>

<div class="container">


<div class="mx-5 px-5">

<?php include_once 'include/nav-dash.php';?>
<?php 
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

?>
<div class="container-fluid">
  <section>

    <div class="row mt-4">
      <div class="col-12 mt-3 mb-1">
        <hr>
        <h5 class="text-uppercase">Statistics</h5>
        <p>Your account metrics and statistics 📊.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-pencil-alt text-info fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>278</h3>
                <p class="mb-0">New Posts</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="far fa-comment-alt text-warning fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>156</h3>
                <p class="mb-0">Notifications</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fa-solid fa-paw text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3><?php if(isset($_SESSION['pets'])){
                  
                  echo count($_SESSION['pets']);
                } else {
                  echo 0;

                }
                  
                  ?></h3>
                <p class="mb-0">Pets</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fa-solid fa-map-location-dot text-danger fa-3x"></i>
              </div>
              <div class="text-end">
                <h3><?php
                if(isset($_SESSION['trackers'])){
                  echo count($_SESSION['trackers']);
                } else {
                  echo 0;
                }
                 
                 ?></h3>
                <p class="mb-0">Trackers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <hr>
<?php if(isset($_SESSION['trackers'])){ ?>
    <div class="d-flex ">
      <form action="/dashboard"  class=" w-50" method="GET">
        <?php 
          echo "
                    <label for='formControlInput' class='form-label'>Pet: </label>

          <div class='input-group my-2 form-inline'>
          <select class='form-select' name='trackID' aria-label='Default select' required>";
          
          $count = 0;
          foreach($_SESSION['trackers'] as $track){
            
            echo "<option  value='".$track[0]."'>".$track[2]."</option>";

            
  
          }
          
          echo "

        </select>
        <button class='btn btn-primary' type='submit'>Track</button>

        </div>";
        
        ?>
      </form>
      
    </div>
   
    <?php

if(isset($_GET['trackID'])){

  require_once getcwd().'/server/db/connection.php';
  $did = mysqli_real_escape_string($conn,$_GET['trackID']);
  $id = 0;
  // $sql = "SELECT * FROM gps WHERE deviceID='$did' ORDER BY id DESC limit 1";
  $sql = "SELECT * FROM trackers WHERE id='$did'";

  $result = mysqli_query( $conn,$sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if($count > 0){
    $id = $row['deviceID'];
  }
  // echo '<pre>';
  // print_r($id);
 

  // echo '</pre>'; 

  

  ?>
  
<?php

  $sql = "SELECT * FROM gps WHERE deviceID='$id' ORDER BY id DESC limit 1";

  $result = mysqli_query( $conn,$sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if($count == 0){
    echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#exclamation-triangle-fill'/></svg>

    It seems that the tracker hasn't <strong>transmitted</strong> any data yet 👀
   </div>  <div class='text-center'>
 </div>";
  }

  
}
  ?>
  <div class="container-fluid p-1  shadow-lg mb-5">
  <div id="mapCanvas"></div>

  </div>
  <?php }else{
       echo "<div class='alert alert-dismissible alert-info'>
       <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Info:'><use xlink:href='#info-fill'/></svg>
   
       <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
       It seems you don't have any pets tracked yet. Try adding a tracker to a pet in the <strong>Tracker</strong> above!
   
     </div>";
      }
      
      foreach($_SESSION['trackers'] as $tracker){
        if(isset($_GET['trackID']) && $_GET['trackID'] == $tracker[0]){
          $name =  $tracker[2];
        }
      }
     
     
    
      
      
      
      ?>
  <?php 
    
echo "<h1>".$id."</h1>";
  ?>



 

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAFuN92YkXhqbKN2qFSy5fcsUdErD3Roo"></script>
    <script>


var position = [<?php echo $row['lat'] ?>, <?php echo $row['lon'] ?>];


function initialize() { 

    var latlng = new google.maps.LatLng(position[0], position[1]);
    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("mapCanvas"), myOptions);
   geocoder = new google.maps.Geocoder();
    
   <?php
   $icon;
   $type;
   if(isset($_GET['trackID'])){
    foreach($_SESSION['pets'] as $pet){
      if($pet[1] == $name){
        $type = $pet[2];
      }
    }

    if($type == 'Dog'){
      $icon = '"/dogmarker"';
    }elseif ($type == 'Cat') {
      $icon = '"/catmarker"';
    }else{
      $icon = '"/othermarker"';
    }
   }
   
   
   ?>

    marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: <?php echo $icon ?>,
        title: "Latitude:"+position[0]+" | Longitude:"+position[1]
    });


  contentString = "<?php echo "<div id='content'><div id='siteNotice'></div><h1 id='firstHeading'class='firstHeading text-center'>".$name."</h1><div id='bodyContent'><p>Latitude: </p></div></div>"; ?>";

 

   infowindow = new google.maps.InfoWindow({
    content: contentString,
  });


    marker.addListener("click", () => {
    infowindow.open({
      anchor: marker,
      map,
      shouldFocus: false,
    });
  });
  geocodeLatLng();

}


function geocodeLatLng() {

  latlngd = {
    lat: position[0],
    lng: position[1],
  };

  geocoder
    .geocode({ location: latlngd })
    .then((response) => {
      if (response.results[0]) {
        const contentStrings = "<?php echo "<div id='content'><div id='siteNotice'></div><h1 id='firstHeading'class='firstHeading text-center'>".$name."</h1><div id='bodyContent'><p>Is currently at <strong >" ?>"+response.results[0].formatted_address+"   <?php echo"</strong></p></div></div>"; ?>";
        infowindow.setContent(contentStrings);

      } else {
        window.alert("No results found");
      }
    })
    .catch((e) => window.alert("Geocoder failed due to: " + e));
}


//Load google map
google.maps.event.addDomListener(window, 'load', initialize);


var numDeltas = 100;
var delay = 10; //milliseconds
var i = 0;
var deltaLat;
var deltaLng;

function transition(result){
    i = 0;
    deltaLat = (result[0] - position[0])/numDeltas;
    deltaLng = (result[1] - position[1])/numDeltas;
    moveMarker();
    const reverseGeocodingUrl = `https://api.geoapify.com/v1/geocode/reverse?lat=${position[0]}&lon=${position[1]}&apiKey=5f89e21f254644c98c72ac4a5e972b52`;
    // console.log(reverseGeocodingUrl)
    
    fetch(reverseGeocodingUrl).then(result => result.json())
        .then(featureCollection => {
          if (featureCollection.features.length === 0) {
            document.getElementById("status").textContent = "The address is not found";
            return;
          }

          const foundAddress = featureCollection.features[0];
          

          let formatAddress = `${foundAddress.properties.formatted}`;
          // console.log(formatAddress);
          const contentStrings = "<?php echo "<div id='content'><div id='siteNotice'></div><h1 id='firstHeading'class='firstHeading text-center'>".$name."</h1><div id='bodyContent'><p>Is currently at <strong >" ?>"+formatAddress+"   <?php echo"</strong></p></div></div>"; ?>";
          infowindow.setContent(contentStrings);
          
        });
}

function moveMarker(){
    position[0] += deltaLat;
    position[1] += deltaLng;

   
    


    
    var latlng = new google.maps.LatLng(position[0], position[1]);


    map.setCenter(latlng);


    marker.setTitle("Latitude:"+position[0]+" | Longitude:"+position[1]);
    marker.setPosition(latlng);
    

    if(i!=numDeltas){
        i++;
        setTimeout(moveMarker, delay);
    }
}

var oldcoords;

function loadDoc() {
        
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
        let current = this.responseText.split(/\r?\n/);
          current_split = current[current.length-1].split(" ");
          console.log(current_split);
          var result = [current_split[0], current_split[1]];
          
          transition(result);

         
        };
        xhttp.open("GET", "/gps-retrieve?did=<?php echo $id ?>");
        xhttp.send();
        setTimeout(loadDoc, 10000);
      }
      loadDoc();
        
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    
  </section>
</div>

  <!-- Footer -->
<!-- NAV -->
<!-- MAIN CONTAINER -->
</div>


</div>


<?php require_once 'include/footers.php'?>
