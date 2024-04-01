<?php
$servername = "localhost";
$username = "root";
$password = "MNAM14059320alocalhost";
$dbname = "amp_dtc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
