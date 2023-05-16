<?php

require_once('database.php');

session_start();

if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    echo $username;
    echo $password;

    $query = "SELECT * from user where username = '$username' AND password= 'md5($password)'";
    $select = mysqli_query($conn, $query) or die('query failed');


    if(empty($username)|| empty($password)){
        echo '<script type ="text/javaScript">';
        echo 'alter("Please Fill In The Blanks")';
        echo '</script>';
    }

    elseif(mysqli_num_rows($select)>0){
        $row = mysqli_fetch_assoc($select);
        echo $row;
        header('location:indexx.php');
    }
    else{
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Incorrect Username or Password")';  
        echo '</script>';
    }
}

?>