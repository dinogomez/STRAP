<?php
require_once 'db/connection.php';

 $did = mysqli_real_escape_string($conn,$_GET['did']);

 $sql = "SELECT * FROM gps WHERE deviceID='$did' ORDER BY id DESC limit 1";
 $result = mysqli_query( $conn,$sql);
 $count = mysqli_num_rows($result);


 if ($count<= 0) {
  echo "no match";
 } else {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
       echo $row['lat']." ".$row['lon'];
      }
 }



?>