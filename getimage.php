<?php
require 'db_conn.php';

$id = $_GET["id"];
$sql = "SELECT * FROM images WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
header("Content-Type: " . $row["filetype"]);
echo $row["data"];
$conn->close();
?>