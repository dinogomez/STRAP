<?php 

    require_once 'db/connection.php';


 
    $id =  mysqli_real_escape_string($conn,$_POST['id']);
    $update = $conn->prepare("DELETE FROM pets WHERE id = ?");
    $update->bind_param('i', $id);
    $update->execute();
    $update->close();
    header('Location: /pet');

?>
