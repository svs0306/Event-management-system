<?php
// Database connection settings
$conn = new mysqli('localhost', 'root', 'root', 'ems');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the user input
$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$eventtype = filter_input(INPUT_POST, "event_type", FILTER_SANITIZE_STRING);
$paymeth = filter_input(INPUT_POST, "payment", FILTER_SANITIZE_STRING);
$date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, "price", FILTER_SANITIZE_NUMBER_INT);

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO registration (name, email, eventtype, paymeth, date, price) VALUES (?, ?, ?, ?, ?, ?)");

// Bind the parameters
$stmt->bind_param("sssssi", $name, $email, $eventtype, $paymeth, $date, $price);

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
