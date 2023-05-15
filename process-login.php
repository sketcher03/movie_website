<?php

if(empty($_POST["Username"])){
    die("Name is required");
}

if (!filter_var($_POST["email"])

print_r($_POST)