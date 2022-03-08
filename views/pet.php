<?php require_once 'include/headers.php';?>
<?php include_once 'include/nav-pet.php';?>
<?php require_once 'server/process-protect-page.php'?>

<div class="container  my-3">
  <a href="/pet-add" class="btn btn-md w-25 shadow btn-outline-primary">Add Pet</a>
</div>
<hr>

 <?php 
 include 'server/process-retrieve.php';

 if(isset($_SESSION['pets'])){
   
   ?>
  <div class="container-fluid w-100">




<?php 

include 'server/process-pet-retrieve.php';


?>





</div>



<?php } else {

    echo "<div class='alert alert-dismissible alert-info'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Info:'><use xlink:href='#info-fill'/></svg>

    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
    It seems you don't have any pets registered yet. Try adding one using the <strong>Add Pet</strong> button above!

  </div>";
  
}?>
</div>
</div>


<?php require_once 'include/footers.php'?>
