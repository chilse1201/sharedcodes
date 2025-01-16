<?php
session_start();
include "connection.php";

// Define the validate function
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['Username'])) {
    // Sanitize and validate the username
    $username = validate($_POST['Username']);
    $_SESSION['Username'] = $username;

    // Use a prepared statement to safely retrieve the email
    $sql = "SELECT Email FROM tbldatabase WHERE Username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        // Fetch the email address
        $row = mysqli_fetch_assoc($result);
        $email = $row['Email'];

        // Generate a random 6-digit OTP
        $otp = rand(100000, 999999);

        // Store the OTP in the session (you can also store it in the database)
        $_SESSION['otpcode'] = $otp;

        // Prepare the email
        $subject = "Your OTP Code";
        $message = "Here is your verification code: $otp";
        $headers = "From: no-reply@example.com"; // Replace with a valid email address

        // Send the OTP to the user's email
        if (mail($email, $subject, $message, $headers)) {
            echo "<script>
                    alert('OTP sent!');
                    window.location.href = 'otpform.html';
                  </script>";
        } else {
            echo "<script>
                    alert('Email sending failed!');
                    window.location.href = '';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Username not found!');
                window.location.href = 'forgotpass.html';
              </script>";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>