<?php require_once 'include/headers.php';?>
<?php include_once 'include/nav-track.php';?>
<?php require_once 'server/process-protect-page.php'?>

<div class="container  my-3">
  <button class="btn btn-md w-25 shadow btn-outline-primary" data-bs-toggle="modal" data-bs-target="#trackerModal">Add Tracker</button>
</div>
<hr>
<!-- Modal -->
<div class="modal fade" id="trackerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="text-center mb-0">
          <h1 class="fs-2 fw-bold">Add Tracker 🛰️</h1>
          <hr>
          </div>
      <div class="modal-body">

      <?php 
      if(isset($_COOKIE['trackerRegisterError'])){
        echo "<div class='alert alert-danger text-center mb-3' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>

                           ".$_COOKIE['trackerRegisterError'].", Try Again.
                          </div>  <div class='text-center'>
                        </div>";
      }
      
      ?>
        <form action="/process-tracker-registration" method="POST">

        <div class="my-2">
        <label for="formControlInput" class="form-label">Device ID: </label>
        <input type="text" class="form-control" name="deviceID" id="formControlInput" placeholder="" required>  
        </div>

        <div class="my-2">
        <label for="formControlInput" class="form-label">Pet Assigned: </label>
        <select class="form-select" name="petID" aria-label="Default select" required>
        <?php 
        
        foreach($_SESSION['pets'] as $pet){
          
          echo "<option value='".$pet[0]."'>".$pet[1]."</option>";

        }
        
        ?>
      </select>
      </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add</button>
        </form>

      </div>
    </div>
  </div>
</div>

<?php

include 'server/process-tracker-retrieve.php';


 if(isset($_SESSION['trackers'])){
   
   ?>
  <div class="container-fluid w-100">






<table class="table table-primary table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Device ID</th>
      <th scope="col">Pet Assigned</th>
      <th scope="col"></th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  <?php 

include 'server/process-tracker-print.php';


?>
  
  </tbody>
</table>



</div>



<?php } else {

    echo "<div class='alert alert-dismissible alert-info'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Info:'><use xlink:href='#info-fill'/></svg>

    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
    It seems you don't have any trackers registered yet. Try adding one using the <strong>Add Tracker</strong> button above!

  </div>";
  
}?>
 



  







</div>
</div>


<?php require_once 'include/footers-index.php'?>
