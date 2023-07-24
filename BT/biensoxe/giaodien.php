<?php include './xuly.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="giaodien.php" method="get">
        <label for="tinh">Chọn Tĩnh thành:</label>

        <select name="tinh" id="tinh">
            <?php 
                foreach ($tinhthanh as $value) {
                    $selected = "";
                    if($_GET["tinh"] == $value){
                        $selected = "selected" ;
                    }
                    
                    echo "<option $selected value=". "\"$value\"" . ">$value</option>";
                }
            ?>
            
        </select>
        <input type="submit" value="send">
    </form>
    <h4>
        <?php
            
            $number??="Không có dữ liệu";
            echo($number);
        ?>
    </h4>
</body>
</html>