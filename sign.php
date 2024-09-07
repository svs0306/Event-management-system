<?php
include("signup.php");

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);

    $sql = "SELECT * FROM signup WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_email > 0) {
        echo '<script>
            window.location.href="signup1.php";
            alert("Email already exists");
        </script>';
    } else {
        if ($password === $confirmPassword) {
            $salt = md5(uniqid());
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $insertQuery = "INSERT INTO signup (name, mobile, email, password, gender, age) VALUES ('$name', '$mobile', '$email', '$hashedPassword', '$gender', '$age')";
            mysqli_query($conn, $insertQuery);
            echo '<script>
                window.location.href="home.html";
                alert("Signup successful");
            </script>';
        } else {
            echo '<script>
                window.location.href="signup.php";
                alert("Passwords do not match");
            </script>';
        }
    }
}
