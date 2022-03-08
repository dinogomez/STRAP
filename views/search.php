<?php require_once 'include/headers.php';?>

<div class="container">


<div class="mx-5 px-5">

<?php 

include_once 'include/nav-search.php';

?>
<div class="container text-center my-5  ">
<h1 class=" display-4 fw-bolder lh-sm-1">Search Pets! 🔎</h1>

</div>
<div class="container w-100">
<form class="d-flex my-2" action="/search" method="GET" method="GET">
          <div class="input-group me-2">

        <?php if(isset($_GET['id'])){ ?>
          <input type="text" class="form-control" name="id" value='<?php echo $_GET['id'] ?>'  placeholder="Pet Unique Id" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <?php } else {?>
            <input type="text" class="form-control" name="id"  placeholder="Pet Unique Id" aria-label="Recipient's username" aria-describedby="basic-addon2">

            <?php }?>
        <input class="input-group-text btn btn-success " type="submit" value="Search" id="basic-addon2">
      </div>        
      </form>
<hr>
<?php
include 'server/process-pet-search.php';


?>
</div>


  <!-- Footer -->
<!-- NAV -->
<!-- MAIN CONTAINER -->
</div>


</div>


<?php require_once 'include/footers.php'?>
