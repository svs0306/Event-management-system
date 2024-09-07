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
    <h1 style="font-family: Playfair Display; text-align: center; font-size: 40px">Birthday</h1>
        <img src="images/title.jpg" style="width: 7%; display: block; margin-left: auto; margin-right: auto;"><br><br>
 <div class="section">
    <table>
      <tr>
        <td><a href="register1.php"><img src="images/bd1.jpg" alt="birthday" /></a></td>
        <td class="text">
          <h1>Aesthetic</h1>
          <p>In the palette of birthday design, our event designers draw inspiration from various aesthetics, ensuring that
              each celebration is a harmonious blend of colors, themes, and decor that resonates with the celebrant's tastes.
              From whimsical and playful to elegant and sophisticated, we transform birthday parties into aesthetically pleasing
              experiences that delight both the honoree and guests.
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
          <p>In the realm of birthday design, our team focus on the versatility of indoor decoration, curating themes and accents that seamlessly
              blend with the venue's interiors. From stylish backdrops to thematic table settings, we pride ourselves on transforming indoor spaces
              into vibrant and visually captivating settings for birthday celebrations.
          </p>
        </td>
        <td><a href="register1.php"><img src="images/abd.png" alt="birthday" /></a></td>
      </tr>
    </table>
  </div>

  <div class="section">
    <table>
      <tr>
        <td><a href="register1.php"><img src="images/gbd.png" alt="birthday" /></a></td>
        <td class="text">
          <h1>Garden</h1>
          <p>A birthday celebration, like a garden-themed masterpiece, blossoms with the vibrancy of nature and the enchantment of the outdoors.
              Our team specializes in infusing birthdays with the charm of a garden theme, transforming venues into lush, inviting
              spaces that evoke the serenity and beauty of a blooming garden.
          </p>
        </td>
      </tr>
    </table>
  </div>

  <div class="section">
    <table>
      <tr>
        <td class="text">
          <h1>Aesthetic</h1>
          <p>Just as an aesthetic enhances the visual appeal of a space, our team is dedicated to turning every birthday 
              into a stunning visual affair. Allow us to weave an aesthetic that complements the celebrant's vision, creating a
              birthday celebration that not only reflects their unique style but also leaves a lasting impression on all attendees.
          </p>
        </td>
        <td><a href="register1.php"><img src="images/bd2.jpg" alt="birthday" /></a></td>
      </tr>
    </table>
  </div>
</body>

</html>
