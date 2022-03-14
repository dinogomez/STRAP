<?php


    require_once 'db/connection.php';
    require 'process-log.php';
    if(session_id() == ''){
      session_start();
   }
    $trackerID =  mysqli_real_escape_string($conn,$_POST['trackerID']);
    $id = $_SESSION['id'];
    $petID =  mysqli_real_escape_string($conn,$_POST['petID']);




try {

  $sql = "SELECT * FROM trackers WHERE petID ='$petID'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count > 0) {
    throw new Exception("<strong>Pet</strong> already has a tracker!");
  }




        $result = mysqli_query($conn, $sql);

        // Update Pet Logs
        $userID = $_SESSION['id'];

        $sql = "SELECT * FROM trackers WHERE userId ='$userID'";
        $result = mysqli_query( $conn,$sql);
        $count = mysqli_num_rows($result);
        
        $event = "UPDATE";
        $type = "TRACKER";
        activityLog($userID, $event, $type, $conn);

      } catch (Exception $e) {
        setcookie("trackerUpdateError", 
        "".$e->getMessage()."   ", 
        time() + (5), 
        "/");   
        header('Location: /tracker');

  $sql = "UPDATE trackers SET petID = '$petID' where id = '$trackerID'";

  $result = mysqli_query($conn, $sql);
} catch (Exception $e) {
  setcookie(
    "trackerUpdateError",
    "" . $e->getMessage() . "   ",
    time() + (5),
    "/"
  );
  header('Location: /tracker');
}
header('Location: /tracker');
