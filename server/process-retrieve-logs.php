<?php
require_once 'db/connection.php';
if (session_id() == '') {
  session_start();
}

if (isset($_GET['event']) && isset($_GET['type'])) {
  $event = mysqli_real_escape_string($conn, $_GET['event']);
  $type = mysqli_real_escape_string($conn, $_GET['type']);
  $sql = "";
  if ($event == "all" && $type == "all") {
    $sql = "SELECT * FROM activity_logs";
  } elseif ($event == "all" && $type != "all") {
    $sql = "SELECT * FROM activity_logs WHERE type = '$type'";
  } elseif ($event != "all" && $type == "all") {
    $sql = "SELECT * FROM activity_logs WHERE event = '$event'";
  } else {
    $sql = "SELECT * FROM activity_logs WHERE event = '$event' AND type = '$type'";
  }



  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  /*
  0 = Open
  1 = In Progress
  2 = Closed
 */

  while ($row = mysqli_fetch_array($result)) {
    $eventParsed = "";
    if ($row['event'] == "LOGIN") {
      $eventParsed = "<strong class='text-success'>" . $row['event'] . "</strong>";
    } elseif ($row['event'] == "LOGOUT") {
      $eventParsed = "<strong class='text-info'>" . $row['event'] . "</strong>";
    } elseif ($row['event'] == "UPDATE") {
      $eventParsed = "<strong class='text-warning'>" . $row['event'] . "</strong>";
    } elseif ($row['event'] == "REGISTER") {
      $eventParsed = "<strong class='text-primary'>" . $row['event'] . "</strong>";
    } elseif ($row['event'] == "DELETE") {
      $eventParsed = "<strong class='text-danger'>" . $row['event'] . "</strong>";
    }



    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['userId'] . "</td>";
    echo "<td>" . $eventParsed . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['log_date'] . "</td>";
    echo "<td>" . $row['log_time'] . "</td>";

    echo "<td>

    
    <a href='/logs-delete?id=" . $row['id'] . "' class='btn btn-sm btn-danger'><i class='fa-solid fa-trash-can'></i></a>


    </td>";


    echo "</tr>";
  }
}
