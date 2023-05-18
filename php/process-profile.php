<?php

require_once('database.php');

session_start();


require_once('database.php');

$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "First-name: " . $row['fname'] . "<br>";
        echo "Last-name: " . $row['lname'] . "<br>";
        echo "Email: " . $row['email'] . "<br><br>";
    }
} else {
    echo "No records found.";
}

?>