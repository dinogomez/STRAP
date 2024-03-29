<?php require_once 'include/headers.php' ?>
<style>
  body {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1053%26quot%3b)' fill='none'%3e%3cpath d='M1760.403%2c852.19C1795.41%2c852.163%2c1825.763%2c830.96%2c1844.003%2c801.08C1863.148%2c769.718%2c1871.833%2c730.9%2c1854.082%2c698.728C1835.822%2c665.634%2c1798.132%2c647.307%2c1760.403%2c649.567C1726%2c651.628%2c1701.01%2c678.733%2c1684.337%2c708.897C1668.327%2c737.862%2c1661.066%2c771.975%2c1676.583%2c801.207C1693.017%2c832.165%2c1725.353%2c852.217%2c1760.403%2c852.19' fill='rgba(244%2c 160%2c 88%2c 1)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1187.3542812560172 804.9238152467552L1157.4007228144226 994.0431402272811 1456.0564895060088 944.4138153994102z' fill='rgba(15%2c 157%2c 88%2c 1)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M657.189025291558-29.427695558465494L425.1282296030715-87.28695028567523 367.2689748758617 144.77384540281125 599.3297705643482 202.633100130021z' fill='rgba(219%2c 68%2c 88%2c 1)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M-137.9914432885307 571.7778854127321L-39.07325912600719 724.0985314887606 113.24738695002131 625.1803473262371 14.32920278749782 472.85970125020856z' fill='rgba(66%2c 133%2c 244%2c 1)' class='triangle-float2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1053'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
    background-size: cover;
    background-repeat: no-repeat;


  }
</style>


<div class="container">
  <div class="mx-5 px-5">
    <?php require_once 'include/nav-super-dash.php' ?>
    <?php
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';
    ?>
    <?php

    if (isset($_COOKIE['reportStatus'])) {
      echo "<div class='alert alert-success text-center mb-3 mt-1' role='alert'>
             <strong>" . $_COOKIE['reportStatus'] . "</strong>.
            </div>  <div class='text-center'>
          </div>";
    }
    if (isset($_COOKIE['duplicateNotify'])) {
      echo "<div class='alert alert-warning text-center mb-3 mt-1' role='alert'>
             <strong>" . $_COOKIE['duplicateNotify'] . "</strong>.
            </div>  <div class='text-center'>
          </div>";
    }

    ?>
    <div class="container">
      <hr>
      <div class="container w-75 bg-glass p-3">
        <form action="/create-admin" method="POST">
          <div class="my-2">
            <div class="text-center">
              <h5 class="font-rubik">👮🏻‍♂️ Admin</h5>

            </div>
            <hr>
            <?php

            if (isset($_COOKIE['errorRegister'])) {
              echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
          <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>

            " . $_COOKIE['errorRegister'] . "
          </div>  
          <div class='text-center'></div>";
            }
            if (isset($_COOKIE['successRegister'])) {
              echo "<div class='alert alert-success text-center mb-3 mt-1' role='alert'>
          <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>

            " . $_COOKIE['successRegister'] . "
          </div>  
          <div class='text-center'></div>";
            } ?>
            <label for="formControlInput" class="form-label">Username:</label>
            <input type="text" class="form-control" name="adminUsername" id="formControlInput" required>
          </div>
          <div class="my-2">
            <label for="formControlInput" class="form-label">Password: </label>
            <input type="password" class="form-control" name="adminPassword" id="formControlInput" required>
          </div>
          <hr>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary w-25">Add</button>

          </div>
        </form>
      </div>

      <div class="container w-75 bg-glass p-3 mt-3">
        <form action="/create-device" method="POST">
          <div class="my-2">
            <div class="text-center">
              <h5 class="font-rubik">🧭 Device</h5>

            </div>
            <hr>
            <?php

            if (isset($_COOKIE['errorRegisterDevice'])) {
              echo "<div class='alert alert-danger text-center mb-3 mt-1' role='alert'>
          <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>

            " . $_COOKIE['errorRegisterDevice'] . "
          </div>  
          <div class='text-center'></div>";
            }
            if (isset($_COOKIE['successRegisterDevice'])) {
              echo "<div class='alert alert-success text-center mb-3 mt-1' role='alert'>
          <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>

            " . $_COOKIE['successRegisterDevice'] . "
          </div>  
          <div class='text-center'></div>";
            } ?>

            <label for="formControlInput" class="form-label">Device ID:</label>
            <input type="text" class="form-control" name="deviceID" id="formControlInput" required>
          </div>
          <hr>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary w-25">Add</button>

          </div>
        </form>
      </div>
    </div>



  </div>

</div>

<?php require_once 'include/footers.php' ?>