<?php
require_once 'db/connection.php';
if (session_id() == '') {
  session_start();
}
$userID = $_SESSION['id'];

$sql = "SELECT * FROM pets WHERE userID ='$userID'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);


if ($count <= 0) {
  $_SESSION['noPets'] = true;
  if (isset($_SESSION['pets'])) {
    unset($_SESSION['pets']);
  }
} else {
  $_SESSION['pets'] = array();

  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    //setting values      
    $pet = array($row['id'], $row['petName'], $row['petType'], $row['petBreed'], $row['petDiet'], $row['petVaccine'], $row['ContactName'], $row['ContactNumber'], $row['petImg'], $row['uniqid']);

    array_push($_SESSION['pets'], $pet);
  }



  foreach ($_SESSION['pets'] as $pet) {

    $trackerActive = false;

    if (isset($_SESSION['trackers'])) {
      foreach ($_SESSION['trackers'] as $tracker) {
        if ($tracker[2] == $pet[1]) {
          $trackerActive = true;
          break;
        }
      }
    }

    $data = "http://" . $_SERVER['SERVER_NAME'] . "/search?id=" . $pet[9] . " Contact Name: " . $pet[6] . ", Contact Number: " . $pet[7];
    echo " <div class='d-flex my-2 shadow-lg bg-glass border'>
        <div class='flex-shrink-0'>
            <img src='" . $pet[8] . "' alt='pet image' style='width: 300px; height: 300px;'>
        </div>
        <div class='flex-grow-1 ms-3  align-self-center  mt-2'>
            <div class='d-flex justify-content-between'>
            <div>
            <h5>" . $pet[1] . " <span class='badge bg-success rounded-pill fs-bold'>" . $pet[9] . "</span><span class='ms-2 badge bg-primary rounded-pill'>" . $pet[2] . "</span><span class='ms-2 badge bg-warning rounded-pill'>" . $pet[3] . "</span></h5>

            </div>
            <div class='mx-4'>";

    if ($trackerActive) {
      echo "<h6><span class='text-success'>⬤</span> Tracker Active</h6>";
    } else {
      echo "<h6><span class='text-danger'>⬤</span> No Tracker</h6>";
    }

    echo "</div>
            
            </div>
            <h6 class='text-muted'>" . $pet[6] . " | " . $pet[7] . "</h6>
            <h6 class='fs-6 fw-bold'>Diet: </h6>
            <p>" . $pet[4] . "</p>
            <h6 class='fs-6 fw-bold'>Vaccines: </h6>
            <p>" . $pet[5] . "</p>
            <div class='d-flex float-end p-3'>
              <a href='/dashboard?trackID=" . $pet[0] . "' class='btn btn-primary mx-1'>Track</a>

              <form class='mx-1' action='/pet-update' method='get'>
                <input type='hidden' name='id' value='" . $pet[0] . "'>
                <input type='submit' value='Edit' class='btn btn-success'>
              </form>
              
              <button class='btn btn-dark mx-1' data-bs-toggle='modal' data-bs-target='#petQR" . $pet[0] . "'><i class='fa-solid fa-qrcode'></i></button>

              <button class='btn btn-danger mx-1' data-bs-toggle='modal' data-bs-target='#pet" . $pet[0] . "'><i class='fa-solid fa-trash-can'></i></button>
            </div>
        </div>
      </div>

      
      
      

        <div class='modal fade' id='pet" . $pet[0] . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Delete Confirmation ⚠️ </h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                Are you sure you want to remove <strong class='text-danger'> " . $pet[1] . "</strong>?
            </div>
            <div class='modal-footer' style='border-top: 0 none;'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <form class='mx-1' action='/pet-delete' method='post'>
                <input type='hidden' name='id' value='" . $pet[0] . "'>
                <input type='submit' value='Delete' class='btn btn-danger'>
              </form>
            </div>
            </div>
        </div>
        </div>
      
        <div class='modal fade' id='petQR" . $pet[0] . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Your pets QR Code 🔗 </h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
            <img src='https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl={$data}' alt='QR Code' width='100%' height='100%'>
            </div>
            <div class='modal-footer' >
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <a href='https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl={$data}' class='btn btn-dark' download>Download</a>
            </div>
            </div>
        </div>
        </div>
      
      ";
  }
}
