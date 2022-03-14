<?php

require_once 'db/connection.php';
if (session_id() == '') {
    session_start();
}
$id = mysqli_real_escape_string($conn, $_GET['id']);

try {
    $sql = "SELECT * FROM reports WHERE id = '$id'";


    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    $reports = $row['reports'];
    $userID = $row['userID'];
    $petID = $row['petID'];
    $isResolved = "IN PROGRESS";

    $sql = "SELECT * FROM notifications WHERE reportID = '$id'";


    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        setcookie(
            "duplicateNotify",
            "<strong>Ohh oh!</strong> User already notified.",
            time() + (5),
            "/"
        );

        header('Location: /admin');
    } else {
        $stmt = $conn->prepare("INSERT INTO notifications (reports, petID, userID, reportID, isResolved) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("siiis", $reports, $petID, $userID, $id, $isResolved);
        $stmt->execute();

        $stmt->close();

        $sqlImage = "UPDATE reports SET 
        isResolved = 'IN PROGRESS'
        where id = '$id'";

        $result = mysqli_query($conn, $sqlImage);
        setcookie(
            "reportStatus",
            "<strong>Succesfully!</strong> notified user.",
            time() + (5),
            "/"
        );

        header('Location: /admin');
    }




    print("<pre>" . print_r($row, true) . "</pre>");
} catch (Exception $e) {
    echo $e->getMessage();
}
