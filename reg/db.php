<?php

$servername = "localhost";
$username = "u155731_newdb";
$password = "0A9r2C2o";
$dbname = "u155731_newdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
} else {
}
?>