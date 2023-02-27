<?php
require 'db_conn.php';

// $id = $_GET["id"];

$sql = "SELECT * FROM images";
$result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_assoc($result);

// echo $row["data"];
// $conn->close();
$images=array();
if(mysqli_num_rows($result))
{
    while($row=mysqli_fetch_assoc($result))
    {
        header("Content-Type: " . $row["filetype"]);
      $images=array(
     
        'id'=>$row['id'],
        'data'=>$row['data']



      );
    }
}

header('Content-Type:application/json');
echo json_encode($images);

mysqli_close($conn);

?>