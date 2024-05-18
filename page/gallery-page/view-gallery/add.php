<?php
ob_start();
session_start();
if (isset($_POST['submit'])) {

    $id = $_GET['id'];

    // Get row from table

    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

    $sql = "SELECT * FROM gallery WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    // Fetch the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    //  set category path
    if ($row) {
        $category = $row['category'];
        $tittle = $row['tittle'];
        $tittle = strtolower(preg_replace('/\s+/', '-', $tittle));
    }

    // upload pictures to desierd directory

    // Folder to upload files
    $uploadDir = '../../../Images/gallary/' . $category . '/' . $tittle . '/';

    // Ensure the upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Initialize file naming start point
    
    $fileIndex = 2;

    // Loop through each uploaded file
    foreach ($_FILES['picture']['tmp_name'] as $key => $tmpName) {
        // Check if the file is uploaded without errors
        if ($_FILES['picture']['error'][$key] === UPLOAD_ERR_OK) {
            // Get file extension
            $fileExtension = pathinfo($_FILES['picture']['name'][$key], PATHINFO_EXTENSION);

            // Construct new file name
            $newFileName = $fileIndex . '.' . $fileExtension;

            // Ensure the file name is unique in the target directory
            while (file_exists($uploadDir . $newFileName)) {
                $fileIndex++;
                $newFileName = $fileIndex . '.' . $fileExtension;
            }

            // Move the uploaded file to the target directory
            $destination = $uploadDir . $newFileName;
            if (move_uploaded_file($tmpName, $destination)) {
                $_SESSION['response'] = "File " . $_FILES['picture']['name'][$key] . " uploaded successfully as " . $newFileName . "<br>";
                
            } else {
                $_SESSION['response'] = "Error uploading file " . $_FILES['picture']['name'][$key] . "<br>";
                
            }


            // Increment the file index for the next file
            $fileIndex++;
        } else {
            $_SESSION['response'] = "Error with file " . $_FILES['picture']['name'][$key] . "<br>";
            
           
        }
    }
    header('Location: view-gallery.php?id=' . $id);
    exit;
} else {
    $_SESSION['response'] = "No files submitted.";
    header('location: view-gallery.php');
    exit;
}
ob_end_flush();
