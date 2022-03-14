<?php
require_once 'db/connection.php';

session_start();

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

try
{
    $dbError = mysqli_connect_errno();
    if ($dbError)
    {
        throw new Exception('Could not connect to the database.');
    }

    if (!$username || !$password)
    {
        throw new Exception('Incomplete credentials');
    }

    $sql = "SELECT * FROM admin WHERE username ='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count <= 0)
    {
        throw new Exception("Account does not exist.");
    }

    //retrieving name from database for session storage
    $sql = "SELECT * FROM admin WHERE username ='$username'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        //setting values
        $hash = $row['password'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
    }

    if (password_verify($password, $hash))
    {
        $_SESSION['isLoggedInAdmin'] = true;

        $_SESSION['username'] = $username;

        $userID = $_SESSION['id'];

        $sql = "SELECT * FROM pets WHERE userID ='$userID'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count <= 0)
        {
            $_SESSION['noReports'] = true;
            if (isset($_SESSION['reports']))
            {
                unset($_SESSION['reports']);

            }
        }
        else
        {
            $_SESSION['reports'] = array();

            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                $report = array(
                    $row['id'],
                    $row['reports'],
                    $row['userID'],
                    $row['petID]'],
                    $row['isResolved'],
                    $row['resolverID']
                );

                array_push($_SESSION['reports'], $report);

            }

        }

        header('Location: /admin');
    }
    else
    {
        throw new Exception("Incorrect Credentials!");
    }
}
catch(Exception $e)
{
    setcookie("loginError", $e->getMessage() , time() + (5) , "/");
    header('Location: /su');
}

?>
