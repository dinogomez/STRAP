<?php

require_once 'db/connection.php';
$id = mysqli_real_escape_string($conn, $_GET['id']);

try
{
    $sqlImage = "UPDATE reports SET 
      isResolved = 'CLOSED' 
        where id = '$id'";

    $result = mysqli_query($conn, $sqlImage);
}
catch(Exception $e)
{
    echo $e->getMessage();
}
header('Location: /admin');

?>
