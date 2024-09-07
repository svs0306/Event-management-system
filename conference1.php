<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA_Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='http://fonts.googleapis.com/css?family=Oswald|Playfair Display' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    .section {
      width: 75%;
      margin: 5rem auto 0 auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table img {
      height: 250px;
      width: 400px;
      margin-right: 20px;
    }

    table h1 {
      color: lightpink;
      margin-bottom: 10px;
      font-family: Times new roman;
    }

    table p {
      color: black;
      font-family: Playfair Display;
      font-size: 20px;
    }

    .text {
      padding: 30px;
    }

    .section:not(:first-child) {
      margin-top: 40px;
      margin-bottom: 30px;
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
    <h1 style="font-family: Playfair Display; text-align: center; font-size: 40px">Corporate Events</h1>
        <img src="images/title.jpg" style="width: 7%; display: block; margin-left: auto; margin-right: auto;"><br><br>
  <div class="section">
    <table>
      <tr>
        <td><a href="loginreg1.php"><img src="images/cori1.jpeg" alt="birthday" /></a></td>
        <td class="text">
          <h1>Aesthetic</h1>
          <p>From venue selection to audiovisual setup, our dedicated event management team is experienced in seamlessly
              executing seminars and conferences that leave a lasting impression. We understand the importance of a well-organized
              event, and our expertise lies in transforming your vision into a dynamic and thought-provoking experience for participants.
          </p>
        </td>
      </tr>
    </table>
  </div>

  <div class="section">
    <table>
      <tr>
        <td class="text">
          <h1>Blue Colored</h1>
          <p>Elevate your corporate events with our event management expertise, where precision meets professionalism.
              Our team is dedicated to crafting seminars and conferences that not only meet but exceed your expectations,
              creating an environment that fosters collaboration, innovation, and knowledge exchange.
          </p>
        </td>
        <td><a href="loginreg1.php"><img src="images/cori2.jpeg" alt="birthday" /></a></td>
      </tr>
    </table>
  </div>

  <div class="section">
    <table>
      <tr>
        <td><a href="loginreg1.php"><img src="images/cori3.jpeg" alt="birthday" /></a></td>
        <td class="text">
          <h1>Hall</h1>
          <p>From venue selection to meticulous logistics planning, our dedicated team ensures that your seminars and
              conferences are flawlessly executed, allowing you to focus on delivering compelling content while we take
              care of every detail behind the scenes.
          </p>
        </td>
      </tr>
    </table>
  </div>

  <div class="section">
    <table>
      <tr>
        <td class="text">
          <h1>Indoor</h1>
          <p>Transform your seminars and conferences into unforgettable experiences with our event management services.
              Whether it's coordinating dynamic panel discussions or creating interactive workshops, we excel in delivering
              events that resonate with your audience, leaving a positive and enduring impression.
          </p>
        </td>
        <td><a href="loginreg1.php"><img src="images/cori4.jpeg" alt="birthday" /></a></td>
      </tr>
    </table>
  </div>
</body>

</html>
