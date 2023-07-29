<?php 
    include "../connect_db.php";
    $conn = connect_db();
    $sql = "create table users( id INT AUTO_INCREMENT, name VARCHAR(20) NOT NULL, salary INT NOT NULL, primary key (id) )";

    if($conn->query($sql) === TRUE){
        echo "Tao Table thanh cong.";
    } else {
        echo "Khong tao duoc Table.";
    }

    $conn->close();
?>