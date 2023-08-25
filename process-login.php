<?php

require_once('database.php');

session_start();

if(isset($_SESSION['username'])){
    
    header("Location: indexx.php");
    exit;
}

if(isset($_POST['submit'])){
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        echo $username;
        echo $password;

    
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        echo $result->num_rows;

        if ($result->num_rows == 1) {

            $_SESSION['username'] = $username;

            while ($row = $result->fetch_assoc()) {
                $_SESSION['username'] = $username;

                echo 'Login successful';

                header("Location:indexx.php");
                exit;
            }
       
            
        } else {
        
            $error = "Invalid username or password";
            echo $error;
        }
    }
    else{
        echo 'Please Fill In The Blanks';
    }
}


$conn->close();
?>