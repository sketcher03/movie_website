<?php

require_once('database.php');

session_start();


if (isset($_POST['submit'])){

    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $Email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $CPassword = mysqli_real_escape_string($conn,$_POST['cpassword']);


    $select = mysqli_query($conn, "SELECT* from user where email = '$Email' AND password= '$password'") or die('query failed');
    
    if(empty($username)|| empty($password)){
        echo 'Please fill in the blanks';
    }

    elseif(mysqli_num_rows($select)>0){
        echo 'Use Already Exist';
    }

    else{
        if($password != $CPassword){
            $message[] = 'Password Did Not Match';
        }
        else{
            $md5pass = md5($password);
            $sql = "Insert into user(username, password, email, fname, lname) VALUES('$username', '$md5pass', '$Email', '$fname', '$lname')";
            $insert = mysqli_query($conn,$sql)or die('query failed');


            if($insert){
                echo 'Signup Completed';
                header('location:indexx.php');
            }
            else{
                echo 'Signup Failed';
                header ('location:login_signup.php');
            }
        }
    }
}
?>



