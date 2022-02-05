<?php
                require_once 'db/connection.php';
                require_once getcwd().'\views\include\headers.php';
                session_start();
                // REGISTRATION VARs
                $username   =  $_POST['username'];
                $password   =  $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];

                echo "@@debug: ".$username." ".$password." ".$email." ".$address;
                

                if(isset($username)){
                    
                    $sql = "SELECT * FROM users WHERE username ='$username'";
  
                    $result = mysqli_query($conn,$sql);
  
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
                    $count = mysqli_num_rows($result);
                    if ($count > 0) {
                      $_SESSION['register_duplicate'] = true;
                      $_SESSION['register_username'] = $username;
                      header('Location: /register');
                      die();
                    }
                    }
                  try {
                    if (!$username   || !$password || !$address
                     || !$email  ) {
  
                      throw new Exception('Input is not complete');
                    }
  
                    // @ $db = new mysqli('localhost', 'root', '', 'testdp');
  
                    $dbError = mysqli_connect_errno();
                    if ($dbError) {
                      throw new Exception('Could not connect to database. Error: '.$dbError);
                    }
  
  
                    $query = "insert into users (username, address, password) values (?, ?, ?)";
                    $stmt = $conn->prepare($query);
  
                    // Using PHP 5.5's 'password_hash' function instead of 'hash'
                    // PASSWORD_DEFAULT algorithm uses 60+ charachter capacity.
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $stmt->bind_param("sss", $username, $email, $hashedPassword);
                    $stmt->execute();

            
                    $stmt->close();
                    header('Location: /login');

  
                  } catch (Exception $e) {
                    echo $e->getMessage();
                  }
  

               ?>
