<?php

$mysqli = mysqli_connect("localhost", "root", "", "zad2", 3306);
 
if($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

