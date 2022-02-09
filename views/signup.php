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
              <form action="#!">
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
                    <input type="email" minlength="4" autocomplete="off" required name="Address" id="Address" class="form-control" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="text" minlength="4" autocomplete="off" required name="password" id="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="confirm-password" class="sr-only">Confirm Password</label>
                    <input type="text" minlength="4" autocomplete="off" required name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm Password">
                  </div>
                  <input name="Create my Account" minlength="4" autocomplete="off" required id="login" class="btn btn-block login-btn mb-4" type="button" value="Create my Account">
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