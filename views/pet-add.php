<?php require_once 'include/headers.php';?>
<?php include_once 'include/nav-pet.php';?>
<?php require_once 'server/process-protect-page.php'?>


 


<form action="/pet-register" method="post" enctype="multipart/form-data">
<div class="container my-2">

<?php if(isset($_SESSION['pets'])){?>
  <a href="/pet" class="btn btn-md w-25 shadow btn-outline-primary"><i class="fa-solid fa-arrow-left"></i> View Pets</a>
  <?php }?>




<!-- <div class="alert alert-dismissible alert-primary">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Oh snap!</strong> you havent registered a pet yet? We prepared the form below!👇
</div> -->


</div>
<div class="container-fluid shadow-lg my py-3">
  <div class="container text-center my-5">
    <h2 class="display-4 fw-bolder">Pet Registration! 🐶</h2>
    <hr>
  </div>
  
  <div class="container-fluid w-50">
  <div class="d-flex justify-content-center bd-highlight mb-2">
  <img src="assets/img/pet-placeholder.jpg" id="petImg" class="rounded m-0 border" style="width:200px; height: 200px;" alt="">
</div>
  <hr>
  <?php 

if (isset($_COOKIE['petImgError'])) {
  echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
          ".$_COOKIE['petImgError']."
        </div>  
        <div class='text-center'></div>";
}?>
  <div class="my-2">
  <label for="formControlInput" class="form-label">Pet Picture: </label>
  <div class="input-group mb-3">
  <input type="file" class="form-control" name="pet_img" id="inputGroupFile02" onchange="readURL(this);" required>
  </div> 
 </div>

  <div class="my-2">
  <label for="formControlInput" class="form-label">Pet Name: </label>
  <input type="text" class="form-control" name="petName" id="formControlInput" placeholder="" required>
  </div>

  <div class="my-2">
  <label for="formControlInput" class="form-label">Pet Type:</label>
  <select name="petType" class="form-select" aria-label="Default select">
  <option selected="Dog">Dog</option>
  <option value="Cat">Cat</option>
  <option value="Other">Other</option>
  </select>
  </div>

  <div class="my-2">
  <label for="formControlInput" class="form-label">Pet Breed: </label>
  <input type="text" class="form-control" name="petBreed" id="formControlInput" placeholder="" required> 
  </div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Pet Diet: </label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="petDiet" rows="5" placeholder="Fill in you're pets diet. Write N/A for none." required></textarea>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Pet Vaccines: </label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="petVaccine" rows="5" placeholder="Fill in the vaccines and shots you're pet has taken. Write N/A for none." required></textarea>
</div>

  <div class="my-2">
  <label for="formControlInput" class="form-label">Contact Name: </label>
  <input type="text" class="form-control" name="contactName" id="formControlInput" placeholder="" required>
  </div>

  <div class="my-2">
  <label for="formControlInput" class="form-label">Contact Number: </label>
  <input type="text" class="form-control" name="contactNumber" id="formControlInput" placeholder="" required>
  </div>
  <hr>
  <div class="my-2">
    <input type="submit" value="Submit" class="btn btn-primary w-100">
  </div>
  </div>
</div>
</form>
<div class="my-5 "></div>
</div>
</div>





<?php require_once 'include/footers.php'?>
