<?php

require_once 'db/connection.php';
if (session_id() == '') {
  session_start();
}


$userId =  $_SESSION['id'];
$adminUsername =  mysqli_real_escape_string($conn, $_POST['adminUsername']);
$adminPassword =  mysqli_real_escape_string($conn, $_POST['adminPassword']);
$role = "admin";
if (isset($adminUsername)) {


  $sql = "SELECT * FROM admin WHERE username ='$adminUsername'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count > 0) {


    setcookie(
      "errorRegister",
      "Duplicate Username '<strong>" . $adminUsername . "</strong>', Try Again.",
      time() + (5),
      "/"
    );

    header('Location: /super');
    die();
  }

  // Name checker, so only letters and space are accepted.
  if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $adminUsername)) {
    // $username_error = "Name must contain only alphabets and space";
    // $_SESSION['register_username'] = true;
    // $_SESSION['errorRegister'] = true;

    setcookie(
      "errorRegister",
      "Name must contain only alphabets and space. Try Again.",
      time() + (5),
      "/"
    );

    header('Location: /super');
    die();
  }



  // Password length validation.
  if (strlen($adminPassword) < 8) {
    // $password_error = "Password must be minimum of 8 characters";
    setcookie(
      "errorRegister",
      "Password must be minimum of 8 characters. Try Again.",
      time() + (5),
      "/"
    );

    header('Location: /super');
    die();
  }
}


try {
  $hash = password_hash($adminPassword, PASSWORD_DEFAULT);
  $stmt = $conn->prepare("INSERT INTO admin (username, password, role) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $adminUsername, $hash, $role);
  $stmt->execute();

  $stmt->close();

  setcookie(
    "successRegister",
    "<strong>Success!</strong>, created admin <strong>" . $adminUsername . "</strong>",
    time() + (5),
    "/"
  );
  header('Location: /super');
} catch (Exception $e) {
  setcookie(
    "errorRegister",
    $e->getMessage(),
    time() + (5),
    "/"
  );

  header('Location: /super');
}
