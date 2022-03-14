<?php


require_once 'db/connection.php';
require 'process-log.php';
if (session_id() == '') {
  session_start();
}


$userId = (int) $_SESSION['id'];
$deviceID =  mysqli_real_escape_string($conn, $_POST['deviceID']);
$petID = (int) mysqli_real_escape_string($conn, $_POST['petID']);

try {


  $sql = "SELECT * FROM trackers WHERE petID ='$petID'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count > 0) {
    throw new Exception("<strong>Pet</strong> already has a tracker!");
  }



  $sql = "SELECT devices.deviceID FROM trackers LEFT JOIN devices ON trackers.deviceID = devices.id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);


  if ($row['deviceID'] == $deviceID) {
    throw new Exception("<strong>Tracker</strong> is already tracking a pet!");
  }





  $sql = "SELECT * FROM devices WHERE deviceID ='$deviceID'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count <= 0) {
    throw new Exception("<strong>Device " . $deviceID . "</strong> does not exist");
  } else {



    try {
      $stmt = $conn->prepare("INSERT INTO trackers (deviceID, petID, userID) VALUES (?, ?, ?)");
      $stmt->bind_param("iii", $row['id'], $petID, $userId);
      $stmt->execute();

      $stmt->close();

      // Register Tracker Logs
      $userID = $_SESSION['id'];

      $sql = "SELECT * FROM trackers WHERE userID ='$userID'";
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);

      $event = "REGISTER";
      $type = "TRACKER";
      activityLog($userID, $event, $type, $conn);
      header('Location: /tracker');
    } catch (Exception $e) {
      setcookie(
        "trackerRegisterError",
        "" . $e->getMessage() . "  " . $row['id'] . " " . $petID . " " . $userId,
        time() + (5),
        "/"
      );

      header('Location: /tracker');
    }
  }
} catch (Exception $e) {
  setcookie(
    "trackerRegisterError",
    "" . $e->getMessage() . "   ",
    time() + (5),
    "/"
  );

  header('Location: /tracker');
}
