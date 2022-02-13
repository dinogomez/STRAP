<?php require_once 'include/headers.php'?>


    
        
<?php
   session_destroy();
?>


<section class="jumbotron bg-image">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0);"></div>
        <nav class="navbar navbar-expand-xl navbar-light">
            <div class="navbar-container container-fluid">
              <a class="navbar-brand" href="#">
                <img src="../assets/img/strap logo.png" alt="">  STRAP</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo2" aria-controls="navbarTogglerDemo2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse show" id="navbarTogglerDemo2">
                <ul class="navbar-nav  me-auto mb-2 mb-xl-0">
                  <li class="nav-item">
                    <a class="nav-item-link nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-item-link nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-item-link nav-link" href="#">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-item-link nav-link" href="#">Contact Us</a>
                  </li>
                </ul>
                 
              </div>
              <form class="d-flex">
                    <button class="nav-button btn btn-light me-2" type="button"><a class="login-button" href="/signin">Log In</a></button>
                    <a class="me-2 btn btn-primary" href="/signup" role="button">Sign Up</a>
                </form>
            </div>
          </nav>

        <div class="mt-4 p-5 rounded jumbotron-container">
            <p class="what-we-do">What We Do</p>
            <h1 class="jumbotron-header">A Platform Build For Pets</h1>
        </div>
    </section>


    <section class=" row about-us-section">
        <div class="col mt-4 p-5 rounded jumbotron-container aboutus-container">
            <p class="aboutus">About Us</p>
            <h1 class="aboutus-header">Specialized TRAcker for Pets (STRAP)</h1>
            <p class="aboutus-desc"> It aims to provide real-time data location to the pets of the owner by using a Global Positioning System (GPS) collars.</p>
     
            <p class="aboutus-desc">Also, it is a platform for pet owners to store their pet’s identification information.</p>
            <br>
            
            <button class="about-button btn btn-sm btn-outline-light" type="button">Learn More</button>
        </div>
        <div class="col">
            <img class="about-us-img"  src="../assets/img/yellow-lab.png" alt="">
        </div>
    </section>

    <section class="features-section">
        <h1 class="feature-header">STRAP'S OBJECTIVES</h1>
        <div class="box-container">
            <div class="box">
                <img class="figure" src="../assets/icons/gps-img.png" alt="">
                <h5 class="box-header">GPS Collar</h5>
                <p>To build a GPS collar using Arduino for real-time data location of the pets.
                </p>
            </div>
            <div class="box">
                <img class="figure"  src="../assets/icons/web-img.png" alt="">
                <h5 class="box-header">Web Application</h5>
                <p>To create a web application that stores the pet’s identification information. </p>
            </div>
            <div class="box">
                <img class="figure" src="../assets/icons/qr-img.png" alt="">
                <h5 class="box-header">Quick Response Code</h5>
                <p>To allow users to access the pet’s personal information using a Quick Response (QR) code from the specialized collar.
                </p>
            </div>
        </div>
        <div class="button-feature">
            <button class="btn btn-sm btn-outline-light" type="button">Learn More</button>
        
    </section>







    <!-- Footer -->
<footer class="footer-section text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
  
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
                <img src="img/strap logo.png" alt="">
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
   
<?php require_once 'include/footers.php'?>