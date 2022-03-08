<?php 

require_once 'db/connection.php';
if(session_id() == ''){
    session_start();
 } 
$userID = $_SESSION['id'];

$sql = "SELECT * FROM pets WHERE userID ='$userID'";
$result = mysqli_query( $conn,$sql);
$count = mysqli_num_rows($result);


if ($count<= 0) {
  $_SESSION['noPets'] = true;
  if(isset($_SESSION['pets'])){
    unset($_SESSION['pets']);

  }
} else {
  $_SESSION['pets'] = array();
  
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    //setting values      
    $pet = array($row['id'], $row['petName'], $row['petType'], $row['petBreed'], $row['petDiet'], $row['petVaccine'], $row['ContactName'], $row['ContactNumber'],$row['petImg'], $row['uniqid']);
   
    array_push($_SESSION['pets'],$pet);
   
  }
}

?>