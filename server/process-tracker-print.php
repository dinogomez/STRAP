<?php 

foreach($_SESSION['trackers'] as $tracker){

    echo "<tr>
    <th scope='row'>".$tracker[0]."</th>
    <td>".$tracker[1]."</td>
    <td>".$tracker[2]."</td>
    <td></td>
    <td>
     <div class='btn btn-sm btn-success' data-bs-toggle='modal' data-bs-target='#trackQR".$tracker[0]."'><i class='fa-solid fa-pen-to-square'></i></div>

      <div class='btn btn-sm btn-danger' data-bs-toggle='modal' data-bs-target='#pet".$tracker[0]."'><i class='fa-solid fa-trash-can'></i></div>
  </td>
  </tr>
  
  <div class='modal fade' id='pet".$tracker[0]."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Delete Confirmation ⚠️ </h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                Are you sure you want to remove <strong class='text-danger'> ".$tracker[2]."</strong>'s tracker??
            </div>
            <div class='modal-footer' style='border-top: 0 none;'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <form class='mx-1' action='/tracker-delete' method='post'>
                <input type='hidden' name='id' value='".$tracker[0]."'>
                <input type='submit' value='Delete' class='btn btn-danger'>
              </form>
            </div>
            </div>
        </div>
        </div>
      
        <div class='modal fade' id='trackQR".$tracker[0]."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Update Tracker  </h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>";

            
            
            echo "
            
            <form action='/tracker-update' method='post'>


            <div class='my-2'>
            <label for='formControlInput' class='form-label'>Device ID: </label>
            
            <input type='hidden' value='".$tracker[0]."' name='trackerID'>
            <input type='text' class='form-control' name='deviceID' id='formControlInput' placeholder='' value='".$tracker[1]."' disabled>  
            </div>


            
            <div class='my-2'>
            <label for='formControlInput' class='form-label'>Pet Assigned: </label>
            <select class='form-select' name='petID' aria-label='Default select' required>";
            
            
            foreach($_SESSION['pets'] as $pet){
              
             if($pet[1] == $tracker[2]){
                echo "<option value='".$pet[0]."' selected>".$pet[1]."</option>";
             } else {
                echo "<option value='".$pet[0]."'>".$pet[1]."</option>";
             }
              
    
            }
            
            echo "
          </select>
          </div>
            </div>
            <div class='modal-footer' >
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <button type='submit' class='btn btn-primary'>Update</button>
                </form>
            </div>
            </div>
        </div>
        </div>
  
  
  
  
  ";
  }


?>