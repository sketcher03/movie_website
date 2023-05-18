<?php
session_start();
    $_SESSION;

?>


<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel ="stylesheet" href="movie_list_style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sen:wght@400;700;800&display=swap" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Movie Design</title>

    
</head>


<!--nav bar-->

<body>

    <div class="navbar">

        <div class="navbar-container">

            <div class ="logo-container"><img class="logo" src="img/cover.png"></div>

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

        
    </div>


    <div class="content-container">

        <!--series list-->

        <div class="series-list-container">

        

        <div class="series-list-wrapper">

            <div class="series-list">


                <div class="series-list-item">
                    <img class="series-list-item-img" src="img/s1.jpg" alt="">
                    <span class="series-list-item-title">Citadel</span>
                    <button class="series-list-item-button">Watch</button>
                </div>


                <div class="series-list-item">
                    <img class="series-list-item-img" src="img/s2.jpg" alt="">
                    <span class="series-list-item-title">The Nevers</span>
                    <button class="series-list-item-button">Watch</button>
                </div>


                <div class="series-list-item">
                    <img class="series-list-item-img" src="img/s3.jpg" alt="">
                    <span class="series-list-item-title">Money Heist</span>
                    <button class="series-list-item-button">Watch</button>
                </div>


                <div class="series-list-item">
                    <img class="series-list-item-img" src="img/s4.jpg" alt="">
                    <span class="series-list-item-title">Farzi</span>
                    <button class="series-list-item-button">Watch</button>
                </div>


                <div class="series-list-item">
                    <img class="series-list-item-img" src="img/s5.jpg" alt="">
                    <span class="series-list-item-title">Wednesday</span>
                    <button class="series-list-item-button">Watch</button>
                </div>


                <div class="series-list-item">
                    <img class="series-list-item-img" src="img/s6.jpg" alt="">
                    <span class="series-list-item-title">I'll Be Watching</span>
                    <button class="series-list-item-button">Watch</button>
                </div>


                <div class="series-list-item">
                    <img class="series-list-item-img" src="img/s7.jpg" alt="">
                    <span class="series-list-item-title">House of the Dragon</span>
                    <button class="series-list-item-button">Watch</button>
                </div>


                <div class="series-list-item">
                    <img class="series-list-item-img" src="img/s8.jpg" alt="">
                    <span class="series-list-item-title">The Winchesters</span>
                    <button class="series-list-item-button">Watch</button>
                </div>


            </div>

        </div>

        </div>

        <div class="series-list-container">
        
            <div class="series-list-wrapper">
                <div class="series-list">
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s9.jpg" alt="">
                        <span class="series-list-item-title">The Crown</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s10.jpg" alt="">
                        <span class="series-list-item-title">Altered Carbon</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s5.jpg" alt="">
                        <span class="series-list-item-title">Wednesday</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s11.jpg" alt="">
                        <span class="series-list-item-title">The Last of Us</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s12.jpg" alt="">
                        <span class="series-list-item-title">Hercai</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s7.jpg" alt="">
                        <span class="series-list-item-title">House of the Dragon</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s6.jpg" alt="">
                        <span class="series-list-item-title">I'll Be Watching</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s8.jpg" alt="">
                        <span class="series-list-item-title">The Winchesters</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

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