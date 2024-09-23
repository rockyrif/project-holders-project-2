<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") { 

    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        // Prepare the SQL statement
        $stmt = $conn->prepare("DELETE FROM tournament_schedule WHERE tournament_id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            $_SESSION['response'] = "Tournament schedule deleted successfully";
            header('Location: calender.php');
            exit;
        } else {
            // Optionally, log the error message instead of echoing it
            error_log("Error deleting record: " . $stmt->error);
            $_SESSION['response'] = "An error occurred while deleting the schedule.";
            header('Location: calender.php');
            exit;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        $_SESSION['response'] = "Invalid ID.";
        header('Location: calender.php');
        exit;
    }

    // Close the database connection
    $conn->close();
} else {
    header("Location: ../../../index.php");
    exit;
}
?>
