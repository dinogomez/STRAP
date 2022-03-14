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
    <?php require_once 'include/nav-admin-dash.php' ?>

    <?php
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    ?>
    <hr>

    <div class="d-flex justify-content-between bg-glass p-3 w-100 border align-items-center mb-2">
      <div>
        <h1 class="fs-5">REPORTS 🚩</h1>
      </div>
      <div class="input-group " style="width: 20%;">
        <div class="input-group-text"><i class="fa-solid fa-filter"></i></div>
        <select onchange="val()" id="select_id" class="form-control" name="filter" aria-label="Small select">
          <option value="all">All</option>
          <option value="open">Open</option>
          <option value="inprog">In Progress</option>
          <option value="acknowledged">Acknowledged</option>
          <option value="closed">Closed</option>
        </select>
      </div>

    </div>

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

    <table class="table table-striped bg-glass">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Reason</th>
          <th scope="col">User</th>
          <th scope="col">Pet</th>
          <th scope="col">Status</th>
          <th scope="col">Time</th>
          <th scope="col">Operation</th>

        </tr>
      </thead>
      <tbody id="reportBody">


      </tbody>
    </table>
  </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
  d = "all";

  function val() {
    d = document.getElementById("select_id").value;
  }

  function loadDoc() {

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("reportBody").innerHTML = this.responseText;


    };

    console.log(d);
    xhttp.open("GET", "/report-retrieve?filter=" + d, true);
    xhttp.send();
    setTimeout(loadDoc, 1000);
  }

  $(document).ready(function() {
    loadDoc();
  });
</script>
<?php require_once 'include/footers.php' ?>