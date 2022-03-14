<?php
require_once 'db/connection.php';

session_start();

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

try {
    $dbError = mysqli_connect_errno();
    if (isset($_SESSION['isLoggedInAdmin'])) {
        throw new Exception('You currently logged in as Admin');
    }
    if ($dbError) {
        throw new Exception('Could not connect to the database.');
    }

    if (!$username || !$password) {
        throw new Exception('Incomplete credentials');
    }

    $sql = "SELECT * FROM users WHERE username ='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count <= 0) {
        throw new Exception("Account does not exist.");
    }

    //retrieving name from database for session storage
    $sql = "SELECT * FROM users WHERE username ='$username'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        //setting values
        $hash = $row['password'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['address'] = $row['address'];
    }

    if (password_verify($password, $hash)) {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['username'] = $username;

        $userID = $_SESSION['id'];

        $sql = "SELECT * FROM pets WHERE userID ='$userID'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count <= 0) {
            $_SESSION['noPets'] = true;
            if (isset($_SESSION['pets'])) {
                unset($_SESSION['pets']);
            }
        } else {
            $_SESSION['pets'] = array();

            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                //setting values
                $pet = array(
                    $row['id'],
                    $row['petName'],
                    $row['petType'],
                    $row['petBreed'],
                    $row['petDiet'],
                    $row['petVaccine'],
                    $row['ContactName'],
                    $row['ContactNumber'],
                    $row['petImg'],
                    $row['uniqid']
                );

                array_push($_SESSION['pets'], $pet);
            }
        }

        require_once 'process-tracker-retrieve.php';

        header('Location: /dashboard');
    } else {
        throw new Exception("Incorrect Credentials!");
    }
} catch (Exception $e) {
    setcookie("loginError", $e->getMessage(), time() + (5), "/");
    header('Location: /');
}
