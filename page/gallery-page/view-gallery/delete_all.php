<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {



    
} else {
    header("Location: ../../../index.php");
}
