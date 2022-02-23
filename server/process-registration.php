<?php
                require_once 'db/connection.php';
                session_start();
                // REGISTRATION VARs
                $username   =  $_POST['username'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $password   =  $_POST['password'];
                $cpassword = $_POST['cpassword'];

                echo "@@debug: ".$username." ".$password." ".$email." ".$address;
          
                if(isset($username)){

                    //cookieclean
                    unset($_SESSION['register_duplicate']);
                    unset($_SESSION['register_username']);
                    unset($_SESSION['register_email']);
                    unset($_SESSION['register_minimum']);
                    unset($_SESSION['register_confirm']);

                    $sql = "SELECT * FROM users WHERE username ='$username'";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $count = mysqli_num_rows($result);
                    
                    if ($count > 0) {
                      $_SESSION['register_duplicate'] = true;
                      // $_SESSION['register_username'] = $username;
                      header('Location: /');
                      die();
                    } 
                    
                    // Name checker, so only letters and space are accepted.
                    if (preg_match('[@_!#$%^&*()<>?/|}{~:]',$username)) {
                      // $username_error = "Name must contain only alphabets and space";
                      $_SESSION['register_username'] = true;
                      header('Location: /');
                      die();
                    }

                    // Email validation.
                    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                      // $email_error = "Please Enter Valid Email ID";
                      $_SESSION['register_email'] = true;
                      header('Location: /');
                      die();
                    }

                    // Password length validation.
                    if(strlen($password) < 8) {
                      // $password_error = "Password must be minimum of 8 characters";
                      $_SESSION['register_minimum'] = true;
                      header('Location: /');
                      die();
                    }  

                    // Password and confirm password validation.
                    if ($password != $cpassword){
                      // $cpassword_error = "Password and Confirm Password doesn't match";
                      $_SESSION['register_confirm'] = true;
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
                    
                    $_SESSION['isLoggedIn'] = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    $_SESSION['address'] = $address;
                    header('Location: /dashboard');
  
                  } catch (Exception $e) {
                    echo $e->getMessage();
                  }
  
?>
