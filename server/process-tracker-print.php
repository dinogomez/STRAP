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
                <form class='mx-1' action='/pet-delete' method='post'>
                <input type='hidden' name='id' value='".$tracker[2]."'>
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
                <h5 class='modal-title' id='exampleModalLabel'>Your pets QR Code 🔗 </h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
            <img src='https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl={$data}' alt='QR Code' width='100%' height='100%'>
            </div>
            <div class='modal-footer' >
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <a href='https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl={$data}' class='btn btn-dark' download>Download</a>
            </div>
            </div>
        </div>
        </div>
  
  
  
  
  ";
  }


?>