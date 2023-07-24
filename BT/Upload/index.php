<?php 
   var_dump($_FILES["image"]);
   $dest = "images/" . basename($_FILES["image"]["name"]);
   $file = $_FILES["image"]["tmp_name"];
   $err = $_FILES["image"]["error"];
   if($err==0 && move_uploaded_file($file, $dest))
    echo "Upload file thành công !!!!"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="file" name="image" id="image">
        <input type="submit" value="Upload">
    </form>
</body>
</html>