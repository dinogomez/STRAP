<?php
ob_start();
    session_start();
    if(isset($_SESSION['uid'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['address']);
    header("Location: /login");
    } else {
    header("Location: /login");
    }
?>