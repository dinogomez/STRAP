<?php
require_once 'db/connection.php';
if (session_id() == '') {
   session_start();
}
$reports =  $_POST['report'];
$uniqid =  mysqli_real_escape_string($conn, $_POST['uniqid']);
$userID =  mysqli_real_escape_string($conn, $_POST['userID']);
$petID =  mysqli_real_escape_string($conn, $_POST['petID']);
$text = "";
$isResolved1 = "OPEN";
$adminID = 1;

$i = 0;
$len = count($reports);
foreach ($reports as $item) {
   if ($i == $len - 1) {
      $text .= $item;
   } else {
      $text .= $item . ", ";
   }

   $i++;
}


$sql = "SELECT * FROM reports WHERE petID = '$petID'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

while ($row = mysqli_fetch_array($result)) {
   $petReports = $row['reports'];
   $status = $row['isResolved'];
   $trimReports = str_replace(' ', '', $petReports);
   $trimText =  str_replace(' ', '', $text);
   if ($petReports == $text && $status == "OPEN") {
      setcookie(
         "duplicateReport",
         "This pet is currently being <strong>assessed</strong> due to similar reports",
         time() + (5),
         "/"
      );

      header('Location: /search?id=' . $uniqid);
      exit();
   } elseif (str_contains($trimReports, $trimText) && $status == "OPEN") {
      setcookie(
         "duplicateReport",
         "This pet is currently being <strong>assessed</strong> due to similar reports",
         time() + (5),
         "/"
      );

      header('Location: /search?id=' . $uniqid);
      exit();
   }
}


try {
   $stmt = $conn->prepare("INSERT INTO reports (reports, petID, userID, isResolved, resolverID) VALUES (?, ?, ?, ?, ?)");
   $stmt->bind_param("siisi", $text, $petID, $userID, $isResolved1,  $adminID);
   $stmt->execute();

   $stmt->close();
   setcookie(
      "reportStatus",
      "<strong>Succesfully!</strong> reported.",
      time() + (5),
      "/"
   );

   header('Location: ' . $_SERVER['HTTP_REFERER']);
} catch (Exception $e) {
   echo $e->getMessage();
}
