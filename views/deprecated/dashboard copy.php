<?php require_once 'include/headers.php';

?>

<div class="container">







</div>

<div align="center">
  <?php 
    if(!isset($_SESSION['username'])){
      ?>
        <h3> Log in to access data.</h3>
        <?php 
    }else {
        ?>
        <h3> Welcome <?php echo $_SESSION['username']; ?> </h3>
        <?php
    }      
  ?>
</div>




<div class="text-center">Go to User Profile <a href="/user-profile">User Profile</a></div>
<form action="/process-logout.php" novalidate="" method="POST">


<?php require_once 'include/footers.php'?>
