<?php 
    include "../connect_db.php";
    $conn = connect_db();
    $sql = "CREATE DATABASE example";

    if($conn->query($sql) === TRUE){
        echo "Tao DB thanh cong.";
    } else {
        echo "Khong tao duoc db.";
    }

    $conn->close();
?>