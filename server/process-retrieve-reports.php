<?php
require_once 'db/connection.php';
if (session_id() == '') {
  session_start();
}

if (isset($_GET['filter'])) {

  if ($_GET['filter'] == "open") {
    $sql = "SELECT * FROM reports,pets WHERE reports.petID = pets.id AND reports.isResolved = 'OPEN'";
  } elseif ($_GET['filter'] == "inprog") {
    $sql = "SELECT * FROM reports,pets WHERE reports.petID = pets.id AND reports.isResolved = 'IN PROGRESS'";
  } elseif ($_GET['filter'] == "closed") {
    $sql = "SELECT * FROM reports,pets WHERE reports.petID = pets.id AND reports.isResolved = 'CLOSED'";
  } elseif ($_GET['filter'] == "acknowledged") {
    $sql = "SELECT * FROM reports,pets WHERE reports.petID = pets.id AND reports.isResolved = 'ACKNOWLEDGED'";
  } elseif ($_GET['filter'] == "all") {
    $sql = "SELECT * FROM reports,pets WHERE reports.petID = pets.id";
  }


  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  /*
  0 = Open
  1 = In Progress
  2 = Closed
 */
  while ($row = mysqli_fetch_array($result)) {
    $notify = "<a href='/notify?id='" . $row[0] . " class='btn text-white disabled bg-dark btn-sm me-1'><i class='fa-solid fa-bell'></i></a>";
    $close = "<a href='/resolve?id=" . $row[0] . "' class='btn text-white disabled bg-dark btn-sm'><i class='fa-solid fa-check-to-slot'></i></a>";

    if ($row['isResolved'] == "OPEN") {
      $status = "<td class='fw-bold text-success'>Open</td>";
      $notify = "<a href='/notify?id=" . $row[0] . "' class='btn btn-warning btn-sm me-1'><i class='fa-solid fa-bell'></i></a>";
      $close = "<a href='/resolve?id=" . $row[0] . "' class='btn btn-info btn-sm '><i class='fa-solid fa-check-to-slot'></i></a>";
    } elseif ($row['isResolved'] == "IN PROGRESS") {
      $status = "<td class='fw-bold text-warning'>In Progress</td>";
    } elseif ($row['isResolved'] == "ACKNOWLEDGED") {
      $status = "<td class='fw-bold text-info'>Acknowledged</td>";
      $notify = "<a href='/notify?id=" . $row[0] . "' class='btn btn-warning btn-sm me-1'><i class='fa-solid fa-bell'></i></a>";
      $close = "<a href='/resolve?id=" . $row[0] . "' class='btn btn-info btn-sm '><i class='fa-solid fa-check-to-slot'></i></a>";
    } else {
      $status = "<td class='fw-bold text-muted'>Closed</td>";
    }
    //  print("<pre>".print_r($row,true)."</pre>");


    $user = $row[2];


    echo "<tr>";
    echo "<td>" . $row['0'] . "</td>";
    echo "<td>" . $row['reports'] . "</td>";
    echo "<td>" . $user . "</td>";
    echo "<td>" . $row['petID'] . "</td>";
    echo $status;
    echo "<td>" . $row['timeStamp'] . "</td>";

    echo "<td>

    <a href='/search?id=" . $row['uniqid'] . "' class='btn btn-primary btn-sm  class='btn btn-primary'><i class='fa-solid fa-eye'></i></a>
    " . $notify . $close . "
    <a href='/report-delete?id=" . $row['0'] . "' class='btn btn-sm btn-danger'><i class='fa-solid fa-trash-can'></i></a>


    </td>";


    echo "</tr>";
  }
}
