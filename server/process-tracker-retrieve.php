<?php 
    require_once 'db/connection.php';
    if(session_id() == ''){
        session_start();
     } 


    $userID = $_SESSION['id'];


    $sql = "SELECT trackers.id, pets.petNAME, devices.deviceID
     FROM trackers 
     LEFT JOIN pets ON trackers.petID = pets.id 
     LEFT JOIN devices ON trackers.deviceID = devices.id";
    $result = mysqli_query( $conn,$sql);
    $count = mysqli_num_rows($result);


    if ($count<= 0) {
      $_SESSION['noTracker'] = true;
      if(isset($_SESSION['trackers'])){
        unset($_SESSION['trackers']);

      }
    } else {
      $_SESSION['trackers'] = array();
      $deviceID = "";
     


      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $tracker = array($row['id'], $row['deviceID'], $row['petNAME']);
       
        array_push($_SESSION['trackers'],$tracker);

      }


      
      


      
    }

    
?>

