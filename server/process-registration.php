<?php
                require_once 'db/connection.php';
                require 'process-log.php';
                if(session_id() == ''){
                  session_start();
               }                 // REGISTRATION VARs
                $username   = mysqli_real_escape_string($conn,$_POST['username']);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $address = mysqli_real_escape_string($conn,$_POST['address']);
                $password   = mysqli_real_escape_string($conn,$_POST['password']);
                $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

                echo "@@debug: ".$username." ".$password." ".$email." ".$address;
          
                if(isset($username)){

                  
                    $sql = "SELECT * FROM users WHERE username ='$username'";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $count = mysqli_num_rows($result);
                    
                    if ($count > 0) {
                      // Deprecated as of strap 1.1
                      // $_SESSION['register_duplicate'] = true;
                      // $_SESSION['errorRegister'] = true;

                      // $_SESSION['register_username'] = $username;

                      setcookie("errorRegister", 
                      "Duplicate Username '<strong>".$username."</strong>', Try Again.", 
                      time() + (5), 
                      "/");      

                      header('Location: /');
                      die();
                    } 
                    
                    // Name checker, so only letters and space are accepted.
                    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username)) {
                      // $username_error = "Name must contain only alphabets and space";
                      // $_SESSION['register_username'] = true;
                      // $_SESSION['errorRegister'] = true;

                      setcookie("errorRegister", 
                      "Name must contain only alphabets and space. Try Again.", 
                      time() + (5), 
                      "/");     
                      
                      header('Location: /');
                      die();
                    }

                    // Email validation.
                    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                      // $email_error = "Please Enter Valid Email ID";
                      setcookie("errorRegister", 
                      "Please Enter Valid Email ID. Try Again.", 
                      time() + (5), 
                      "/"); 

                      header('Location: /');
                      die();
                    }

                    // Password length validation.
                    if(strlen($password) < 8) {
                      // $password_error = "Password must be minimum of 8 characters";
                      setcookie("errorRegister", 
                      "Password must be minimum of 8 characters. Try Again.", 
                      time() + (5), 
                      "/"); 

                      header('Location: /');
                      die();
                    }  

                    // Password and confirm password validation.
                    if ($password != $cpassword){
                      // $cpassword_error = "Password and Confirm Password doesn't match";
                      setcookie("errorRegister", 
                      "Password does not match. Try Again.", 
                      time() + (5), 
                      "/");

                      header('Location: /');
                      die();
                    } 

                }

                  try {
                    if (!$username || !$password || !$cpassword || !$address || !$email  ) {
                      throw new Exception('Input is not complete');
                    }
  
                    // @ $db = new mysqli('localhost', 'root', '', 'testdp');
  
                    $dbError = mysqli_connect_errno();
                    if ($dbError) {
                      throw new Exception('Could not connect to database. Error: '.$dbError);
                    }

                    $query = "insert into users (username, email, address, password) values (?, ?, ?, ?)";
                    $stmt = $conn->prepare($query);
  
                    // Using PHP 5.5's 'password_hash' function instead of 'hash'
                    // PASSWORD_DEFAULT algorithm uses 60+ charachter capacity.
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $stmt->bind_param("ssss", $username, $email, $address, $hashedPassword);
                    $stmt->execute();

                    $stmt->close();

                    // Register Logs
                    $query = "select * from users where username = '$username'";
                    $result = mysqli_query( $conn,$query);
                    $count = mysqli_num_rows($result);

                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                      $userID = $row['id'];
                    }

                    $event = "REGISTER";
                    $type = "USER";
                    activityLog($userID, $event, $type, $conn);

                    $_SESSION['isLoggedIn'] = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    $_SESSION['address'] = $address;
                    header('Location: /dashboard');
  
                  } catch (Exception $e) {
                    echo $e->getMessage();
                  }
  
?>
