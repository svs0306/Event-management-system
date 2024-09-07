<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Oswald|Playfair Display' rel='stylesheet' type='text/css'>
  <link href="signupstyles.css" rel='stylesheet' type='text/css'>
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
    .error-message { color: red; margin-top: 5px; }
    .success-message { color: green; margin-top: 5px; }
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
    <form action="signup.php" method="POST">
  <div class="container">
    <div class="signup-container">
      <h2 style="text-align: center;">Sign up</h2>
        <div class="input-group">
          <input type="text" id="name" name="name" placeholder="Name" required>
          <span id="nameError" class="error-message"></span>
        </div>
        <div class="input-group">
          <input type="number" id="mobile" name="mobile" placeholder="Mobile Number" required>
          <span id="mobileError" class="error-message"></span>
        </div>
        <div class="input-group">
          <input type="email" id="email" name="email" placeholder="Email" required>
          <span id="emailError" class="error-message"></span>
        </div>
        <div class="input-group">
            <input type="password" id="password" name="password" min="8" max="20" placeholder="Password (at least 8 characters, one uppercase, one lowercase, one special character, one number)" required>
          <span id="passwordError" class="error-message"></span>
        </div>
        <div class="input-group">
          <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
          <span id="confirmPasswordError" class="error-message"></span>
        </div>
        <div class="input-group">
          <select id="gender" name="gender" required>
            <option value="" disabled selected>Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
          <span id="genderError" class="error-message"></span>
        </div>
        <div class="input-group">
          <input type="number" id="age" min="10" max="100" name="age" placeholder="Age" required>
          <span id="ageError" class="error-message"></span>
        </div>
        <button type="submit" class="signup-btn" onclick="validateForm(event)">Sign up</button>
        <div class="success-message" id="success-message"></div>
    </div>
  </div>
    </form>
  <script>
    function validateForm(event) {
      var name = document.getElementById('name').value;
      var mobile = document.getElementById('mobile').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var confirmPassword = document.getElementById('confirmPassword').value;
      var gender = document.getElementById('gender').value;
      var age = document.getElementById('age').value;
      var nameError = document.getElementById('nameError');
      var mobileError = document.getElementById('mobileError');
      var emailError = document.getElementById('emailError');
      var passwordError = document.getElementById('passwordError');
      var confirmPasswordError = document.getElementById('confirmPasswordError');
      var genderError = document.getElementById('genderError');
      var ageError = document.getElementById('ageError');
      var successMessage = document.getElementById('success-message');
      nameError.textContent = '';
      mobileError.textContent = '';
      emailError.textContent = '';
      passwordError.textContent = '';
      confirmPasswordError.textContent = '';
      genderError.textContent = '';
      ageError.textContent = '';
      successMessage.textContent = '';
      if (name === '') {
        nameError.textContent = 'Please enter your name.';
        event.preventDefault();
      }
      if (mobile === '') {
        mobileError.textContent = 'Please enter mobile number.';
        event.preventDefault();
      } else if (!/^\d{10}$/.test(mobile)) {
        mobileError.textContent = 'Mobile number must be 10 digits.';
        event.preventDefault();
      }
      if (email === '') {
        emailError.textContent = 'Please enter your email address.';
        event.preventDefault();
      } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        emailError.textContent = 'Please enter a valid email address.';
        event.preventDefault();
      }
      if (password === '') {
        passwordError.textContent = 'Please enter password.';
        event.preventDefault();
      } else if (!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/.test(password)) {
        passwordError.textContent = 'Password must contain at least 8 characters, one uppercase letter, one lowercase letter, one special character, and one number.';
        event.preventDefault();
      }
      if (confirmPassword === '') {
        confirmPasswordError.textContent = 'Please confirm your password.';
        event.preventDefault();
      } else if (password !== confirmPassword) {
        confirmPasswordError.textContent = 'Passwords do not match.';
        event.preventDefault();
      }
      if (gender === '') {
        genderError.textContent = 'Please select gender.';
        event.preventDefault();
      }
      if (age === '') {
        ageError.textContent = 'Please enter age.';
        event.preventDefault();
      }
//      if (nameError.textContent === '' && mobileError.textContent === '' && emailError.textContent === '' && passwordError.textContent === '' && confirmPasswordError.textContent === '' && genderError.textContent === '' && ageError.textContent === '') {
//        var successMessageText = name + ' successfully signed up.';
//        successMessage.textContent = successMessageText;
//        setTimeout(function() {
//          window.location.href = 'home.php'; // Redirect to home page after 2 seconds
//        }, 2000);
        // Prevent the form from submitting immediately
        event.preventDefault();
      }
    }
  </script>
  
</body>
</html>