<?php
session_start();

if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

    // Check if the 'id' parameter is set and is a valid integer
    if (isset($_GET["id"]) && filter_var($_GET["id"], FILTER_VALIDATE_INT)) {
        $id = $_GET["id"];

        $sql1 = "SELECT `pic_path` FROM `news` WHERE news_id = ?";

        // Prepare the statement
        $stmt1 = $conn->prepare($sql1);

        // Bind the parameter
        $stmt1->bind_param("i", $id);

        // Execute the statement
        $result1 = $stmt1->execute();

        // Check if the statement execution was successful
        if ($result1) {
            // Bind the result variable
            $stmt1->bind_result($pic_path);

            // Fetch the result
            if ($stmt1->fetch()) {
                $file_path = "../../" . $pic_path;

                if (file_exists($file_path)) {
                    if (unlink($file_path)) {
                        echo 'Picture deleted successfully.<br>';
                    } else {
                        echo 'Error deleting file.';
                    }
                } else {
                    echo 'File does not exist. ' . $file_path;
                }
            } else {
                echo 'No file found for the specified news ID.';
            }
        } else {
            echo 'Error executing SQL statement.';
        }

        $stmt1->close();

        // Prepare the SQL statement with a placeholder for the parameter
        $sql = "DELETE FROM `news` WHERE news_id = ?";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Error in SQL statement: " . $conn->error);
        }

        // Bind the parameter
        $stmt->bind_param("i", $id);

        // Execute the statement
        $result = $stmt->execute();

        // Check for errors in execution
        if (!$result) {
            die("Error executing SQL statement: " . $stmt->error);
        }

        // Close the statement
        

        // Close the connection
        $conn->close();


        if ($result) {
            // Redirect the user
            $_SESSION['response'] = "News deleted successfully";
            header("Location: ../../index.php");
            exit; // Stop further execution
        } else {
            // Provide an error message
            echo "Failed: Because there are payment records for this member try deleting all the payment record for this member.";
        }
    } else {
        // Provide an error message if 'id' parameter is missing or invalid
        echo "Invalid member ID.";
    }
} else {
    // Redirect the user if not logged in as admin
    header("Location: ../../index.php");
    exit; // Stop further execution
}
