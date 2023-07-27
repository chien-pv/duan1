<?php 
    include "../connect_db.php";

    $conn = connect();

    $sql = "CREATE DATABASE demodb";

    if($conn->query($sql) === TRUE){
        echo "Tao DB thanh cong!!";
    } else {
        echo "Tao DB that bai";
    };

    $conn->close();
    
?>