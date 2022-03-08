<?php 
    require_once 'db/connection.php';
    

     if(isset($_GET['id'])){
    $userID = $_GET['id'];

    $sql = "SELECT * FROM pets WHERE uniqid ='$userID'";
    $result = mysqli_query( $conn,$sql);
    $count = mysqli_num_rows($result);


    if ($count<= 0) {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>

      It seems that \"<strong>".$userID."</strong>\" does not match any pets.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div";   
   } else {
      $_SESSION['pets'] = array();
      
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        //setting values      
        $pet = array($row['id'], $row['petName'], $row['petType'], $row['petBreed'], $row['petDiet'], $row['petVaccine'], $row['ContactName'], $row['ContactNumber'],$row['petImg'], $row['uniqid']);
              
      }

      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>

      You found \"<strong>".$pet[1]."</strong>\" try contacting their owner via the contact number!
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";


        $data = "http://".$_SERVER['SERVER_NAME']."/search?id=".$pet[9];
        echo "<div class='d-flex my-2 shadow-lg border'>
        <div class='flex-shrink-0'>
            <img src='".$pet[8]."' alt='pet image' style='width: 300px; height: 300px;'>
        </div>
        <div class='flex-grow-1 ms-3  align-self-center'>
            <div class=''>
            <h5>".$pet[1]." <span class='badge bg-success rounded-pill fs-bold'>".$pet[9]."</span><span class='ms-2 badge bg-primary rounded-pill'>".$pet[2]."</span><span class='ms-2 badge bg-warning rounded-pill'>".$pet[3]."</span></h5>
            </div>
            <h6 class='text-muted'>".$pet[6]." | ".$pet[7]."</h6>
            <h6 class='fs-6 fw-bold'>Diet: </h6>
            <p>".$pet[4]."</p>
            <h6 class='fs-6 fw-bold'>Vaccines: </h6>
            <p>".$pet[5]."</p>
        
        </div>
      </div>
      
      ";
      
    }
  } else {
    echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
      <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>

      Search pets using their \"<strong>Unique ID</strong>\".
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div";
  }
    
?>

