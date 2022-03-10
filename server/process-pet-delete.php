<?php 

    require_once 'db/connection.php';


    try{

        $id =  mysqli_real_escape_string($conn,$_POST['id']);
    $update = $conn->prepare("DELETE FROM pets WHERE id = ?");
    $update->bind_param('i', $id);
    $update->execute();
    $update->close();
    header('Location: /pet');

    }catch(Exception $e){

        $possible = 'Cannot delete or update a parent row: a foreign key constraint fails (`strap`.`trackers`, CONSTRAINT `trackers_ibfk_2` FOREIGN KEY (`petID`) REFERENCES `pets` (`id`))';

        if($e->getMessage() == $possible){
            setcookie("trackerUpdateError", 
            "Please remove the pet's tracker before deleting this pet ", 
            time() + (5), 
            "/");   
            header('Location: /pet');
        } else {
            setcookie("trackerUpdateError", 
            "".$e->getMessage()."   ", 
            time() + (5), 
            "/");   
            header('Location: /pet');
        }

        
    }    

?>


