<?php 
    require_once 'db/connection.php';
    require_once getcwd().'\views\include\headers.php';
    session_start();

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);

    try {
      $dbError = mysqli_connect_errno();
      if ($dbError) {
        throw new Exception('Could not connect to the database.');
      }

      if (!$email || !$password) {
        throw new Exception('Incomplete credentials');
      }
  
      $sql = "SELECT * FROM users WHERE email ='$email'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
  
      if ($count<= 0) {
        throw new Exception("Account does not exist.");
      }
  
      //retrieving name from database for session storage
      $sql = "SELECT * FROM users WHERE email ='$email'";
      $result = mysqli_query($conn,$sql);
  
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        //setting values
        $hash = $row['password'];
      }

      if (password_verify($password,$hash)) {
        $_SESSION['email'] = $email;
        header('Location: /dashboard');
      } else {
          throw new Exception("Incorrect Credentials!.");
        }
      } catch(Exception $e) {
        $_SESSION['login_error'] = $e->getMessage();
        header('Location: /login');
      }
      
?>