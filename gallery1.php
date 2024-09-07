<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Oswald|Playfair Display' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gallery</title>
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

        
       @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
       
       
       

        table {
            width: 100%;
            text-align: center;
            border-collapse: collapse; /* Remove spacing between table cells */
        }

        .img1 {
            padding-top: 10%;
            width: 400px; /* Set a fixed width */
            height: 300px; /* Set a fixed height */
            display: block;
            margin: 0 auto;
            border-radius: 10px; /* Add border radius for rounded corners */
            overflow: hidden; /* Ensure content stays within rounded borders */
    
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
    
    <br>
    <p style="text-align: center;  font-family: 'Playfair Display', serif; font-size: 40px;  margin: 0%;"><b>Events Gallery</b></p><br>
     <img src="images/title.jpg" style="height: 20px; width: 100px; display: block; margin-left: auto; margin-right: auto;"><br>
    <table>
        <tr>
            <td colspan="3">
                <h1 style="font-size: 35px;font-family: Playfair Display;text-align: center;">Wedding</h1>
            </td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">
                <img src="images/w1.png" alt="Image 1" class="img1"><br>
                
            </td>
            <td>
                <img src="images/w2.png" alt="Image 2" class="img1"><br>  
                
            </td>
            <td style="padding-right: 100px;">
                <img src="images/w3.png" alt="Image 3" class="img1"><br>
                
            </td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">
                <img src="images/w4.png" alt="Image 1" class="img1"><br>
               
            </td>
            <td>
                <img src="images/w5.png" alt="Image 2" class="img1"><br>
               
            </td>
            <td style="padding-right: 100px;">
                <img src="images/w6.png" alt="Image 3" class="img1"><br>
                
            </td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">
                <img src="images/w7.png" alt="Image 1" class="img1"><br>
                
            </td>
            <td>
                <img src="images/w8.png" alt="Image 2" class="img1"><br>
                
            </td>
            <td style="padding-right: 100px;">
                <img src="images/w9.png" alt="Image 3" class="img1"><br>
                
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <h1 style="font-size: 35px;font-family: Playfair Display;text-align: center;">Birthday</h1>
            </td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">
                <img src="images/bday1.jpg" alt="Image 1" class="img1"><br>
               
            </td>
            <td>
                <img src="images/bday2.jpg" alt="Image 2" class="img1"><br>
               
            </td>
            <td style="padding-right: 100px;">
                <img src="images/bday3.jpg" alt="Image 3" class="img1"><br>
                
            </td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">
                <img src="images/bday4.jpg" alt="Image 1" class="img1"><br>
               
            </td>
            <td>
                <img src="images/bday5.jpg" alt="Image 2" class="img1"><br>
               
            </td>
            <td style="padding-right: 100px;">
                <img src="images/bday6.jpeg" alt="Image 3" class="img1"><br>
                
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <h1 style="font-size: 35px;font-family: Playfair Display;text-align: center;">Corporate Events</h1>
            </td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">
                <img src="images/sem1.jpeg" alt="Image 1" class="img1"><br>
               
            </td>
            <td>
                <img src="images/sem2.jpg" alt="Image 2" class="img1"><br>
               
            </td>
            <td style="padding-right: 100px;">
                <img src="images/sem3.jpg" alt="Image 3" class="img1"><br>
                
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <h1 style="font-size: 35px;font-family: Playfair Display;text-align: center;">Anniversary</h1>
            </td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">
                <img src="images/anni1.jpg" alt="Image 1" class="img1"><br>
               
            </td>
            <td>
                <img src="images/anni2.jpg" alt="Image 2" class="img1"><br>
               
            </td>
            <td style="padding-right: 100px;">
                <img src="images/anni3.jpeg" alt="Image 3" class="img1"><br>
                
            </td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">
                <img src="images/anni4.jpg" alt="Image 1" class="img1"><br>
               
            </td>
            <td>
                <img src="images/anni5.jpg" alt="Image 2" class="img1"><br>
               
            </td>
            <td style="padding-right: 100px;">
                <img src="images/anni6.jpg" alt="Image 3" class="img1"><br>
                
            </td>
        </tr>
    </table>
</body>
</html>
