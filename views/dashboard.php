<?php require_once 'include/headers.php';

echo "<h1 class='display-1'>Hi, ". $_SESSION['email']."</h1>";

?>

<form action="/process-logout.php" novalidate="" method="POST">

  <button type="submit" class="btn btn-primary">Logout</button>
</form>

<?php require_once 'include/footers.php'?>
