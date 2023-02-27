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
  <input type="file" name="image">
  <input type="submit" value="Upload Image" name="submit">
</form>



<div class="container">

</div>

 





 
 
   
</body>

<script>
  function getProducts() {
   // Create an XMLHttpRequest object
var xhr = new XMLHttpRequest();

// Set up a callback function to handle the response
xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    // Parse the JSON response
    var images = JSON.parse(xhr.responseText);
  
    // Display the images on the web page
    var imageContainer = document.getElementById('container');
    for ( var image of images) {
      
      var imageElement = document.createElement('img');
      imageElement.setAttribute('src', image[i].id);
      imageContainer.appendChild(imageElement);
    }
  }
};

// Send the XHR request to retrieve the images
xhr.open('GET', 'getimage.php');
xhr.send();

  }
 
  setInterval(getProducts, 1000);
</script> 


</html>