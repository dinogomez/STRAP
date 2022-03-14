<?php
require_once 'db/connection.php';

if (isset($_POST['update'])) {
  $newUsername = $_POST['updateUsername'];
  $newAddress = $_POST['updateAddress'];
  $newPassword = $_POST['updatePassword'];
  $image = $_FILES['userImage'];
  $sql = "";
  if (!empty($newUsername)) {
    // For User Information Update
    $loggedInUser = $_SESSION['username'];
    if (!empty($newPassword)) {
      $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
      $sql = "UPDATE users SET username = '$newUsername', 
                                address = '$newAddress',
                                password = '$hashedPassword' where username = '$loggedInUser'";
    } else {
      $sql = "UPDATE users SET username = '$newUsername', 
                                address = '$newAddress' where username = '$loggedInUser'";
    }
    $results = mysqli_query($conn, $sql);

    unset($_SESSION['username']);
    unset($_SESSION['address']);

    $_SESSION['username'] = $newUsername;
    $_SESSION['address'] = $newAddress;

    // For Image Insertion into Database
    $imageName = $image['name'];
    $fileType = $image['type'];
    $fileSize = $image['size'];
    $fileTmpName = $image['tmp_name'];
    $fileError = $image['error'];

    $fileImageData = explode("/",  $fileType);
    $fileExtension = $fileImageData[count($fileImageData) - 1];

    if ($fileExtension == 'jpg' || $fileExtension == 'jpeg' || $fileExtension == 'png') {

      if ($fileSize < 5000000) {
        $fileNewName = "assets/img/uploaded_img/" . $imageName;
        $uploaded = move_uploaded_file($fileTmpName, $fileNewName);

        if ($uploaded) {
          $sqlImage = "UPDATE users SET user_image = '$imageName' where username = '$loggedInUser'";

          $result = mysqli_query($conn, $sqlImage);

          unset($_SESSION['user_image']);

          $_SESSION['user_image'] = $imageName;
          header('Location: /dashboard');
          exit();
        }
      } else {
        header('Location: /user-profile');
        exit();
      }
    } else {
      header('Location: /user-profile');
      exit();
    }
  } else {
    header('Location: /user-profile');
    exit();
  }
}
