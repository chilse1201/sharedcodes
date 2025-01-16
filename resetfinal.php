<?php
session_start();
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['Username'])) {
        $username = $_SESSION['Username'];
        $newpwd = $_POST['newpwd'];
        $confirmpwd = $_POST['confirmpwd'];

        // Validate passwords
        if ($newpwd !== $confirmpwd) {
            echo "Passwords do not match. Please try again.";
            exit();
        }

        // Update the password in the database (no hashing)
        $sql = "UPDATE tbldatabase SET Password='$newpwd' WHERE Username='$username'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Password updated successfully.";
            // Clear session and redirect
            session_start();
            session_unset();
            session_destroy();
            header("Location: http://localhost:3000/DelpiTrack/ADMINLOGIN/admin.html");
            exit();
        } else {
            echo "Error updating password. Please try again.";
        }
    } else {
        echo "Invalid session. Please restart the process.";
    }
}
?>