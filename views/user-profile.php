<?php require_once 'include/headers.php'?>
<?php require_once 'server/db/connection.php'?>

<section >
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
              <div class="username-container">
                   <span>Welcome, </span>
                   <span><?php echo $_SESSION['username'];?></span>
                 </div>
                 <div class="profile-pic">
                     <div>
                       <a href=""><img src="../assets/img/strap logo.png" alt="user profile pic"></a>
                     </div>
                     
                 </div>
                 <form action="/process-logout.php" method="post">
                  <button class="btn btn-sm btn-warning" type="submit">Sign Out</button>
                 </form>
            </div>
          </nav>



       <section class="main-section">
           
         <div class="form-container">
           
             <h2 class="forms-header"><img class="gear-icon" src="../assets/img/settings-icon.png" alt="">Profile Management</h2>
             <div class="profile-container">
               <a  href=""><img class="profile-pic" src="../assets/img/strap logo.png" alt="user profile pic"></a>
             </div>
             <br>
             
             <form action="/process-user-profile.php" method="POST" enctype="multipart/form-data">

                <?php 

                    $currentUser = $_SESSION['username'];
                    $sql = "SELECT * FROM users WHERE username = '$currentUser'";
                    $result = mysqli_query($conn,$sql); 
                    $count = mysqli_num_rows($result);

                    if ($result) {
                      if($count > 0) {
                        while ($row = mysqli_fetch_array($result)){
                          // Getting the session values
                          // print_r($row);

                          ?>
                            <div class="row mb-3">
                              <label for="username" class="col-sm-2 col-form-label">User Image</label>
                              <div class="col-sm-10">
                                <input type="file" id="userImage" name="userImage"><br><br>
                              </div>
                            </div>

                            <div class="row mb-3">
                              <label for="username" class="col-sm-2 col-form-label">Username</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="updateUsername" name="updateUsername" value="<?php echo $row['username']; ?>" />
                              </div>
                            </div>

                            <div class="row mb-3">
                              <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="updateAddress" name="updateAddress" value="<?php echo $row['address']; ?>" />
                              </div>
                            </div>

                            <div class="row mb-3">
                              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="updatePassword" name="updatePassword" />
                              </div>
                            </div>
                            <div class="text-center">
                              <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                            </div>
                          <?php
                        }
                      }
                    }
                ?>

            </form>
         </div>
        
       </section>

    <!-- Footer -->
<footer class="footer-section text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
  
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