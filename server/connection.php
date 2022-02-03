<?php 

 $server = "localhost";
 $dbuser = "root";
 $dbpass = "";

 $dbname = "strap";

 $conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);

 //if connection fails disconnect
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }


?>