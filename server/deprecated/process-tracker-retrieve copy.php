<?php 
    require_once 'db/connection.php';
    if(session_id() == ''){
        session_start();
     } 


    $userID = $_SESSION['id'];


    $sql = "SELECT * FROM trackers WHERE userID ='$userID'";
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

        $deviceName = "";
        $petName = "";
        $trackerID = "";

        //setting values  
        $trackerID = $row['id']; 
        $deviceID = $row['deviceID'];
        $petID = $row['petID'];

          // SS
          
        $sql = "SELECT * FROM devices WHERE id ='$deviceID'";
        $result = mysqli_query( $conn,$sql);
        $count = mysqli_num_rows($result);
  
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          //setting values  
          $deviceName = $row['deviceID'];
        }
  
        $sql = "SELECT * FROM pets WHERE id ='$petID'";
        $result = mysqli_query( $conn,$sql);
        $count = mysqli_num_rows($result);
  
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          //setting values  
          $petName = $row['petName'];
        }
  
        $tracker = array($trackerID, $deviceName,$petName);
         
        array_push($_SESSION['trackers'],$tracker);




      }


      
      


      
    }

    
?>

