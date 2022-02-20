<?php require_once 'include/headers.php';

echo "<h1 class='display-1'>Hi, ". $_SESSION['email']."</h1>";

?>

<div align="center">
  <?php 
    if(!isset($_SESSION['email'])){
      ?>
        <h3> Log in to access data.</h3>
        <?php 
    }else {
        ?>
        <h3> Welcome <?php echo $_SESSION['email']; ?> </h3>
        <?php
    }      
  ?>
</div>

<div class="text-center">Go to User Profile <a href="/user-profile">User Profile</a></div>
<form action="/process-logout.php" novalidate="" method="POST">

  <button type="submit" class="btn btn-primary">Logout</button>
</form>

<?php require_once 'include/footers.php'?>
