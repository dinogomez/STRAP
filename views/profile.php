<?php require_once 'include/headers.php'; ?>
<?php include_once 'include/nav-pet.php'; ?>
<?php require_once getcwd() . '/server/db/connection.php'; ?>
<?php require_once 'server/process-protect-page.php' ?>

<?php
if (session_id() == '') {
  session_start();
}
$id = $_SESSION['id'];

$sql = "SELECT * FROM users WHERE id ='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);




?>

<form action="/profile-update" method="post">
  <div class="container my-2">






    <!-- <div class="alert alert-dismissible alert-primary">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Oh snap!</strong> you havent registered a pet yet? We prepared the form below!👇
</div> -->
    <input type="hidden" name="id" value='<?php echo $id; ?>'>

  </div>
  <div class="container-fluid shadow-lg my py-3">
    <div class="container text-center my-5">
      <h2 class="display-4 fw-bolder">Profile 🥸</h2>
      <hr>
    </div>

    <div class="container-fluid w-50">
      <h3 class="text-rubik fw-bold text-muted">🧑‍🎓 User</h3>
      <hr>
      <?php

      if (isset($_COOKIE['profileUpdateFail'])) {
        echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>

          " . $_COOKIE['profileUpdateFail'] . "
        </div>  
        <div class='text-center'></div>";
      }
      if (isset($_COOKIE['profileUpdateSuccess'])) {
        echo "<div class='alert alert-success text-center mb-3 mt-1' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>

          " . $_COOKIE['profileUpdateSuccess'] . "
        </div>  
        <div class='text-center'></div>";
      }

      ?>


      <div class="my-2">
        <label for="formControlInput" class="form-label">Username: </label>
        <input type="text" class="form-control" name="profileUsername" id="formControlInput" value="<?php echo $row['username']; ?>" required>
      </div>




      <div class="my-2">
        <label for="formControlInput" class="form-label">Email: </label>
        <input type="email" class="form-control" name="profileEmail" id="formControlInput" value="<?php echo $row['email']; ?>" required>
      </div>

      <div class="my-2">
        <label for="formControlInput" class="form-label">Address: </label>
        <input type="text" class="form-control" name="profileAddress" id="formControlInput" value="<?php echo $row['address']; ?>" required>
      </div>

      <hr>
      <div class="my-2">
        <input type="submit" value="Update" class="btn btn-warning w-100">
      </div>
</form>

<form action="/password-update" method="post">

  <div class="my-5"></div>
  <h3 class="text-rubik fw-bold text-muted">🔑 Security</h3>
  <hr>
  <?php

  if (isset($_COOKIE['passUpdateFail'])) {
    echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>

      " . $_COOKIE['passUpdateFail'] . "
    </div>  
    <div class='text-center'></div>";
  }
  if (isset($_COOKIE['passUpdateSuccess'])) {
    echo "<div class='alert alert-success text-center mb-3 mt-1' role='alert'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>

      " . $_COOKIE['passUpdateSuccess'] . "
    </div>  
    <div class='text-center'></div>";
  } ?>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Old Password: </label>
    <input type="password" class="form-control" name="oldPassword" id="formControlInput" required>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">New Password: </label>
    <input type="password" class="form-control" name="newPassword" id="formControlInput" required>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Confirm Password: </label>
    <input type="password" class="form-control" name="newPasswordConfirm" id="formControlInput" required>
  </div>


  <hr>
  <div class="my-2">
    <input type="submit" value="Update" class="btn btn-warning w-100">
  </div>
  </div>
  </div>
</form>
<div class="my-5 "></div>
</div>
</div>










<?php require_once 'include/footers.php' ?>