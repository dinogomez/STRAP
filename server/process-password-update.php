<?php

require_once 'db/connection.php';


$id = $_SESSION['id'];
$oldPassword = mysqli_real_escape_string($conn, $_POST['oldPassword']);
$newPassword = mysqli_real_escape_string($conn, $_POST['newPassword']);
$newPasswordConfirm = mysqli_real_escape_string($conn, $_POST['newPasswordConfirm']);



try {

  if ($newPassword != $newPasswordConfirm) {
    setcookie(
      "passUpdateFail",
      "<strong>Ooof!</strong>, Your new password does not match! Try again",
      time() + (5),
      "/"
    );

    header('Location: /profile');
    exit();
  }

  $sql = "SELECT * FROM users WHERE id ='$id'";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $hash = $row['password'];

  if (!password_verify($oldPassword, $hash)) {
    setcookie(
      "passUpdateFail",
      "<strong>Ooof!</strong>, You entered the wrong old password. Try again!",
      time() + (5),
      "/"
    );

    header('Location: /profile');
    exit();
  } else {
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);


    $sqlImage = "UPDATE users SET 
      password = '$hashedPassword'
        where id = '$id'";

    $result = mysqli_query($conn, $sqlImage);
    setcookie(
      "passUpdateSuccess",
      "<strong>Succesfully</strong> changed your password!",
      time() + (5),
      "/"
    );

    header('Location: /profile');
  }
} catch (Exception $e) {
  setcookie(
    "passUpdateFail",
    $e->getMessage(),
    time() + (5),
    "/"
  );

  header('Location: /profile');
  exit();
}
