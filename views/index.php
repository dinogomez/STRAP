<?php require_once 'include/headers.php' ?>

<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

<style>
  body {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1185%26quot%3b)' fill='none'%3e%3cpath d='M2070.06%2c1100.205C2167.364%2c1096.535%2c2258.847%2c1048.87%2c2305.924%2c963.633C2351.571%2c880.985%2c2334.055%2c783.911%2c2291.223%2c699.769C2242.952%2c604.942%2c2176.122%2c508.832%2c2070.06%2c500.288C1951.539%2c490.74%2c1835.056%2c554.494%2c1777.172%2c658.358C1720.613%2c759.845%2c1737.033%2c885.83%2c1801.225%2c982.669C1859.141%2c1070.041%2c1965.31%2c1104.156%2c2070.06%2c1100.205' fill='rgba(66%2c 133%2c 244%2c 1)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M2.0565476666720173 617.8305822764671L-133.99468702556845 785.8398651409979 34.01459583896228 921.8910998332383 170.06583053120278 753.8818169687077z' fill='rgba(15%2c 157%2c 88%2c 1)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M944.5259820393588 223.2697603458331L1171.6667910273982 400.7316096012961 1349.128640282861 173.59080061325682 1121.9878312948217-3.871048642206148z' fill='rgba(244%2c 160%2c 38%2c 1)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M440.0912091892734 326.1338624754709L187.72094907078613 168.43542159404342 282.3927683078459 578.5041225939582z' fill='rgba(219%2c 68%2c 88%2c 1)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1185'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");

    background-size: cover;
    background-repeat: no-repeat;


  }
</style>




<!-- && $_SESSION['errorRegister'] = true) -->

<!-- 
<div class="alert alert-dismissible alert-info text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Information!</strong> you are running on build <a href="https://github.com/dinogomez/htdocs/tree/DEV/PreRelease_Branch" class="alert-link">DEV/PreRelease</a>.
</div> -->


<div class="container">


  <div class="mx-5 px-5">

    <?php require_once 'include/nav-index.php'; ?>

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
              <?php

              if (isset($_COOKIE['loginError']) && $_COOKIE['loginError']) {
                echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
                                   '<strong>" . $_COOKIE['loginError'] . "</strong>', Try Again.
                                  </div>  <div class='text-center'>
                                </div>";
              }
              ?>

              <form action="/process-login" method="post">
                <div class="my-3">
                  <label for="formControlInput" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="usernameLogin">
                </div>
                <div class="my-3">
                  <label for="formControlInput" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="passwordLogin" autocomplete="off">
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="formCheckDefault">
                  <label class="form-check-label" for="formCheckDefault">Remember Me</label>
                </div>
                <hr>
                <button type="submit" class="mt-2 btn btn-md w-100 btn-dark shadow">Login</button>
              </form>
              <div class="text-center mt-3 ">
                <a href="" class="text-primary nav-link">Forgot Password?</a>
              </div>
            </div>
          </div>

          <div class="modal-footer justify-content-center">
            <span class="">Dont have an account? <a class="text-decoration-none" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">Create Account</a></span>
          </div>
        </div>
      </div>
    </div>

    <?php



    ?>
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





              <?php




              if (isset($_COOKIE['errorRegister'])) {
                echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
                      " . $_COOKIE['errorRegister'] . "
                    </div>  
                    <div class='text-center'></div>";
              }


              ?>
              <form action="/process-registration" method="post">

                <div class="my-3">
                  <label for="formControlInput" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="username" require>
                </div>

                <div class="my-3">
                  <label for="formControlInput" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" require>
                </div>

                <div class="my-3">
                  <label for="formControlInput" class="form-label">Address</label>
                  <input type="text" name="address" class="form-control" id="address" require>
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
                <button type="submit" class="mt-2 btn btn-md w-100 btn-dark shadow">Create</button>
              </form>
            </div>
          </div>

          <div class="modal-footer justify-content-center">
            <span class="">Already have an account? <a class="text-decoration-none" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign In!</a></span>
          </div>

        </div>
      </div>
    </div>


    <div class="mx-3 d-flex justify-content-end bg-glass">
      <div class="p-5 mt-3 mb-3">

        <div class="text-center">
          <div class="d-flex ">
            <div class="px-2 me-4 ">

            </div>

            <div class="">

            </div>
          </div>

          <h1 class=" display-3 font-rubik fw-bolder lh-1">Specialized Tracker For Pets</h1>

        </div>
        <div class="d-flex">
          <div class="px-2 me-4 "></div>

          <h1 class="fs-6 font-rubik fw-bolder lh-1 text-black fst-italic">STRAP™ is brought to you by<span class="text-primary fs-6  p-1">GAMECHANGERS</span></h1>

        </div>
        <div class="d-flex  mt-2">
          <div class="px-2 me-4 "></div>

          <div class="">
            <p class="fs-5 text-justify text-black lh-base">A web-based pet gps tracking platform which offers you the user, the capability to locate and track your pets with ease through our collar. </p>

          </div>
          <div class="px-2 me-4 "></div>

        </div>
        <div class="mx-5 ">
          <hr>
          <a class="fs-5 btn btn-dark btn-sm" href="/about">Read More</a>

        </div>
      </div>
    </div>



  </div>
  <div class=" p-1"></div>
  <div class="d-flex justify-content-center m-4 p-4">
    <img src="assets/img/pet-look.png" class=" img-ledge shadow-md" style="width: 60%;" alt="">
  </div>

  <!-- Footer -->
  <!-- NAV -->
  <!-- MAIN CONTAINER -->
</div>

</div>


<?php require_once 'include/footers-index.php' ?>