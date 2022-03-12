<?php require_once 'include/headers.php';?>
<?php include_once 'include/nav-track.php';?>
<?php require_once 'server/process-protect-page.php'?>

<style>
  body{

background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='1080' preserveAspectRatio='none' viewBox='0 0 1920 1080'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1327%26quot%3b)' fill='none'%3e%3cpath d='M1150.738390044013-92.89886294691357L1069.9139616862515 72.81577300845558 1235.6285976416204 153.64020136621713 1316.4530259993821-12.07443458915202z' fill='rgba(244%2c 160%2c 88%2c 1)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1802.99%2c1448.568C1904.544%2c1450.003%2c1992.308%2c1383.505%2c2042.28%2c1295.085C2091.404%2c1208.166%2c2099.123%2c1101.226%2c2047.644%2c1015.681C1997.589%2c932.503%2c1900.065%2c896.653%2c1802.99%2c897.447C1707.472%2c898.228%2c1613.264%2c937.096%2c1565.173%2c1019.628C1516.78%2c1102.677%2c1528.523%2c1204.422%2c1575.131%2c1288.486C1623.372%2c1375.496%2c1703.512%2c1447.163%2c1802.99%2c1448.568' fill='rgba(66%2c 133%2c 244%2c 1)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1799.93%2c143.295C1836.433%2c144.612%2c1871.179%2c125.777%2c1889.643%2c94.26C1908.304%2c62.407%2c1908.433%2c22.435%2c1889.192%2c-9.071C1870.697%2c-39.357%2c1835.4%2c-53.745%2c1799.93%2c-52.644C1766.413%2c-51.604%2c1736.205%2c-33.046%2c1719.772%2c-3.815C1703.667%2c24.833%2c1705.046%2c59.309%2c1720.77%2c88.167C1737.259%2c118.429%2c1765.489%2c142.052%2c1799.93%2c143.295' fill='rgba(219%2c 68%2c 88%2c 1)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M351.599%2c618.248C385.241%2c620.124%2c424.341%2c620.226%2c442.056%2c591.565C460.298%2c562.052%2c447.344%2c523.971%2c427.435%2c495.556C410.472%2c471.346%2c381.124%2c463.922%2c351.599%2c462.46C318.259%2c460.81%2c279.159%2c458.991%2c261.539%2c487.343C243.381%2c516.559%2c257.582%2c554.024%2c277.079%2c582.364C293.827%2c606.708%2c322.096%2c616.603%2c351.599%2c618.248' fill='rgba(66%2c 133%2c 244%2c 1)' class='triangle-float3'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1327'%3e%3crect width='1920' height='1080' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
    background-size:cover;
    background-repeat:no-repeat;

    
  }
</style>
<div class="container  my-3">
  <button class="btn btn-md w-25 shadow btn-dark" data-bs-toggle="modal" data-bs-target="#trackerModal">Add Tracker</button>
</div>
<hr>
<!-- Modal -->
<div class="modal fade" id="trackerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="text-center mb-0">
          <h1 class="fs-2 fw-bold">Add Tracker 🛰️</h1>
          <hr>
          </div>
      <div class="modal-body">

      <?php 
      if(isset($_COOKIE['trackerRegisterError'])){
        echo "<div class='alert alert-danger text-center mb-3' role='alert'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>

                           ".$_COOKIE['trackerRegisterError'].", Try Again.
                          </div>  <div class='text-center'>
                        </div>";
      }
      
      ?>
        <form action="/process-tracker-registration" method="POST">

        <div class="my-2">
        <label for="formControlInput" class="form-label">Device ID: </label>
        <input type="text" class="form-control" name="deviceID" id="formControlInput" placeholder="" required>  
        </div>

        <div class="my-2">
        <label for="formControlInput" class="form-label">Pet Assigned: </label>
        <select class="form-select" name="petID" aria-label="Default select" required>
        <?php 
        
        foreach($_SESSION['pets'] as $pet){
          
          echo "<option value='".$pet[0]."'>".$pet[1]."</option>";

        }
        
        ?>
      </select>
      </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add</button>
        </form>

      </div>
    </div>
  </div>
</div>

<?php

include 'server/process-tracker-retrieve.php';


 if(isset($_SESSION['trackers'])){
   
   ?>
  <div class="container-fluid w-100">



<?php 
            if(isset($_COOKIE['trackerUpdateError'])){
              echo "<div class='alert alert-danger text-center mb-3' role='alert'>
              <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
      
                                 ".$_COOKIE['trackerUpdateError'].", Try Again.
                                </div>  <div class='text-center'>
                              </div>";
            }



?>


<table class="table table-light table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Device ID</th>
      <th scope="col">Pet Assigned</th>
      <th scope="col"></th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  <?php 

include 'server/process-tracker-print.php';


?>
  
  </tbody>
</table>



</div>



<?php } else {

    echo "<div class='alert alert-dismissible alert-info'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Info:'><use xlink:href='#info-fill'/></svg>

    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
    It seems you don't have any trackers registered yet. Try adding one using the <strong>Add Tracker</strong> button above!

  </div>";
  
}?>
 



  







</div>
</div>


<?php require_once 'include/footers-index.php'?>
