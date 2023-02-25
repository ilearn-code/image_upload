<?php
require 'db_conn.php';

$id = $_GET["id"];
$sql = "SELECT * FROM images WHERE id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
header("Content-Type: " . $row["filetype"]);
echo $row["data"];
$conn->close();
?>