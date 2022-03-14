<?php

require_once 'db/connection.php';


$id = $_SESSION['id'];
$profileUsername = mysqli_real_escape_string($conn, $_POST['profileUsername']);
$profileEmail = mysqli_real_escape_string($conn, $_POST['profileEmail']);
$profileAddress = mysqli_real_escape_string($conn, $_POST['profileAddress']);


try {



  $sqlImage = "UPDATE users SET 
    username = '$profileUsername', 
    email = '$profileEmail', 
    address = '$profileAddress'
      where id = '$id'";

  $result = mysqli_query($conn, $sqlImage);
  setcookie(
    "profileUpdateSuccess",
    "<strong>Succesfully</strong> edit your profile!",
    time() + (5),
    "/"
  );

  header('Location: /profile');
} catch (Exception $e) {
  setcookie(
    "profileUpdateFail",
    $e->getMessage(),
    time() + (5),
    "/"
  );

  header('Location: /profile');
  exit();
}
