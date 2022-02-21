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

<div class="alert alert-dismissible alert-info text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Information!</strong> you are running on build <a href="https://github.com/dinogomez/htdocs/tree/DEV/PreRelease_Branch" class="alert-link">DEV/PreRelease</a>.
</div>


<div class="container">

<div class="mx-5 px-5">
  <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid fs-5">
    <!-- <a class="navbar-brand" href="#">STRAP</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Features</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">GPS</a>
            <a class="dropdown-item" href="#">Pet Collar</a>
            <a class="dropdown-item" href="#">Pet Interaction</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Research Document</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <a class="btn btn-outline-info my-2 my-sm-0 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
      </form>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom: 0 none;">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="text-center">
          <h1 class="display-5 fw-bold">Login</h1>

          </div>
          <hr>
        <form action="/process-login.php" method="post">
        <div class="my-3">
        <label for="formControlInput" class="form-label">Username</label>
        <input type="text" name="username"class="form-control" id="usernameLogin">
        </div>
        <div class="my-3">
        <label for="formControlInput" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="passwordLogin" autocomplete="off">
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="formCheckDefault">
        <label class="form-check-label text-secondary" for="formCheckDefault">Remember Me</label>
      </div>
        <hr>
        <button type="submit" class="mt-2 btn btn-md w-100 btn-info shadow">Login</button>
        </form>
        <div class="text-center mt-3 ">
          <a href="" class="text-primary nav-link">Forgot Password?</a>
        </div>
        </div>
      </div>

      <div class="modal-footer justify-content-center">
          <span class="text-secondary">Dont have an account? <a class="text-decoration-none" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">Create Account</a></span>
      </div>
    </div>
  </div>
</div>

<!-- Register -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom: 0 none;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="text-center">
          <h1 class="display-5 fw-bold">Sign Up!</h1>

          </div>
          <hr>
        <form action="/process-registration.php" method="post">
            
        <div class="my-3">
        <label for="formControlInput" class="form-label">Username</label>
        <input type="text" name="username"class="form-control" id="username" require>
        </div>

        <div class="my-3">
        <label for="formControlInput" class="form-label">Email</label>
        <input type="email" name="email"class="form-control" id="email" require>
        </div>

        <div class="my-3">
        <label for="formControlInput" class="form-label">Address</label>
        <input type="text" name="address"class="form-control" id="address" require>
        </div>

        <div class="my-3">
        <label for="formControlInput" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" require>
        </div>

        <div class="my-3">
        <label for="formControlInput" class="form-label">Confirm Password</label>
        <input type="password" name="cpassword" class="form-control" id="cpassword" require>
        </div>
     
        <hr>
        <button type="submit" class="mt-2 btn btn-md w-100 btn-info shadow">Create</button>
        </form>
        </div>
      </div>

      <div class="modal-footer justify-content-center">
          <span class="text-secondary">Already have an account? <a class="text-decoration-none" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign In!</a></span>
      </div>
    
    </div>
  </div>
</div>

<div class="container col-12">
<div class="py-5 mt-3">
<p class="fs-5 fw-normal m-0">👋 Welcome to,</p>

        <!-- <h1 class="display-6 fw-bold"><span class="text-info">S</span>pecialized <span class="text-info">TRA</span>cker for <span class="text-info">P</span>ets (STRAP)</h1> -->
        <h1 class="col-md-9 display-4 fw-bolder lh-sm-1">Specialized Tracker For Pets</h1>
        <!--  -->
        <p class="col-md-8 fontsize-sh text-justify">It aims to provide real-time data location to the pets of the owner by using a Global Positioning System (GPS) collars. Also, it is a platform for pet owners to store their pet’s identification information.</p>
        <a class="col-md-8 fs-5" href="/about">Read More</a>
</div>
</div>
<hr>
<div class="container my-5">

<h1 class="display-6 fw-bold">Our Objectives ✅</h1>
<p class="fs-5">&nbspThese are the goals we hope to achieve.</p>
<!-- <div class="row row-cols-1 row-cols-md-3 g-3">
  <div class="col-12">
    <div class="card border-gradient-one card-uni" style="min-height:100px;">
      <div class="card-body">
        <h5 class="card-title">Web</h5>
        <p class="card-text">To build a GPS collar using Arduino for real-time data location of the pets.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-gradient-two card-uni" >
    <div class="card-body mx-3">
        <h5 class="card-title">Web Application</h5>
        <p class="card-text">To create a web application that stores the pet’s identification information.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-gradient-three card-uni">
    <div class="card-body mx-3">
        <h5 class="card-title">Quick Response Code</h5>
        <p class="card-text ">To allow users to access the pet’s personal information using a QR code from the   collar.</p>
      </div>
    </div>
  </div>
</div> -->



<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 border-gradient-one">
      <div class="card-body">
        <h5 class="card-title">GPS Collar 🐕</h5>
        <p class="card-text">To build a GPS collar using Arduino for real-time data location of the pets.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-gradient-two">
      <div class="card-body">
        <h5 class="card-title">Web Application 🌐</h5>
        <p class="card-text">To create a web application that stores the pet’s identification information.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-gradient-three">
      <div class="card-body">
        <h5 class="card-title">Quick Response Codes 🔗</h5>
        <p class="card-text">To embed the pet's personal information for identification on the QR Code.</p>
      </div>
    </div>
  </div>
</div>
  <div class="mt-4">
  <p class="text-justify fs-6 lh-lg">
    The purpose of this project is to develop an application that will help track and monitor pets, including the ability to see the basic information of other pets through the use of QR scanning on the collar. Instead of posting banners and social media posts when the user’s pet is lost. The user can now refer to the web application where he can track the current location via GPS. When a pet is lost, a bystander can scan the QR code to see the pet’s details and also the owner’s details like name and contact number to help with its return.
  </p>
  </div>
</div>
<hr>
<div class="container my-5">

<h1 class="display-6 fw-bold">Our Team 👨🏼‍💻</h1>
<p class="fs-5">&nbspThe following individuals are the developers and creators of STRAP.</p>

<div class="container my-4">
<div class="d-flex border p-3 my-2">
    <img src="assets/img/pol_avatar.png" alt="Dino Gomez"
         class="shadow flex-shrink-0 me-4 mx-2 rounded" style="width:100px;height:100px;">
    <div>
        <h4 class="m-0 lh-sm">Dino Paulo Gomez</h4>
        <small class="text-muted">Technical Lead, Backend and Hardware Developer</small>
        <p class="lh-lg">I'm glad that I got to experience building this project where I got to meet and collaborate with other developers.</p>
    </div>
</div>
<div class="d-flex border p-3 my-2">
    <img src="assets/img/leonard_avatar.jpeg" alt="Leonard Rada"
         class="shadow flex-shrink-0 me-4 mx-2 rounded" style="width:100px;height:100px;">
    <div>
        <h4 class="m-0 lh-sm">John Leonard Rada</h4>
        <small class="text-muted">Backend and Database Developer</small>
        <p class="lh-lg">I'm glad that I got to experience building this project where I got to meet and collaborate with other developers.</p>
    </div>
</div>
<div class="d-flex border p-3 my-2">
    <img src="assets/img/owen_avatar.png" alt="Owen Clamor"
         class="shadow flex-shrink-0 me-4 mx-2 rounded" style="width:100px;height:100px;">
    <div>
        <h4 class="m-0 lh-sm">Owen Jorelle Clamor</h4>
        <small class="text-muted">Frontend Developer and Design</small>
        <p class="lh-lg">I'm glad that I got to experience building this project where I got to meet and collaborate with other developers.</p>
    </div>
</div>
<div class="d-flex border p-3 my-2">
    <img src="assets/img/francis_avatar.jpeg" alt="Francis Parreñas"
         class="shadow flex-shrink-0 me-4 mx-2 rounded" style="width:100px;height:100px;">
    <div>
        <h4 class="m-0 lh-sm">Francis Geofrey Parreñas</h4>
        <small class="text-muted">Frontend Lead Developer</small>
        <p class="lh-lg">I'm glad that I got to experience building this project where I got to meet and collaborate with other developers.</p>
    </div>
</div>


</div>


</div>
<div class="my-5 py-5"></div>
<hr>
<footer class="footer-section text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    
  
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            
            <h6 class="text-uppercase fw-bold mb-4">
                <img src="assets/img/strap logo.png" alt="">
              <i class="fas fa-gem me-3"></i>STRAP
            </h6>
            <p>
                aims to provide real-time data location to the pets of the owner by using a Global Positioning System (GPS) collars. 
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Menu
            </h6>
            <p>
              <a href="#!" class="text-reset">Home</a>
            </p>
            <p>
              <a href="#!" class="text-reset">About</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Services</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contact</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Contact
            </h6>
            
            <p>
              <i class="fas fa-envelope me-3"></i>
              STRAP@examplegmail.com
            </p>
            
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
  </footer>
  <!-- Footer -->
<!-- NAV -->
<!-- MAIN CONTAINER -->
</div>


</div>

   
<?php require_once 'include/footers.php'?>