<?php 

    if(isset($_POST['check'])){
        $image = $_FILES['myfile']['tmp_name'];
        $size = getimagesize($image);
        $w = $size[0];
        $h = $size[1];
        ;echo "<strong>Dimensions: </strong>".$w.'x'.$h.'<br>';
        echo "<strong>Width: </strong>".$w.'<br>';
        echo "<strong>Height: </strong>".$h.'<br>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Image Dimensions</title>
</head>
<style>
    *{
        font-family: 'Poppins', sans-serif;
    }
</style>
<body>
   <form action="ImageDimensions.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <button type="submit" name="check">Upload</button>
   </form>
</body>
</html>