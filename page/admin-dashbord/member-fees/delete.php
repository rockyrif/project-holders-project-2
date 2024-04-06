<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `member_fees` WHERE fee_id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: member_fees.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
