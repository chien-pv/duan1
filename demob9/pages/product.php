<?php
    var_dump($_FILES["image"]);

    $des = 'images/'.basename($_FILES["image"]["name"]);
    $file = $_FILES["image"]["tmp_name"];
    $err = $_FILES["image"]["error"];
    if($err==0 && move_uploaded_file($file, $des))
    echo "Upload file thanh cong";
 ?>
<section>
    <h2> Product </h2>
    <form enctype="multipart/form-data" action="?action=product" method="post">
        <input type="file" name="image" id="image">
        <input type="submit" value="Upload">
    </form>
</section>