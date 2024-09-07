<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- Add your CSS styles or link to an external stylesheet here -->
    <title>User Profile</title>
    <style>
        body {
            font-family: Oswald;
            margin: 0;
            padding: 0;
        }

        .navbar {
            overflow: auto;
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
            background-color: rgb(245, 124, 201);
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

        /* Add styles for the user details */
        .profile-container {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            display: flex;
            align-items: center;
        }

        .profile-info img {
            border-radius: 50%;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="images/ee.jpeg" alt="Epic Events" style="margin-left: 20px; height: 50px; width: 50px">
        <a href="home.php">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Events <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="anniversary.php">Anniversary</a>
                <a href="birthday.php">Birthday</a>
                <a href="conference.php">Conference</a>
                <a href="wedding.php">Wedding</a>
            </div>
        </div> 
        <a href="gallery.php">Gallery</a>
        <a href="register1.php">Registration</a>
        <a href="feedback.php">Feedback Form</a>
        <a href="account.php">Account</a>
        <a href="logout.php">Logout</a>
    </div>

    <section class="profile-container">
        <div class="profile-info">
            <?php
                session_start();

                // Check if the user is logged in
                if (!isset($_SESSION['email'])) {
                    header("Location: login.php");
                    exit();
                }

                // Connect to your database (replace the placeholders with your actual database credentials)
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "ems";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Retrieve user details from the database based on the email in the session using prepared statement
                $email = $_SESSION['email'];
                $stmt = $conn->prepare("SELECT * FROM signup1 WHERE email = ?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    // Display user details
                    ?>
                    <div>
                        <!-- Uncomment this part if you want to display the user's profile picture -->
                        <!-- <img src="<?php echo $row['profile_picture']; ?>" alt="Profile Picture" width="100"> -->
                        <div>
                            <h2>Hello <?php echo $row['name']; ?>..!!</h2>
                            <p>Username:  <?php echo $row['name']; ?></p>
                            <p>Email:  <?php echo $row['email']; ?></p>
                            <p>Mobile: <?php echo $row['mobile'];?></p>
                       
                            <!-- Add more details as needed -->
                        </div>
                    </div>
                    <?php
                } else {
                    echo "User not found";
                }

                $stmt->close();
                $conn->close();
            ?>
        </div>
    </section>

<!--    <footer>
        <p>&copy; 2023 Your E-commerce Website</p>
    </footer>-->
</body>
</html>
