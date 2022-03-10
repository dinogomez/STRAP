<?php require_once 'server/process-protect-page.php'?>


<?php require_once 'include/headers.php';?>
<style>
      #mapCanvas {
        width: 100%;
        height: 600px;
      }
    </style>

<div class="container">


<div class="mx-5 px-5">

<?php include_once 'include/nav-dash.php';?>
<?php 
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

?>
<div class="container-fluid">
  <section>
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h5 class="text-uppercase">Minimal Statistics Cards</h5>
        <p>Statistics on minimal cards.</p>
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
                <h3><?php echo count($_SESSION['pets']);?></h3>
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
          
          
          foreach($_SESSION['trackers'] as $track){
            
            echo "<option value='".$track[0]."'>".$track[2]."</option>";
  
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
  $id = $row['deviceID'];
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
        if($_GET['trackID'] == $tracker[0]){
          $name =  $tracker[2];
        }
      }
     
      
      
      
      ?>
  <?php 
    
   echo '<pre>';
print_r($_SESSION);
echo '</pre>';
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

    

    marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: '/dogmarker',
        title: "Latitude:"+position[0]+" | Longitude:"+position[1]
    });

    // const contentString =
    // '<div id="content">'
    // '<div id="siteNotice">' +
    // "</div>" +
    // "<h1 id='firstHeading'class='firstHeading'>Ulru</h1>" +
    // '<div id="bodyContent">' +
    // "<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large " +
    // "sandstone rock formation in the southern part of the " +
    // "Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) " +
    // "south west of the nearest large town, Alice Springs; 450&#160;km " +
    // "(280&#160;mi) by road. Kata Tjuta and Uluru are the two major " +
    // "features of the Uluru - Kata Tjuta National Park. Uluru is " +
    // "sacred to the Pitjantjatjara and Yankunytjatjara, the " +
    // "Aboriginal people of the area. It has many springs, waterholes, " +
    // "rock caves and ancient paintings. Uluru is listed as a World " +
    // "Heritage Site.</p>" +
    // '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
    // "https://en.wikipedia.org/w/index.php?title=Uluru</a> " +
    // "(last visited June 22, 2009).</p>" +
    // "</div>" +
    // "</div>";


    const contentString = "<?php echo "<div id='content'><div id='siteNotice'></div><h1 id='firstHeading'class='firstHeading text-center'>".$tracker[2]."</h1><div id='bodyContent'><p>Latitude: ".$row['lat']." | Longitude: ".$row['lon']." </p></div></div>"; ?>";

 

  const infowindow = new google.maps.InfoWindow({
    content: contentString,
  });


    marker.addListener("click", () => {
    infowindow.open({
      anchor: marker,
      map,
      shouldFocus: false,
    });
  });

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
}

function moveMarker(){
    position[0] += deltaLat;
    position[1] += deltaLng;
    var latlng = new google.maps.LatLng(position[0], position[1]);
    marker.setTitle("Latitude:"+position[0]+" | Longitude:"+position[1]);
    marker.setPosition(latlng);

    if(i!=numDeltas){
        i++;
        setTimeout(moveMarker, delay);
    }
}

function loadDoc() {
        
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
        let current = this.responseText.split(/\r?\n/);
          current_split = current[current.length-1].split(" ");
          console.log(current_split);
          var result = [current_split[0], current_split[1]];
          transition(result);
        };
        xhttp.open("GET", "/gps-retrieve?did=1");
        xhttp.send();
        setTimeout(loadDoc, 5000);
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
