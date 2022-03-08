<?php 
if(session_id() == ''){
    session_start();
 } 
 if(!isset($_SESSION['username'])){
    $_SESSION = array();
    session_destroy();
header("Location:/");
}
?>