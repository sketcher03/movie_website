<?php
session_start();
  include ("database.php"); // connecting  database 
  

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel ="stylesheet" href = "css\profile_page.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sen:wght@400;700;800&display=swap" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Movie Design</title>

    
</head>

     <!--nav bar-->

<body>


    <div class="navbar-container">

        <div class ="logo-container"><img class="logo" src="img/cover.png"></div>
        <a href="profile_page.php" class="nav-link"></a>

        <div class ="menu-container">

            <ul class="menu-list">

                <li class="menu-list-item">
                    <a href="indexx.php" class="nav-link">Home</a>
                </li>
                <li class="menu-list-item">
                    <a href="series_list.php" class="nav-link">TV Show</a>
                </li>
                <li class="menu-list-item">
                    <a href="movie_list.php" class="nav-link">Movies</a>
                </li>
                <li class="menu-list-item">
                    <a href="watchlist.php" class="nav-link">Watch-list</a>
                </li>
                <input class ="searchbar" type="text" placeholder="Search..">

            </ul>

        </div>

        <div class ="profile-container">

            <img class="profile-picture"  src = "img/profile.jpg">

            <div class="profile-text-container">

                <span class="profile-text">
                    <a href="login_signup.php" class="nav-link">Login</a>
                    <a href="profile_page.php" class="nav-link">profile</a>
                </span>
                    
            </div>

        </div>

    </div>
    


    <section class="product-details">
            
        <div class="profile-details">
            <h2>Profile </h2>
            <form action="">
                <h5>First-Name:</h5>
                <textarea id = "mytextarea" placeholder = "Your Name"></textarea>

                <h5>Last-Name:</h5>
                <textarea id = "mytextarea" placeholder = "Your Name"></textarea>

                <h4>Email:</h4>
                <textarea  id = "mytextarea" placeholder = "Your Email"></textarea>

                <h4>Change Password:</h4>
                <textarea  id = "mytextarea" placeholder = "New Password"></textarea><br><br>

                <button type="submit">Update</button>
           
                <button>Delete Your Account</button>

            </form>
        </div>

    </section>

    <!-- footer section -->
    <footer>
        <h3>Movie Club</h3>
        <p>For more information on us,<br> please follow the links below</p>

        <div class="socials">
            <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-behance" target="_blank"></i></a>
            <a href="#"><i class="fa-brands fa-artstation" target="_blank"></i></a>
        </div>

        <h6>© 2022 Movie Club - All Rights Reserved</h6>
    </footer>   

</body>
</html>
