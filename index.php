<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="image">
  <input type="submit" value="Upload Image" name="submit">

<div class="conatiner">

<img src="getimage.php?id=1" alt="Image" height="400px" width="400px">
  <img src="getimage.php?id=4" alt="Image" height="400px" width="400px">
 

</div>

 
</form>    
</body>
</html>