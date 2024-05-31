<!-- update delete status. start -->
<?php
session_start();

if (isset($_GET["id"])) {
    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

    $id = $_GET["id"];

    $sql1 = "SELECT `proof_url` FROM `tournament_application` WHERE application_id  = ?";

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
            $file_path =  "../".$pic_path;

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



    $id = isset($_GET["id"]) ? $_GET["id"] : '';

    $sql = "DELETE FROM `tournament_application` WHERE application_id  = ?";

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
