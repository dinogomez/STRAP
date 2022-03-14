<?php

require_once 'db/connection.php';
if (session_id() == '') {
  session_start();
}


$deviceID =  mysqli_real_escape_string($conn, $_POST['deviceID']);


$sql = "SELECT * FROM devices WHERE deviceID ='$deviceID'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count > 0) {


  setcookie(
    "errorRegisterDevice",
    "Duplicate device '<strong>" . $deviceID . "</strong>', Try Again.",
    time() + (5),
    "/"
  );

  header('Location: /super');
  die();
}


try {
  $stmt = $conn->prepare("INSERT INTO devices (deviceID) VALUES (?)");
  $stmt->bind_param("s", $deviceID);
  $stmt->execute();

  $stmt->close();

  setcookie(
    "successRegisterDevice",
    "<strong>Success!</strong>, created device <strong>" . $deviceID . "</strong>",
    time() + (5),
    "/"
  );
  header('Location: /super');
} catch (Exception $e) {
  setcookie(
    "errorRegisterDevice",
    $e->getMessage(),
    time() + (5),
    "/"
  );

  header('Location: /super');
}
