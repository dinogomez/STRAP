<?php
require_once 'db/connection.php';
if (session_id() == '') {
  session_start();
}

if (isset($_GET['id'])) {
  $userID = $_GET['id'];

  $sql = "SELECT * FROM pets WHERE uniqid ='$userID'";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);

  if ($count <= 0) {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>

      It seems that \"<strong>" . $userID . "</strong>\" does not match any pets.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div";
  } else {
    $_SESSION['pets'] = array();

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      //setting values
      $pet = array(
        $row['id'],
        $row['petName'],
        $row['petType'],
        $row['petBreed'],
        $row['petDiet'],
        $row['petVaccine'],
        $row['ContactName'],
        $row['ContactNumber'],
        $row['petImg'],
        $row['uniqid'],
        $row['userID']
      );
    }

    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>

      You found \"<strong>" . $pet[1] . "</strong>\" try contacting their owner via the contact number!
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";

    $data = "http://" . $_SERVER['SERVER_NAME'] . "/search?id=" . $pet[9];
    echo "<div class='d-flex my-2 shadow-lg border bg-glass'>
        
        <div class='flex-shrink-0'>
            <img src='" . $pet[8] . "' alt='pet image' style='width: 300px; height: 300px;'>
        </div>
     
        <div class='flex-grow-1 ms-3  align-self-center'>
        <div class='float-end px-4'>
        <button class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#pet" . $pet[0] . "'><i class='fa-solid fa-flag'></i></button>

        </div>
            <div class=''>
          
            <h5>" . $pet[1] . " <span class='badge bg-success rounded-pill fs-bold'>" . $pet[9] . "</span><span class='ms-2 badge bg-primary rounded-pill'>" . $pet[2] . "</span><span class='ms-2 badge bg-warning rounded-pill'>" . $pet[3] . "</span></h5>
            </div>
            <h6 class='text-muted'>" . $pet[6] . " | " . $pet[7] . "</h6>
            <h6 class='fs-6 fw-bold'>Diet: </h6>
            <p>" . $pet[4] . "</p>
            <h6 class='fs-6 fw-bold'>Vaccines: </h6>
            <p>" . $pet[5] . "</p>
        
        </div>
      </div>


      <div class='modal fade' id='pet" . $pet[0] . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog '>
            <div class='modal-content'>
            <div class='modal-header text-center'>
                <h5 class='modal-title' id='exampleModalLabel'>Report " . $pet[1] . " 🚩 </h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            
            <div class='modal-body'>
            <div class='text-center'>
            <p class='text-rubik'>Select any violations you may see.</p>

            </div>
            <hr>
            <form class='mx-1' action='/report' method='post'>

            <div class='form-check'>
            <input class='form-check-input text-danger' type='checkbox' name='report[]' value='Inappropriate Images or Text' id='formCheckDefault'>
            <label class='form-check-label' for='formCheckDefault'>Inappropriate Images or Text</label>
          </div>
          <div class='form-check'>
            <input class='form-check-input text-danger' type='checkbox' name='report[]' value='Irrelevant Images or Text' id='formCheckDefault'>
            <label class='form-check-label' for='formCheckDefault'>Irrelevant Images or Text</label>
          </div>
          <div class='form-check'>
          <input class='form-check-input text-danger' type='checkbox' name='report[]' value='Other' id='formCheckDefault'>
          <label class='form-check-label' for='formCheckDefault'>Other</label>
        </div>
          
            </div>
            <div class='modal-footer' style='border-top: 0 none;'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <input type='hidden' name='userID' value='" . $pet[10] . "'>
                <input type='hidden' name='petID' value='" . $pet[0] . "'>
                <input type='hidden' name='uniqid' value='" . $userID . "'>

                <input type='submit' value='Report' class='btn btn-danger'>
              </form>
            </div>
            </div>
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
