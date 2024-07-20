<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="styles.css">

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

        .password-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .password-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333333;
            text-align: center;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
            color: #555555;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            .password-container {
                padding: 15px;
            }

            .input-group input {
                padding: 12px;
                font-size: 18px;
            }

            button {
                padding: 12px;
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['new_password'], $_POST['confirm_password'])) {
            $new_password = $_POST['new_password'];
            $confirm_password = $_POST['confirm_password'];

            // Check if the passwords match
            if ($new_password === $confirm_password) {
                // Check if email is set in session
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];

                    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

                    // Hash the new password
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                    // Update the password in the database
                    $sql = "UPDATE user_login SET password = ? WHERE email = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param('ss', $hashed_password, $email);

                    if ($stmt->execute()) {
                        session_unset();
                        session_destroy();
                        $_SESSION['response'] = "Password has been reset. Please log in with your new password.";
                        header("Location: index.php");
                        exit;
                    } else {
                        echo 'Error: ' . $stmt->error;
                    }

                    // Close the connection
                    $stmt->close();
                    $conn->close();
                } else {
                    echo 'Session expired. Please log in again.';
                }
            } else {
                // Redirect to another page
                header('Location: new-password.php?error=1');
                exit();
            }
        } else {
            echo 'Please fill in all fields.';
        }
    }
    ?>
    <div class="password-container">
        <h2>Change Password</h2>
        <form action="" method="POST">
            <div class="input-group">
                <label for="new_password">New Password</label>
                <input type="password" id="new_password" name="new_password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if there is an error flag in the URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('error') && urlParams.get('error') === '1') {
                alert('Password did not mach. Please try again.');
            }
        });
    </script>
</body>

</html>