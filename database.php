<?php

$host = "localhost";
$dbname = "movie_review";
$username = "root";
$password = "";

$conn= mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    echo 'Please check your information';
}

?>
