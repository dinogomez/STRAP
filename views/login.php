<?php require_once 'include/headers.php'?>

<?php 
  if(!isset($_SESSION)) 
  { 
      session_start(); 
     
  } 
  if(isset($_SESSION['login_error']) && $_SESSION['login_error']){
      echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
                         '<strong>".$_SESSION['login_error']."</strong>', Try Again.
                        </div>  <div class='text-center'>
                      </div>";
  }
  ?>

<div class="container col-5 mt-3 p-4 shadow">
  <form action="/process-login.php" novalidate="" method="POST">

    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" name="password">
      </div>
    </div>
    
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Sign-in</button>
    </div>
    <div class="text-center">Create an account -  <a href="/register">Register</a></div>
  </form>
</div>
<?php require_once 'include/footers.php'?>
