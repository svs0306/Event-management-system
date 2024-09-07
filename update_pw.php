<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database (replace the placeholders with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ems";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user details from the database
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM signup1 WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentPassword = $row['password'];

        // Check if the current password matches the entered current password
        if ($_POST['current_password'] == $currentPassword) {
            $newPassword = $_POST['new_password'];
            $confirmPassword = $_POST['confirm_password'];

            // Check if the new password and confirm password match
            if ($newPassword == $confirmPassword) {
                // Update the password in the database
                $updateSql = "UPDATE signup1 SET password='$newPassword' WHERE name='$name'";
                if ($conn->query($updateSql) === TRUE) {
                    echo "Password updated successfully!";
                } else {
                    echo "Error updating password: " . $conn->error;
                }
            } else {
                echo "New password and confirm password do not match.";
            }
        } else {
            echo "Current password is incorrect.";
        }
    } else {
        echo "User not found";
    }

    $conn->close();
}
?>
