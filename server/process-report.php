<?php 
    require_once 'db/connection.php';
    if(session_id() == ''){
      session_start();
   }
   $reports =  $_POST['report'];
   $userID =  mysqli_real_escape_string($conn,$_POST['userID']);
   $petID =  mysqli_real_escape_string($conn,$_POST['petID']);
   $text = "";
   foreach ($reports as $report) {
    $text .= $report.", ";
   }

   try {
    $stmt = $conn->prepare("INSERT INTO reports (reports, petID, isResolved) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siii", $text, $petID, $userID, 0);
        $stmt->execute();

        $stmt->close();
   } catch (Exception $e) {
      echo $e->getMessage();
   }
?>

