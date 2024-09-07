<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="indexstyles.css"> <!-- Add your styles or use inline styles -->
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
    </style>
</head>
<body>

<div class="navbar">
  <img src="images/ee.jpeg" alt="Epic Events" style="margin-left: 20px;height: 50px; width: 50px">
  <a href="home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Events<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="anniversary.php">Anniversary</a>
      <a href="birthday.php">Birthday</a>
      <a href="conference.php">Conference</a>
      <a href="wedding.php">Wedding</a>
    </div>
  </div> 
  <a href="gallery.php">Gallery</a>
  <a href="register1.php">Registration</a>
  <a href="feedback1.php">Feedback Form</a>
    <a href="aboutus.php">About Us</a>
  <a href="logout.php">Logout</a>
</div>

<div class="container">
    <div class="signup-container">
    <h2>Feedback Form</h2>
    <form method="post" action="feedback.php">
        <label for="name">Name:</label>
	<div class="input-group">
        <input type="text" id="name" name="name" required>
        </div>
        <label for="email">Email:</label>
	<div class="input-group">
        <input type="email" id="email" name="email" required>
        </div>
        <label for="rating">Rating:</label>
	<div class="input-group">
        <input type="number" id="rating" name="rating" min="1" max="5" required>
        </div>
        <label for="message">Message:</label>
	<div class="input-group">
        <textarea id="message" name="message" rows="4" required></textarea>
	</div>
        <br>
        <button type="submit">Submit Feedback</button>
        <br>
    </form>
</div>

</body>
</html>
