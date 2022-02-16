<?php require_once 'include/headers.php'?>


    
        
<?php
   session_destroy();
?>


<div class="alert alert-dismissible alert-danger text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Warning!</strong> you are running on build <a href="#" class="alert-link">DEV/PreRelease</a>.
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
        <button class="btn btn-outline-info my-2 my-sm-0 px-5" type="submit">Login</button>
      </form>
    </div>
  </div>
</nav>
<div class="container col-12">

<div class="py-5 mt-5">
<p class="fs-5 fw-normal m-0">👋 Welcome to,</p>

        <!-- <h1 class="display-6 fw-bold"><span class="text-info">S</span>pecialized <span class="text-info">TRA</span>cker for <span class="text-info">P</span>ets (STRAP)</h1> -->
        <h1 class="col-md-9 display-4 fw-bold lh-sm-1">Specialized Tracker For Pets</h1>
        <!--  -->
        <p class="col-md-8 fontsize-sh text-justify">It aims to provide real-time data location to the pets of the owner by using a Global Positioning System (GPS) collars. Also, it is a platform for pet owners to store their pet’s identification information.</p>
        <a class="col-md-8 fs-5" href="/about">Read More</a>
</div>
</div>


<!-- NAV -->
<!-- MAIN CONTAINER -->
</div>


</div>

   
<?php require_once 'include/footers.php'?>