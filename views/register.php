<?php require_once 'include/headers.php'?>
<div class="container col-5 mt-3 p-4 shadow">
<div class="text-center">
    <h1>./registration</h1>
    <hr>
</div>
<div class="mt-3">
    <?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
       
    } 
    if(isset($_SESSION['register_duplicate']) && $_SESSION['register_duplicate']){
        echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
                          Duplicate Username '<strong>".$_SESSION['register_username']."</strong>', Try Again.
                          </div>  <div class='text-center'>
                        </div>";
    }
    
    ?>
    <form action="/process-registration.php" method="POST">
    <div class="row mb-3">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username" required />
        </div>
    </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email" required />
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="address" required />
    </div>
</div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password" required />
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password" required />
    </div>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form></div>

</div>
<?php require_once 'include/footers.php'?>