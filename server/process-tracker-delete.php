<?php 

    require_once 'db/connection.php';
    require 'process-log.php';
    if(session_id() == ''){
        session_start();
     }

 
    $id =  mysqli_real_escape_string($conn,$_POST['id']);
    $update = $conn->prepare("DELETE FROM trackers WHERE id = ?");
    $update->bind_param('i', $id);
    $update->execute();
    $update->close();

    // Delete Tracker Logs
    $userID = $_SESSION['id'];

    $sql = "SELECT * FROM trackers WHERE userID ='$userID'";
    $result = mysqli_query( $conn,$sql);
    $count = mysqli_num_rows($result);

    $event = "DELETE";
    $type = "TRACKER";
    activityLog($userID, $event, $type, $conn);

    header('Location: /tracker');

?>
