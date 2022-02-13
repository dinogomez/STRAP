<?php require_once 'include/headers.php'?>


<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/img/pet-photo.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/img/strap-logo.png" alt="logo" class="logo">     
              </div>
              <p class="login-card-description">Get Started</p>
              <?php 
      if(!isset($_SESSION)) { 
          session_start(); 
      } 

      if(isset($_SESSION['register_duplicate']) && $_SESSION['register_duplicate']){
          echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
                  Duplicate Username '<strong>".$_SESSION['register_username']."</strong>', Try Again.
                </div>  
                <div class='text-center'></div>";
      } elseif (isset($_SESSION['register_username'])){
          echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
                  Name must contain only alphabets and space. Try Again.
                </div>  
                <div class='text-center'></div>";
      } elseif (isset($_SESSION['register_email'])){
          echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
                  Please Enter Valid Email ID. Try Again.
                </div>  
                <div class='text-center'></div>";
      } elseif (isset($_SESSION['register_minimum'])){
          echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
                  Password must be minimum of 8 characters. Try Again.
                </div>  
                <div class='text-center'></div>";
      } elseif (isset($_SESSION['register_confirm'])){
          echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
                  Password and Confirm Password doesn't match. Try Again.
                </div>  
                <div class='text-center'></div>";
      }

      ?>
              <form action="/process-registration" method="POST">
                  <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" minlength="4" autocomplete="off" required name="username" id="username" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label for="address" class="sr-only">Address</label>
                    <input type="text" minlength="4" name="address" id="Address" class="form-control" placeholder="Address" required>
                  </div>
                  <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" minlength="4" autocomplete="off"  name="password" id="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <label for="confirm-password" class="sr-only">Confirm Password</label>
                    <input type="password" minlength="4" autocomplete="off"  name="cpassword" id="confirm-password" class="form-control" placeholder="Confirm Password" required>
                  </div>
                  <button type="submit" class="btn btn-block login-btn mb-4">Create my Account</button>

                </form>
                <p>Already have an account?</p>
                <a href="/signin" class="text-reset"><h4 id="sign-in">SIGN-IN HERE</h4></a>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php require_once 'include/footers.php'?>