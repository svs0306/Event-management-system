<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald|Playfair Display' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="indexstyles.css">
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

<div class="heading">
      <br><br><b><p style="font-size: 30px; font-family: 'Playfair Display', serif;">EPIC EVENTS & ENTERTAINMENT</p></b><br>
      <img src="images/title.jpg" style="width: 7%; display: block; margin-left: auto; margin-right: auto;"><br>
      <marquee><p style="font-size: 20px;font-family: 'Playfair Display', serif; ">Epic Events & Entertainment, an award-winning
              and esteemed event management company, is widely recognized for its commitment to excellence.</p></marquee><br><br>
    </div>
    <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="images/v3_f1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="images/v3_f2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="images/v3_f3.jpg" style="width:100%"><br><br><br>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
      <script src="script.js"></script><br>
     
      
      
      <div class="service-swipe">
          <div class="diffSection" id="services_section" >
          <center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: black; font-family: 'Times New Roman', Times, serif;"><b>Epic Events Services</b></p></center>
          </div>
  
    <div class="service">
        
          <table>
            <tr>
                <td>
                <a href="#"><div class="serv"><img src="images/entertainment.png"><h3>Entertainment</h3>
                <p style="color:black; font-family: 'Times New Roman', Times, serif; font-size: 17px;">
                  Event is the most efficient <br>& direct tool for any communication.<br> Entertainment in an event helps<br> to leave a better </p></div></a>
                </p>
                </td>
                <td>       
        <a href="#"><div class="serv"><img src="images/choreo.png"><h3>Choreographers</h3><p style="color:black; font-family: 'Times New Roman', Times, serif; font-size: 17px;">The Epic Events & Entertainments<br>is a leading event management<br>company in India, catering to the<br>needs..</p></div></a></td> 
        <td><a href="#"><div class="serv"><img src="images/events.png"><h3>Events</h3><p  style="color:black; font-size: 17px; font-family: 'Times New Roman', Times, serif;">We know how important any<br> event that you do is to you<br> whether in the corporate field or<br> personally.</p></div></a></td> 
    </tr>
        
    <tr>
      <td> <a href="#"><div class="serv"><img src="images/wedvenue.png"><h3>Wedding Venues</h3><p style="color:black; font-family: 'Times New Roman', Times, serif; font-size: 17px;"> The Wedding is a once-in-<br>lifetime event and everyone<br> wants a ravishing venue for that<br> moment.</p></div></a></td>
        <td><a href="#"><div class="serv"><img src="images/bolly.png"><h3>Bollywood Singers</h3><p style="color:black; font-family: 'Times New Roman', Times, serif; font-size: 17px;">If you are planning to hold an <br>event for your company or in<br> your city with Bollywood Singers,<br> then Epic Events ..</p></div></a></td>
        <td><a href="#"><div class="serv"><img src="images/anchors.png"><h3>Anchors</h3><p style="color:black; font-size: 17px; font-family: 'Times New Roman', Times, serif;">Epic Events & Entertainments is<br> having a dynamic and vibrant<br> group of young professionals as<br> Anchors who..</p></div></a></td>
    </tr>
                </table>
    </div>
    </div><br>

    
    <br>
    <p style="text-align: center;  font-family: 'Playfair Display', serif; font-size: 40px;"><b>Our Photo Gallery</b></p><br>
    <img src="images/title.jpg" style="width: 7%; display: block; margin-left: auto; margin-right: auto;"><br><br>

    <!-- Your slider content goes here -->
    <div class="owl-carousel">
    <div class="slider-item"><img src="images/image (2).png" alt="Image 1" ></div>
    <div class="slider-item"><img src="images/w6.png" alt="Image 2" ></div>
    <div class="slider-item"><img src="images/image (3).png" alt="Image 2" ></div>
    <div class="slider-item"><img src="images/w9.png" alt="Image 2" ></div>
    <div class="slider-item"><img src="images/image (5).png" alt="Image 2" ></div>
    <div class="slider-item"><img src="images/image (6).png" alt="Image 1" ></div>
    <div class="slider-item"><img src="images/w5.png" alt="Image 2" ></div>
    <!-- Add more divs with images -->
  </div>
  
  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Include your custom JS -->
  <script src="script.js"></script>
  
  
  
  <table class="tables12">
      <tr>
        <td>
    <div class="rotate">
      
          <img src="images/52.jpg" class="img123" alt="sai">
    
     </div>
     </td>
    <td>
      <div class="matter">
        <h1 style="font-family: 'Times New Roman', Times, serif; font-size: 50px;text-align: center; color: lightpink;"><b>International Wedding Planner<b></h1><br>
        <p style="font-family: 'Times New Roman', Times, serif; font-size: 25px;">Epic Events and Entertainments Pvt Ltd specialises in planning lavish and flawless events. Our team has qualified and experienced event planners who get counted as the finest wedding designers and event organisers.</p>
      </div>
      </td>
      </tr>
    </table>
  
  
  
  
  <img src="images/title.jpg" style="width: 7%; display: block; margin-left: auto; margin-right: auto;"><br>
      
       <div class="matter1">
          <table>
              <tr>
                  <td style=" padding: 40px;padding-left: 80px;">
                      <p><b style="font-family: 'Times New Roman', Times, serif; font-size: 30px;">EPIC EVENTS & WEDDINGS</b><br><br>
                          Epic Events and Entertainments Pvt Ltd is passionate<br> about crafting charmingly timeless and elegant<br> luxurious weddings and events at stunning venues<br> throughout the world. As the leading wedding <br>designers and event organisers in Delhi and Gurgaon, <br>we are renowned to create authentic experiences <br>worth cherishing for a lifetime.</p>
                  </td>
                  <td style="padding-left: 150px; font-size: 20px"><b>LINKS</b><br>
                      <a href=home1.php>Home</a><br>
                      <a href=gallery1.php>Gallery</a><br>
                      <a href=aboutus.php>About Us</a><br>
                      
                      
                      </td>
                  <td style="padding-left: 150px; font-size: 20px;"><p><b>CONTACT US</b><br>
                          DLF PHASE - 2 L-25/9<br>
                          Near by Private Hospital Gurugram, Guntur 122002<br>
                          
                          Email : info@epicevents.in<br></p></td>
              </tr>
          </table>
      </div>



<script>
// Retrieve user information from local storage
var user = JSON.parse(localStorage.getItem('user'));

// Display welcome message with the username
if (user && user.name) {
  var welcomeMessage = "Welcome, " + user.name + "!";
  document.getElementById('welcome-message').textContent = welcomeMessage;
}
</script>
 


</body>
</html>
