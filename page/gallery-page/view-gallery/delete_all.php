<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") { 
    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

    if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['directory'])) {
        $id = $_GET['id'];
        $directory = $_GET['directory'];

        // Function to delete a directory and its contents
        function deleteDirectory($dir) {
            if (!is_dir($dir)) {
                return false;
            }
            $files = array_diff(scandir($dir), array('.','..'));
            foreach ($files as $file) {
                (is_dir("$dir/$file")) ? deleteDirectory("$dir/$file") : unlink("$dir/$file");
            }
            return rmdir($dir);
        }

        if (deleteDirectory($directory)) {
            // Prepare the SQL statement
            $stmt = $conn->prepare("DELETE FROM gallery WHERE id = ?");
            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                $_SESSION['response'] = "Record and directory deleted successfully";
                header('Location: ../../../index.php#section-two');
                exit;
            } else {
                // Optionally, log the error message instead of echoing it
                error_log("Error deleting record: " . $stmt->error);
                $_SESSION['response'] = "An error occurred while deleting the record.";
             
                exit;
            }

            // Close the statement
            $stmt->close();
        } else {
            error_log("Error deleting directory: " . $directory);
            $_SESSION['response'] = "An error occurred while deleting the directory.";
           
            exit;
        }
        
        // Close the database connection
        $conn->close();
    } else {
        // Handle invalid ID or missing directory
        error_log("Invalid ID or missing directory provided.");
        $_SESSION['response'] = "Invalid ID or missing directory.";
        
        exit;
    }
} else {
    header("Location: ../../../index.php");
    exit;
}
?>
