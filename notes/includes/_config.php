<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "note";

$con = mysqli_connect($host,$user,$pass,$db);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>