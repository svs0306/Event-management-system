<?php
// Database connection settings
$conn = new mysqli('localhost', 'root', 'root', 'ems');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the user input
$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$mobile = filter_input(INPUT_POST, "mobile", FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$password1 = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$gender = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

// Check if the email already exists
$sql = "SELECT * FROM signup1 WHERE email = '$email'";
$result = $conn->query($sql);

// If the email already exists, display an alert message and move to the login page
if ($result->num_rows > 0) {
  echo "<script>alert('This email is already signed up. Please log in.'); window.location.href = 'login1.php';</script>";
  exit();
}

// Hash the password
//$hashed_password = password_hash($password1, PASSWORD_DEFAULT);

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO signup1 (name, mobile, email, password, gender, age) VALUES (?, ?, ?, ?, ?, ?)");

// Bind the parameters
$stmt->bind_param("sisssi", $name, $mobile, $email, $password1, $gender, $age);

// Execute the SQL statement
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

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
?>
