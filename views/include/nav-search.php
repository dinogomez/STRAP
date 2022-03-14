<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <i class="navbar-brand bg-morph text-dark p-2 rounded shadow-lg fa-solid fa-paw"></i>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <?php if (isset($_SESSION['isLoggedIn'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="/">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pet">Pet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tracker">Tracker</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active disabled" href="/search">Search</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="/">Home
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active disabled" href="/search">Search</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Links</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="https://github.com/dinogomez/htdocs">Github <i class="fa-brands fa-github fa-lg"></i></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/document">Research Document <i class="fa-solid fa-file-lines fa-lg text-success"></i></a>
            </div>
          </li>
        <?php
        }
        ?>
      </ul>
      <div class="d-flex">
        <form class="d-flex" action="/search" method="GET" method="GET">
          <div class="input-group me-2">
            <input type="text" class="form-control" name="id" placeholder="Pet Unique Id" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <input class="input-group-text btn btn-dark shadow-lg" type="submit" value="Search" id="basic-addon2">
          </div>
        </form>

        <?php if (isset($_SESSION['isLoggedIn'])) { ?>
          <div class="nav-item dropdown">
            <a class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">👋Hi, <?php echo $_SESSION['username'] ?></a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Edit Profile</a>
              <a class="dropdown-item" href="#">Request User Report</a>
              <!-- <a class="dropdown-item" href="#"></a> -->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </div>
        <?php } else { ?>

          <a class="btn btn-dark my-2 my-sm-0 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
        <?php
        }
        ?>
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


      </div>
    </div>
  </div>
</nav>