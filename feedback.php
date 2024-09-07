<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $rating = $_POST["rating"];
    $message = htmlspecialchars($_POST["message"]);

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ems";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $registeredEmail = $_SESSION['email'];
    if ($email !== $registeredEmail) {
       echo "Error: Email does not match the registered email.";
       exit();
    }


// Bind the parameters

    $stmt =$conn->prepare( "INSERT INTO feedback (name, email, rating, message) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $name,$email,$rating,$message);
    if ($stmt->execute()) {
  // Registration successful, set a session variable
  session_start();
  $_SESSION['name'] = $name;

  // Redirect the user to another page after registration
  header("Location: home.php");
  exit();
} else {
  // Registration failed
  echo "Registration failed. Please try again later.";
}
$stmt->close();
    $conn->close();
}
?>
