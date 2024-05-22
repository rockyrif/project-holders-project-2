<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") { 

    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

    $id = $_GET['id'];
    

    if (isset($id)) {
        $sql = "DELETE FROM tournament_schedule
        WHERE id = $id;";
    }

    if ($conn->query($sql) === TRUE) {
        $_SESSION['response'] = "Tournament schedule deleted successfully";
        header('location: calender.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header("Location: ../../../index.php");
} 