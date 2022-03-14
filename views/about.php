<?php require_once 'include/headers.php' ?>

<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

<style>
  body {

    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1017%26quot%3b)' fill='none'%3e%3cpath d='M1145.447%2c86.793C1184.277%2c89.617%2c1224.054%2c74.477%2c1244.49%2c41.338C1265.855%2c6.693%2c1265.541%2c-38.222%2c1243.733%2c-72.589C1223.262%2c-104.849%2c1183.654%2c-114.551%2c1145.447%2c-114.74C1106.817%2c-114.931%2c1063.73%2c-107.608%2c1045.465%2c-73.569C1027.781%2c-40.611%2c1048.776%2c-3.195%2c1068.565%2c28.544C1086.797%2c57.787%2c1111.077%2c84.293%2c1145.447%2c86.793' fill='rgba(219%2c 68%2c 88%2c 1)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M2047.1157649844076 564.0307424562953L1910.0070531757897 426.9220306476773 1772.8983413671715 564.0307424562953 1910.0070531757897 701.1394542649134z' fill='rgba(15%2c 157%2c 88%2c 1)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M122.4467664402452 572.579515805738L-13.792615537612221 774.5627059004074 188.1905745570572 910.8020878782648 324.4299565349146 708.8188977835954z' fill='rgba(66%2c 133%2c 244%2c 1)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1167.2213111257288 322.9604314337395L1044.7918920779055 535.0144055657106 1256.8458662098765 657.4438246135339 1379.2752852576998 445.3898504815629z' fill='rgba(15%2c 157%2c 88%2c 1)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1017'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
    background-size: cover;
    background-repeat: no-repeat;


  }
</style>





<div class="container">


  <div class="mx-5 px-5">



    <?php require_once 'include/nav-about.php'; ?>

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
            <div class="card-body bg-glass rounded-0">
              <h5 class="card-title">GPS Collar 🐕</h5>
              <p class="card-text">To build a GPS collar using Arduino for real-time data location of the pets.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-gradient-two">
            <div class="card-body bg-glass rounded-0">
              <h5 class="card-title">Web Application 🌐</h5>
              <p class="card-text">To create a web application that stores the pet’s identification information.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-gradient-three">
            <div class="card-body bg-glass rounded-0">
              <h5 class="card-title">Quick Response Codes 🔗</h5>
              <p class="card-text">To embed the pet's personal information for identification on the QR Code.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <p class="text-justify fs-6 lh-lg font-rubik">
          The purpose of this project is to develop an application that will help track and monitor pets, including the ability to see the basic information of other pets through the use of QR scanning on the collar. Instead of posting banners and social media posts when the user’s pet is lost. The user can now refer to the web application where he can track the current location via GPS. When a pet is lost, a bystander can scan the QR code to see the pet’s details and also the owner’s details like name and contact number to help with its return.
        </p>
      </div>
    </div>
    <hr>
    <div class="container my-5">

      <h1 class="display-6 fw-bold">Our Team 👨🏼‍💻</h1>
      <p class="fs-5">&nbspThe following individuals are the pet lovers, developers and creators of STRAP.</p>

      <div class="container my-4">
        <div class="d-flex border p-3 my-2 bg-glass">
          <img src="assets/img/pol_avatar.png" alt="Dino Gomez" class="shadow flex-shrink-0 me-4 mx-2 rounded" style="width:100px;height:100px;">
          <div>
            <h4 class="m-0 lh-sm">Dino Paulo Gomez</h4>
            <small class="text-muted">Technical Lead, Backend and Hardware Developer</small>
            <p class="lh-lg font-rubik">I learned a lot and enjoyed building this project with my team. As avid pet lovers we hope to improve the community.</p>
          </div>
        </div>
        <div class="d-flex border p-3 my-2 bg-glass">
          <img src="assets/img/leonard_avatar.jpeg" alt="Leonard Rada" class="shadow flex-shrink-0 me-4 mx-2 rounded" style="width:100px;height:100px;">
          <div>
            <h4 class="m-0 lh-sm">John Leonard Rada</h4>
            <small class="text-muted">Backend and Database Developer</small>
            <p class="lh-lg font-rubik">It's always hard in the beginning, but it's going to be worth it. This project will be very memorable.</p>
          </div>
        </div>
        <div class="d-flex border p-3 my-2 bg-glass">
          <img src="assets/img/owen_avatar.png" alt="Owen Clamor" class="shadow flex-shrink-0 me-4 mx-2 rounded" style="width:100px;height:100px;">
          <div>
            <h4 class="m-0 lh-sm">Owen Jorelle Clamor</h4>
            <small class="text-muted">Frontend Developer and Mock Designer</small>
            <p class="lh-lg font-rubik">This was a great opportunity for me to contribute to something for the betterment of pet ownership.</p>
          </div>
        </div>
        <div class="d-flex border p-3 my-2 bg-glass">
          <img src="assets/img/francis_avatar.jpeg" alt="Francis Parreñas" class="shadow flex-shrink-0 me-4 mx-2 rounded" style="width:100px;height:100px;">
          <div>
            <h4 class="m-0 lh-sm">Francis Geofrey Parreñas</h4>
            <small class="text-muted">Frontend Lead Developer</small>
            <p class="lh-lg font-rubik">This project will have a special place in my heart.Friendship was the foundation. Built by memorable experiences.
            </p>
          </div>
        </div>


      </div>
      <?php require_once 'include/footers-index.php' ?>