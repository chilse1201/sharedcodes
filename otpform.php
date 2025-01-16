<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['otpcode']) && isset($_SESSION['otpcode'])) {
        $enteredOtp = $_POST['otpcode'];

        // Compare the entered OTP with the stored OTP in session
        if ($enteredOtp == $_SESSION['otpcode']) {
            // Store email in session for use in the next step
            $_SESSION['email'] = $_SESSION['reset_email'];
            header("Location: resetpwd.php"); // Redirect to new password page
            exit();
        } else {
            echo "Invalid OTP. Please try again.";
        }
    } else {
        echo "OTP is not set. Please request a new OTP.";
    }
}
?>