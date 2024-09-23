<?php
session_start();

// php mailing header
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
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
            background-color: #f0f2f5;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .forgot-password-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }
        }
    </style>


</head>

<body>
    <?php

    function generateRandomPassword($length = 6)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomPassword = '';
        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomPassword;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the email from the form submission
        $email = htmlspecialchars($_POST['email']);

        $_SESSION['email'] = $email;

        // Generate a random password
        $randomPassword = generateRandomPassword();

        // Store the random password in a session variable
        $_SESSION['random_password'] = $randomPassword;

        include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

        // Check if the email exists in the database
        $stmt = $conn->prepare("SELECT email FROM user_login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        // Bind the result to a variable
        $stmt->bind_result($fetched_email);

        // Fetch the result
        $email_exists = $stmt->fetch();

        // Close the statement
        $stmt->close();

        if ($email_exists) {
            // Include PHPMailer autoload
            require '../../PHP-mailer/vendor/autoload.php';

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'mail.adtennis.lk';
                $mail->SMTPAuth = true;
                $mail->Username = 'admin@adtennis.lk';
                $mail->Password = '2l01xVKb:EO.9p';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;

                // Set custom CA certificates to trust the self-signed certificate
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

                $mail->setFrom('admin@adtennis.lk', 'Auto mail generator');
                $mail->addAddress($email, '');

                $mail->isHTML(true);
                $mail->Subject = 'Password Reset Request';
                $mail->Body    = "A password reset request has been received for the email: $email. Your temporary otp is: $randomPassword";
                $mail->AltBody = "A password reset request has been received for the email: $email. Your temporary otp is: $randomPassword";

                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
        header("Location: enter_otp.php");
        exit;
    }


    ?>

    <div class="container">
        <div class="forgot-password-form">
            <h2>Forgot Password</h2>
            <form action="#" method="post" id="forgot-password-form">
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit">Send OTP</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('forgot-password-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting immediately
            alert("If your entered email is correct, you will receive an OTP.");
            this.submit(); // Continue with the form submission
        });
    </script>

</body>

</html>