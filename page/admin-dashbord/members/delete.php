<?php
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
  include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
  $id = $_GET["id"];
  $sql = "DELETE FROM `members` WHERE member_id = $id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    $conn->close();
    header("Location: admin-dashbord.php?msg=Data deleted successfully");
  } else {
    $conn->close();
    echo "Failed: Because there are payment records for this member try deleting all the payment record for this member. " . mysqli_error($conn);
  }
} else {
  header("Location: ../../../index.php");
}

