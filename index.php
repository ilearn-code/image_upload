<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="image">
  <input type="submit" value="Upload Image" name="submit">
</form>
<div class="conatiner">
<div class="row">
  <div class="col-12">
<img src="getimage.php?id=1" alt="Image" height="400px" width="300px">
<img src="getimage.php?id=4" alt="Image" height="400px" width="300px">
<img src="getimage.php?id=6" alt="Image" height="400px" width="300px">
<img src="getimage.php?id=7" alt="Image" height="400px" width="300px">
<img src="getimage.php?id=8" alt="Image" height="400px" width="300px">
</div>
<!-- <div class="col-12 col-lg-4"
<img src="getimage.php?id=7" alt="Image" height="400px" width="400px">
<img src="getimage.php?id=8" alt="Image" height="400px" width="400px">
<img src="getimage.php?id=9" alt="Image" height="400px" width="400px">
</div> -->
</div>

 
</form>    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>