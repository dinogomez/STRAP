<?php


    require_once 'db/connection.php';
    require 'process-log.php';

if ($_FILES['pet_img']['name'] != '') {
  $image = $_FILES['pet_img'];
}
$id =  mysqli_real_escape_string($conn, $_POST['id']);
$petName = mysqli_real_escape_string($conn, $_POST['petName']);
$petType = mysqli_real_escape_string($conn, $_POST['petType']);
$petBreed = mysqli_real_escape_string($conn, $_POST['petBreed']);
$petDiet = mysqli_real_escape_string($conn, $_POST['petDiet']);
$petVaccine = mysqli_real_escape_string($conn, $_POST['petVaccine']);

$petContactName = mysqli_real_escape_string($conn, $_POST['contactName']);
$petContactNumber = mysqli_real_escape_string($conn, $_POST['contactNumber']);

$header = "/pet-update?id=" . $id;
// For Image Insertion into Database
if ($_FILES['pet_img']['name'] != '') {

  $imageName = $image['name'];
  echo $imageName;
  $fileType = $image['type'];
  $fileSize = $image['size'];
  $fileTmpName = $image['tmp_name'];
  $fileError = $image['error'];

  $fileImageData = explode("/",  $fileType);
  $fileExtension = $fileImageData[count($fileImageData) - 1];

  if ($fileExtension == 'jpg' || $fileExtension == 'jpeg' || $fileExtension == 'png') {

    if ($fileSize < 5000000) {
      $fileNewName = "assets/pet/" . $imageName;
      $uploaded = move_uploaded_file($fileTmpName, $fileNewName);

      if ($uploaded) {
        try {
          $sqlImage = "UPDATE pets SET 
            petName = '$petName', 
            petType = '$petType', 
            petBreed = '$petBreed', 
            petDiet = '$petDiet', 
            petVaccine = '$petVaccine',
            ContactName = '$petContactName',
            ContactNumber = '$petContactNumber',
            petImg = '$fileNewName'
            where id = '$id'";

    
            $result = mysqli_query($conn, $sqlImage);

            // Update Pet Logs
            $userID = $_SESSION['id'];

            $sql = "SELECT * FROM pets WHERE userId ='$userID'";
            $result = mysqli_query( $conn,$sql);
            $count = mysqli_num_rows($result);
            
            $event = "UPDATE";
            $type = "PET";
            activityLog($userID, $event, $type, $conn);
            
          } catch (Exception $e) {
              echo $e;
              header('Location:'.$header);
          }
          header('Location: /pet');

          $result = mysqli_query($conn, $sqlImage);
        
        header('Location: /pet');
      }
    } else {
      setcookie(
        "petImgError",
        "<strong>Ohhh ohh!</strong>, File size too big.",
        time() + (5),
        "/"
      );

      header('Location: ' . $header);
      exit();
    }
  } else {
    setcookie(
      "petImgError",
      "<strong>Ohhh ohh!</strong>, Invalid file fornat.",
      time() + (5),
      "/"
    );

    header('Location: ' . $header);
    exit();
  }
} else {
  $sqlImage = "UPDATE pets SET 
    petName = '$petName', 
    petType = '$petType', 
    petBreed = '$petBreed', 
    petDiet = '$petDiet', 
    petVaccine = '$petVaccine',
    ContactName = '$petContactName',
    ContactNumber = '$petContactNumber'
    where id = '$id'";


    $result = mysqli_query($conn, $sqlImage);

    // Update Pet Logs
    $userID = $_SESSION['id'];

    $sql = "SELECT * FROM pets WHERE userId ='$userID'";
    $result = mysqli_query( $conn,$sql);
    $count = mysqli_num_rows($result);
    
    $event = "UPDATE";
    $type = "PET";
    activityLog($userID, $event, $type, $conn);

    header('Location: /pet');
  }
