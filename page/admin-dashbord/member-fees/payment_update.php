<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fee_id"]) && isset($_POST["status"])) {
    include_once 'db_conn.php'; // Include database connection file
    $feeId = $_POST["fee_id"];
    $status = $_POST["status"];

    // Prepare and execute SQL statement to update payment status
    $sql = "UPDATE member_fees SET payment_status = '$status' WHERE fee_id = '$feeId'";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin-dashbord.php?msg=Pyament status update successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
