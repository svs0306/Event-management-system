<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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

        .hero-image {
            height: 700px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            padding-bottom: 10%;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .content {
            margin-right: 100%;
        }

        .content1 {
            width: 400px;
            height: 40px;
            border: 10px;
            border-color: aqua;
            background-color: black;
            color: white;
            text-align: center;
            font-size: 29px;
            padding-left: 10%;
            border-radius: 8px;
            font-family: 'Times New Roman', Times, serif;
        }

        .line {
            line-height: 30px;
        }

        .corner1 {
            position: relative;
            padding-top: 90%;
            top: 100%;
            left: 70%;
        }

        .corner {
            position: relative;
            top: 100%;
            left: 70%;
        }

        .owl-carousel img {
            width: 400px;
            height: 300px;
            border-radius: 10%;
            border: 5px solid white;
            background-color: white;
        }

        .owl-carousel {
            display: flex;
            justify-content: space-between;
        }
        .matter1{
    background-color: lightgray;
    

}

    </style>
</head>
<body>

    <div class="navbar">
  <img src="images/ee.jpeg" alt="Epic Events" style="margin-left: 20px;height: 50px; width: 50px">
  <a href="home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Type of Event<i class="fa fa-caret-down"></i></button>
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
    
<div>
    <div>
        <h1 style="font-size:50px; font-family: 'Playfair Display', Times, serif ; text-align: center;">ABOUT US</h1>
        <img src="images/title.jpg" style="width: 7%; display: block; margin-left: auto; margin-right: auto;"><br><br>
    </div>
</div>

<div>
    <table style="margin-right: 9%; margin-left: 8%; ">
        <tr>
            <td>
                <p class="line" style="margin-right: 10%; font-size: 20px; font-family: 'Times New Roman', Times, serif;">
                    <b> Epic Events & Entertainments Pvt. Ltd</b><br><br>
                    Epic Events & Entertainments Pvt. Ltd. stands as a premier event management planning company, devoted to delivering a diverse range of services tailored for both corporate and personal events. From the grandeur of live shows, celebrity events, and star nights to the sophistication of product launches, theme parties, and the emotional richness of weddings and birthdays, we curate experiences that transcend expectations.
<br><br>
                    Our team of seasoned event planners, armed with over two decades of unwavering commitment to the industry, ensures that your event is not just an occasion but a spectacle. We take pride in offering the best-in-class services at the most competitive rates, emphasizing creativity and innovation to achieve unparalleled client satisfaction.<br><br>
                    At Epic Events, we are your comprehensive solution for all event planning needs. From the meticulous selection of venues, hotel bookings, and hospitality services to the artistic touch of decor recommendations, catering, and the strategic management of celebrities, we take care of every detail. Our commitment extends beyond logistics; we are dedicated to transforming your event into a lasting memory. From conception to execution, every element is crafted to transform your dream event into a tangible and remarkable reality.<br><br>
                </p>
            </td>
            <td>
                <div class="content">
                    <div class="content1"><p>EVENT SERVICES</p></div>
                    <div class="content1"><p>Complete Event Planning</p></div>
                    <div class="content1"><p>Partial Event Planning</p></div>
                    <div class="content1"><p>Luxury Event Planners</p></div>
                    <div class="content1"><p>Event Organizers</p></div>
                    <div class="content1"><p>Event Photographers</p></div>
                    <div class="content1"><p>Theme-Based Event Planning</p></div>
                </div>
            </td>
        </tr>
    </table>
</div>
<p style="text-align: center;  font-family: 'Playfair Display', serif; font-size: 40px;"><b>Our Photo Gallery</b></p>
<img src="images/title.jpg" style="width: 7%; display: block; margin-left: auto; margin-right: auto;"><br>

<!-- Your slider content goes here -->
<div class="owl-carousel">
    <div class="slider-item"><img src="images/image (2).png" alt="Image 1"></div>
    <div class="slider-item"><img src="images/w6.png" alt="Image 2"></div>
    <div class="slider-item"><img src="images/image (3).png" alt="Image 2"></div>
    <div class="slider-item"><img src="images/w9.png" alt="Image 2"></div>
    <div class="slider-item"><img src="images/image (5).png" alt="Image 2"></div>
    <div class="slider-item"><img src="images/image (6).png" alt="Image 1"></div>
    <div class="slider-item"><img src="images/w5.png" alt="Image 2"></div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Include your custom JS -->
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    });
</script>


</body>
</html>
