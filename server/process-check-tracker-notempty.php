<?php 
require_once 'db/connection.php';

if(session_id() == ''){
    session_start();
 }

if(isset($_SESSION['trackers'])){
    $trackID_V = 0;
    foreach($_SESSION['trackers'] as $track){
              $trackID_V = $track[0];
              break; 
    }
  
    $sql = "SELECT * FROM gps WHERE deviceID='$trackID_V' ORDER BY id DESC limit 1";
  
    $result = mysqli_query( $conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count = 0){
      header('Location: /dashboard?trackID'.$trackID_V);
    } 
  
  }

?>