<?php require_once 'include/headers.php';


?>

<div class="container">
  <h1 class="fs-5 fs-bold">Currently in the Dashboard <span class="text-info">[DEV/PreRelase]</span></h1>

  <div class="my-4">
  <?php 
  echo "<h1 class='display-4'>Hi, ". $_SESSION['username']."</h1>";
  ?>
  </div>
</div>


<?php require_once 'include/footers.php'?>
