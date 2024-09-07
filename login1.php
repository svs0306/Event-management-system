<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald|Playfair Display' rel='stylesheet' type='text/css'>
<link href="signupstyles.css" rel="stylesheet">
<style>
       body {
  font-family: Oswald;
  margin: 0;
  padding: 0;
}
.navbar {
  overflow:auto;
  background-color: lightpink;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: rgb(0, 0, 0);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  color: rgb(0, 0, 0);
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:rgb(245, 124, 201);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.login-container {
  margin: 100px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  width: 30%; /* Adjust the width as needed */
  text-align: center;
}

.input-group {
  margin-bottom: 15px;
}

.input-group input[type="email"], .input-group input[type="password"] {
  width: 80%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.login-btn {
  background-color: #4caf50;
  color: white;
  padding: 7px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
}

.login-btn:hover {
  background-color: #45a049;
}
</style>
</head>
<body>

<div class="navbar">
    <img src="images/ee.jpeg" alt="Epic Events" style="margin-left: 20px;height: 50px; width: 50px">
    <a href="home1.php">Home</a>
    <div class="dropdown">
    <button class="dropbtn">Events<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="anniversary1.php">Anniversary</a>
      <a href="birthday1.php">Birthday</a>
      <a href="conference1.php">Conference</a>
      <a href="wedding1.php">Wedding</a>
    </div>
  </div> 
    <a href="gallery1.php">Gallery</a>
    <a href="aboutus1.php">About Us</a>
    <div class="dropdown">
      <button class="dropbtn">Login 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="login1.php">Login</a>
        <a href="signup1.php">Sign Up</a>
      </div>
    </div> 
  </div>

<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="post"> <!-- Add action attribute to connect with login.php -->
        <div class="input-group">
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" name="loginButton" class="login-btn">Login</button>
    </form>
</div>

<script>
function validateLogin() {
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;

  // Validate email and password (you can add more robust validation logic here)

  // For demonstration purposes, just show an alert if email and password are not empty
  if (email === "" || password === "") {
    alert("Please enter valid email and password.");
//  } else {
//    // Redirect to home page after successful login
//    window.location.href = "home.html";
  }
}
</script>

</body>
</html>
