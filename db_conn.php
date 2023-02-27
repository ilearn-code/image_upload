<?php

$hostname     = "localhost"; // enter your hostname
$username     = "root";  // enter your table username
$password     = "";   // enter your password
$databasename = "basket_db";  // enter your database
// Create connection 
$conn = mysqli_connect($hostname, $username, $password,$databasename);
 // Check connection 
if ($conn->connect_error) { 
die("Unable to Connect database: " . $conn->connect_error);
 }
?>