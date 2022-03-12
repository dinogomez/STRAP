<?php 

    require_once 'db/connection.php';
    if(session_id() == ''){
      session_start();
   }


    $image = $_FILES['pet_img'];
    $petName = mysqli_real_escape_string($conn,$_POST['petName']);
    $petType = mysqli_real_escape_string($conn,$_POST['petType']);
    $petBreed = mysqli_real_escape_string($conn,$_POST['petBreed']);
    $petDiet = mysqli_real_escape_string($conn,$_POST['petDiet']);
    $petVaccine = mysqli_real_escape_string($conn,$_POST['petVaccine']);
    $petContactName = mysqli_real_escape_string($conn,$_POST['contactName']);
    $petContactNumber =mysqli_real_escape_string($conn,$_POST['contactNumber']);

    
    // For Image Insertion into Database

    $imageName = $image['name'];
    echo $imageName;
    $fileType = $image['type'];
    $fileSize = $image['size'];
    $fileTmpName = $image['tmp_name'];
    $fileError = $image['error'];

    $fileImageData = explode("/",  $fileType);
    $fileExtension = $fileImageData[count($fileImageData) - 1];

    if($fileExtension == 'jpg' || $fileExtension == 'jpeg' || $fileExtension == 'png'){
      
      if($fileSize < 5000000){
        $fileNewName = "assets/pet/".$imageName;
        $uploaded = move_uploaded_file($fileTmpName, $fileNewName);

        if($uploaded){
          try {
            $query = "insert into pets (petName, petType, petBreed, petDiet, petVaccine, ContactName, ContactNumber, petImg, userID, uniqid) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssssssssss", $petName, $petType, $petBreed, $petDiet, $petVaccine, $petContactName, $petContactNumber, $fileNewName, $_SESSION['id'], uniqid());
            $stmt->execute();

            $stmt->close();
            
          } catch (Exception $e) {
              echo $e;
              header('Location: /pet');
          }
          $userID = $_SESSION['id'];

          $sql = "SELECT * FROM pets WHERE userID ='$userID'";
          $result = mysqli_query( $conn,$sql);
          $count = mysqli_num_rows($result);
      
      
          if ($count<= 0) {
            $_SESSION['noPets'] = true;
            if(isset($_SESSION['pets'])){
              unset($_SESSION['pets']);
      
            }
          } else {
            unset($_SESSION['pets']);

            $_SESSION['pets'] = array();
            
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              //setting values      
              $pet = array($row['id'], $row['petName'], $row['petType'], $row['petBreed'], $row['petDiet'], $row['petVaccine'], $row['ContactName'], $row['ContactNumber'],$row['petImg'], $row['uniqid']);
             
              array_push($_SESSION['pets'],$pet);
             
            }
          }
          header('Location: /pet');

        }
      }else {
        setcookie("petImgError", 
                      "<strong>Ohhh ohh!</strong>, File size too big.", 
                      time() + (5), 
                      "/");     
                      
        header('Location: /pet');
        exit();
      }

    }else {
        setcookie("petImgError", 
        "<strong>Ohhh ohh!</strong>, Invalid file fornat.", 
        time() + (5), 
        "/");     
        
header('Location: /pet');
      exit();
    }

?>