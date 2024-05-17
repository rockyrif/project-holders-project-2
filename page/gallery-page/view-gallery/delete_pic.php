<?php
session_start();

$id = $_GET['id'];

if (isset($_GET['directory']) && isset($_GET['file'])) {
    $directory = $_GET['directory'];
    $file = $_GET['file'];

    // Ensure the full path is correctly sanitized
    $fullPath = realpath($directory . DIRECTORY_SEPARATOR . $file);

    if ($fullPath && strpos($fullPath, realpath($directory)) === 0 && is_file($fullPath)) {
        if (unlink($fullPath)) {
            $_SESSION['response'] = "File deleted successfully.";
            header('Location: view-gallery.php?id=' . $id);
            exit;
        } else {
            $_SESSION['response'] = "Error deleting the file.";
            header('Location: view-gallery.php?id=' . $id);
            exit;
        }
    } else {
        $_SESSION['response'] = "Invalid file path.";
        header('Location: view-gallery.php?id=' . $id);
        exit;
    }
} else {
    $_SESSION['response'] = "Invalid parameters.";
    header('Location: view-gallery.php?id=' . $id);
    exit;
}
