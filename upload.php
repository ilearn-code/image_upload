<?php
require 'db_conn.php';

if(isset($_POST["submit"])) {
  $file = $_FILES["image"];
  $filename = $file["name"];
  $filetype = $file["type"];
  $filesize = $file["size"];
  $tmpname = $file["tmp_name"];
  
  // Check if the uploaded file is an image
  $imgsize = getimagesize($tmpname);
  if(!$imgsize) {
    die("File is not an image.");
  }
  
  // Open a connection to the database

  
  // Insert the image data into the database
  $data = addslashes(file_get_contents($tmpname));
  $sql = "INSERT INTO images (filename, filetype, filesize, data) VALUES ('$filename', '$filetype', $filesize, '$data')";
  $conn->query($sql);
  
  // Close the database connection
  $conn->close();
}
?>