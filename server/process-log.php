<?php 
require_once 'db/connection.php';
if(session_id() == ''){
   session_start();
}

function activityLog($userId, $event, $type, $conn){

    $query = "insert into activity_logs (userId, event, type) values (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss",  $userId, $event, $type);
    $stmt->execute();

}

?>