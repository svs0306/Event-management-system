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
    <h1 style="font-family: Playfair Display; text-align: center; font-size: 40px">Wedding</h1>
        <img src="images/title.jpg" style="width: 7%; display: block; margin-left: auto; margin-right: auto;"><br><br>
<div class="section">
    <table>
      <tr>
        <td><a href="register1.php"><img src="images/awd.png" alt="birthday" /></a></td>
        <td class="text">
          <h1>Royal</h1>
          <p>Just as royalty demands perfection, our event management team is dedicated to orchestrating a wedding that befits
              a king and queen. Let us turn your dream of a royal celebration into reality, crafting an event that surpasses expectations
              and leaves you and your guests feeling like true royalty.
          </p>
        </td>
      </tr>
    </table>
  </div>

  <div class="section">
    <table>
      <tr>
        <td class="text">
          <h1>Floral</h1>
          <p>In the canvas of wedding design, our event designers draw inspiration from the enchanting world of florals. 
              From intricate floral arrangements to the delicate fragrance that fills the air, we weave the magic of flowers
              into every aspect of your celebration, creating a wedding that is as timeless and captivating as a blooming garden.
          </p>
        </td>
        <td><a href="register1.php"><img src="images/floralwed.jpeg" alt="birthday" /></a></td>
      </tr>
    </table>
  </div>

  <div class="section">
    <table>
      <tr>
        <td><a href="register1.php"><img src="images/themedwed.jpeg" alt="birthday" /></a></td>
        <td class="text">
          <h1>Theme Based</h1>
          <p>A wedding, much like a theme-based masterpiece, is an artistic expression that tells the unique story of a couple's journey.
              Our event management company specializes in crafting weddings that transcend tradition, creating immersive and personalized
              experiences where every element contributes to a cohesive and enchanting theme.
          </p>
        </td>
      </tr>
    </table>
  </div>

  <div class="section">
    <table>
      <tr>
        <td class="text">
          <h1>Backdrop and Drapery</h1>
          <p>In the tapestry of wedding design, our event designers draw inspiration from the transformative power of backdrops and drapery, weaving
              a harmonious blend of colors and textures that encapsulate the unique essence of your union. From enchanting arches to cascading drapes,
              we create a stunning visual landscape that enhances the beauty of your special day.
          </p>
        </td>
        <td><a href="register1.php"><img src="images/backdropwed.jpg" alt="birthday" /></a></td>
      </tr>
    </table>
  </div>
  <div class="section">
    <table>
      <tr>
        <td><a href="register1.php"><img src="images/signwed.jpg" alt="birthday" /></a></td>
        <td class="text">
          <h1>Signs</h1>
          <p>Much like signboards that mark significant points along a route, our event management team dedicates itself to ensuring your wedding unfolds
              with clarity and charm. Let us design and implement signboards that not only serve a functional purpose but also add a touch of sophistication
              and coherence to your memorable day.
          </p>
        </td>
      </tr>
    </table>
  </div>

  <div class="section">
    <table>
      <tr>
        <td class="text">
          <h1>Lights and Candles</h1>
          <p>A wedding, much like the glow of lights and candles, illuminates the path of love with warmth and radiance. Our team
              specializes in creating weddings where the play of lights and flicker of candles intertwine, transforming your celebration into a captivating
              dance of luminosity that mirrors the brilliance of your union.
          </p>
        </td>
        <td><a href="register1.php"><img src="images/lightswed.jpg" alt="birthday" /></a></td>
      </tr>
    </table>
  </div>
</body>

</html>
