<?php
require_once 'db/connection.php';

$lat = mysqli_real_escape_string($conn, floatval(($_GET['lat'])));
$lon = mysqli_real_escape_string($conn, floatval(($_GET['lon'])));
$time = mysqli_real_escape_string($conn, $_GET['time']);
$did = mysqli_real_escape_string($conn, $_GET['aid']);
$deviceID = 0;
$sql = "SELECT * FROM devices WHERE deviceID ='$did'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count <= 0)
{
    echo "no match";
}
else
{
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $deviceID = $row['id'];
        echo $deviceID;
    }
}

$stmt = $conn->prepare("INSERT INTO gps (deviceID, lat, lon, pingTime) VALUES (?, ?, ?, ?)");
$stmt->bind_param("idds", $deviceID, $lat, $lon, $time);
$stmt->execute();

$stmt->close();
