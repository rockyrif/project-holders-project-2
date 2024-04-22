<!-- update delete status. start -->
<?php
session_start();

if (isset($_GET["id"])) {

    $id = isset($_GET["id"]) ? $_GET["id"] : '';

    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

    $sql = "DELETE FROM `member_fees` WHERE fee_id = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);

    $result = mysqli_stmt_execute($stmt);

    $conn->close();


    if ($result) {
        $_SESSION['response'] = "Data deleted successfully";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit; // Stop further execution
    } else {
        $_SESSION['response'] = "Failed: " . mysqli_stmt_error($stmt);
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit; // Stop further execution
    }

    // Close the statement
    mysqli_stmt_close($stmt);

   
}
              
