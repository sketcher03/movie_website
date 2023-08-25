<?php
    session_start();
    include ("database.php"); // connecting  database 

    // Check if the user is logged in
    if (!isset($_SESSION['username'])) {
        // Redirect the user to the login page or display an error message
        header('Location: login_signup.php');
        exit;
    }
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

<?php

$userID = $_SESSION['username'];

// Prepare and execute the query to retrieve user details
$stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
$stmt->bind_param("i", $userID);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    // User found, display the details
    $row = $result->fetch_assoc();
    
    echo "<form method='POST'>";

    $fname = $row['fname'];
    $lname = $row['lname'];
    $username = $row['username'];
    $Email = $row['email'];
    $password = $row['password'];
        
    echo "<h5>User-Name:</h5><br><br>";
    echo "<input id = 'username' type='text' name='username' value='$username'><br><br>";
    echo "<h4>Email:</h4><br><br>";
    echo "<input id = 'email' type='text' name='email' value='$Email'><br><br>";
    echo "<h4>First-Name:</h4><br><br>";
    echo "<input id = 'fname' type='text' name='fname' value='$fname'><br><br>";
    echo "<h4>Last-Name:</h4><br><br>";
    echo "<input id = 'lname' type='text' name='lname' value='$lname'><br><br>";
    echo "<h4>Change-Password:</h4><br><br>";
    echo "<input id = 'password' type='password' name='password' value='$password'><br><br>";
    


}
else {
    echo "<h4>User not found</h4>";
}

// Close the database connection
$stmt->close();

?>

<?php
    if (isset($_POST['updateButton'])){

        $newpassword = $_POST['password'];
        $newfname = $_POST['fname'];
        $newlname = $_POST['lname'];
        $newusername = $_POST['username'];
        $newEmail = $_POST['email'];

        $select = mysqli_query($conn, "SELECT * from user where username= '$newusername'") or die('query failed');

            $md5pass = md5($newpassword);
            $sql = "UPDATE user SET fname = '$newfname', lname = '$newlname', username = '$newusername', password = '$md5pass', email = '$newEmail' WHERE user.username = '$username'";
            $update = mysqli_query($conn,$sql)or die('query failed');


            if($update){
                echo 'Signup Completed';
                header('location:indexx.php');
            }
            else{
                echo 'Signup Failed';
                header ('location:login_signup.php');
            }
        
    }
        
    echo "<hr><br><br>"; // Add a horizontal line between records
    echo "</form>";

?>

<?php 
if (isset($_POST['deleteButton'])) {

    $sql = "DELETE FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        echo "<h5>Account deleted successfully!</h5><br>";
    } else {
        echo "<h5>Account delete failed</h5><br>" . mysqli_error($conn);
    }
}

$conn->close();

?>

        <form method="post" action="">
            <!--<label for="usernameToDelete">Username to delete:</label>
            <input type="text" name="usernameToDelete" id="usernameToDelete" required>-->
            <button type='submit' name='updateButton'>Update</button>;
            <button type='submit' name='deleteButton'>Delete Account</button>;
            
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
