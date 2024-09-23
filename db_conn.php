<?php
$servername = "localhost";
$username = "adtennis";
$password = "2l01xVKb:EO.9p";
$dbname = "adtennis_amp_dtc";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";