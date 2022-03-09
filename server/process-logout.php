<?php
    ob_start();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['address']);
    unset($_SESSION['user_image']);
    session_destroy();
    header("Location: /");
?>