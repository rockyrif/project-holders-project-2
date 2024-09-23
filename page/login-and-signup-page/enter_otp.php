<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        .otp-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .otp-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333333;
        }

        .otp-inputs {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .otp-inputs input {
            width: 40px;
            height: 40px;
            text-align: center;
            font-size: 18px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .otp-inputs input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            .otp-inputs {
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                gap: 10px;
            }

            .otp-inputs input {
                width: 100%;
                height: 50px;
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <?php

    // Check if session variable for OTP exists
    if (!isset($_SESSION['random_password'])) {
        die('Session expired or OTP not set.');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get OTP from form
        $otp = isset($_POST['otp']) ? implode('', $_POST['otp']) : '';

        if ($otp === $_SESSION['random_password']) {
            // OTP is correct, create new session variable
            $_SESSION['forgot_ok'] = true;

            // Redirect to another page
            header('Location: new-password.php');
            exit();
        } else {
            // Redirect to another page
            header('Location: enter_otp.php?error=1');
            exit();
        }
    }
    ?>

    <div class="otp-container">
        <h2>Enter OTP</h2>
        <form action="" method="POST">
            <div class="otp-inputs">
                <input type="text" name="otp[]" maxlength="1" required>
                <input type="text" name="otp[]" maxlength="1" required>
                <input type="text" name="otp[]" maxlength="1" required>
                <input type="text" name="otp[]" maxlength="1" required>
                <input type="text" name="otp[]" maxlength="1" required>
                <input type="text" name="otp[]" maxlength="1" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if there is an error flag in the URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('error') && urlParams.get('error') === '1') {
                alert('Invalid OTP. Please try again.');
            }
        });
    </script>
</body>

</html>