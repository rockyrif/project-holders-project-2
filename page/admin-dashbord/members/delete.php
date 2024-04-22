<?php
session_start();

if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
    
    // Check if the 'id' parameter is set and is a valid integer
    if (isset($_GET["id"]) && filter_var($_GET["id"], FILTER_VALIDATE_INT)) {
        $id = $_GET["id"];
        
        // Prepare the SQL statement with a placeholder for the parameter
        $sql = "DELETE FROM `members` WHERE member_id = ?";
        
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        // Bind the parameter
        $stmt->bind_param("i", $id);
        
        // Execute the statement
        $result = $stmt->execute();
        
        // Close the statement
        $stmt->close();
        
        if ($result) {
            $_SESSION['response'] = "Data deleted successfully";
            // Redirect the user
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit; // Stop further execution
        } else {
            // Provide an error message
            echo "Failed: Because there are payment records for this member try deleting all the payment record for this member.";
        }
    } else {
        // Provide an error message if 'id' parameter is missing or invalid
        echo "Invalid member ID.";
    }
    
    // Close the connection
    $conn->close();
} else {
    // Redirect the user if not logged in as admin
    header("Location: ../../../index.php");
    exit; // Stop further execution
}
?>

