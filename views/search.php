<?php require_once 'include/headers.php'; ?>
<style>
  body {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1600' height='900' preserveAspectRatio='none' viewBox='0 0 1600 900'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1280%26quot%3b)' fill='none'%3e%3cpath d='M1411.4374699304606 495.7707479551007L1423.1729426294557 361.6336812079584 1216.0996061592446 411.0990055330369z' fill='rgba(66%2c 133%2c 244%2c 1)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1349.0778927701813 899.3632287440821L1524.9657955942641 905.6732046235603 1455.1181769070379 768.589534403492z' fill='rgba(219%2c 68%2c 55%2c 1)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M131.689%2c431.76C182.461%2c431.078%2c219.476%2c389.65%2c244.716%2c345.59C269.767%2c301.859%2c287.961%2c248.271%2c261.3%2c205.503C235.595%2c164.268%2c180.208%2c161.631%2c131.689%2c164.281C88.841%2c166.621%2c47.665%2c182.328%2c24.48%2c218.437C-0.757%2c257.742%2c-7.697%2c306.963%2c13.278%2c348.699C36.482%2c394.87%2c80.02%2c432.454%2c131.689%2c431.76' fill='rgba(219%2c 68%2c 55%2c 0.9)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M296.192%2c557.075C316.147%2c557.146%2c334.656%2c547.913%2c345.759%2c531.332C358.409%2c512.441%2c365.391%2c488.939%2c355.535%2c468.452C344.437%2c445.384%2c321.743%2c426.736%2c296.192%2c428.298C272.313%2c429.758%2c258.509%2c453.418%2c248.212%2c475.013C239.604%2c493.065%2c237.134%2c513.718%2c247.228%2c530.983C257.233%2c548.095%2c276.37%2c557.005%2c296.192%2c557.075' fill='rgba(15%2c 157%2c 88%2c 1)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1280'%3e%3crect width='1600' height='900' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");

    background-size: cover;
    background-repeat: no-repeat;


  }
</style>
<div class="container">


  <div class="mx-5 px-5">

    <?php

    include_once 'include/nav-search.php';

    ?>
    <div class="container text-center my-5  ">
      <h1 class=" display-4 fw-bolder lh-sm-1">Search Pets🔎</h1>

    </div>
    <div class="container w-100">
      <form class="d-flex my-2" action="/search" method="GET" method="GET">
        <div class="input-group me-2">

          <?php if (isset($_GET['id'])) { ?>
            <input type="text" class="form-control" name="id" value='<?php echo $_GET['id'] ?>' placeholder="Pet Unique Id" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <?php } else { ?>
            <input type="text" class="form-control" name="id" placeholder="Pet Unique Id" aria-label="Recipient's username" aria-describedby="basic-addon2">

          <?php } ?>
          <input class="input-group-text btn btn-dark w-25" type="submit" value="Search" id="basic-addon2">
        </div>
      </form>
      <hr>

      <?php
      if (isset($_COOKIE['duplicateReport'])) {
        echo "<div class='alert alert-danger text-center mb-3' role='alert'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>

                       " . $_COOKIE['duplicateReport'] . ", Try Again.
                      </div>  <div class='text-center'>
                    </div>";
      }


      if (isset($_COOKIE['reportStatus'])) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>

    " . $_COOKIE['reportStatus'] . "
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
      }
      include 'server/process-pet-search.php';


      ?>
    </div>


    <!-- Footer -->
    <!-- NAV -->
    <!-- MAIN CONTAINER -->
  </div>


</div>


<?php require_once 'include/footers.php' ?>