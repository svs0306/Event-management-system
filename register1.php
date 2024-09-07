<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald|Playfair Display' rel='stylesheet' type='text/css'>
  <style>
    body {
      background-image: url("images/bg.jpg");
      background-size: 100% 100%;
      background-repeat: no-repeat;
      background-attachment: fixed;
      font-family: Oswald;
      margin: 0;
      padding: 0;
    }

    .container {
      background-color: rgba(249, 249, 249, 0.7);
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      margin-top: 10px;
      width: 35%;
      margin-left: auto;
      margin-right: auto;
      position: relative;
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

    h1 {
      text-align: center;
      margin-top: 20px;
    }

    form {
      width: 500px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input,
    select {
      width: 90%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    button {
      background-color: #000;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #333;
    }

    .error {
      color: red;
      font-size: 0.8em;
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
    <h1>Event Registration</h1>
    <form action="register.php" method="POST"  id="registrationForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <span class="error" id="name-error"></span>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <span class="error" id="email-error"></span>

      <label for="event_type">Event Type:</label>
      <select id="event_type" name="event_type" required>
        <option value="">Select an event</option>
        <option value="birthday">Birthday</option>
        <option value="anniversary">Anniversary</option>
        <option value="conference">Conference</option>
        <option value="wedding">Wedding</option>
      </select>

      <label for="payment">Payment:</label>
      <select id="payment" name="payment" required>
        <option value="">Select a payment method</option>
        <option value="credit_card">Credit card</option>
        <option value="paypal">PayPal</option>
        <option value="cash">Cash</option>
      </select>
      <br>
      <label for="date">Event Date:</label>
      <input type="date" id="date" name="date" required>
      <span class="error" id="date-error"></span>

      <label for="price">Event Price:</label>
      <input type="text" id="price" name="price" required>
      <span class="error" id="price-error"></span>
      <button type="submit">Register</button>
    </form>
  </div>

  <script>
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting normally

      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var eventType = document.getElementById('event_type').value;
      var payment = document.getElementById('payment').value;
      var nameError = document.getElementById('name-error');
      var emailError = document.getElementById('email-error');

      nameError.textContent = '';
      emailError.textContent = '';

      if (name === '') {
        nameError.textContent = 'Please enter your name.';
        return;
      }

      if (email === '') {
        emailError.textContent = 'Please enter your email address.';
        return;
      } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        emailError.textContent = 'Please enter a valid email address.';
        return;
      }

      if (eventType === '') {
        alert('Please select an event type.');
        return;
      }

      if (payment === '') {
        alert('Please select a payment method.');
        return;
      }
      
    event.preventDefault(); // Prevent the form from submitting normally
    

    // rest of the code
});

      // Form is valid, redirect to success page
//      var url = 'success.php';
//      var successMessage = name + ' successfully registered for ' + eventType;
//      window.location.href = url + '?message=' + encodeURIComponent(successMessage);
    });
  </script>

</body>

</html>
