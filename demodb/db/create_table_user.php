<?php 
    include "../connect_db.php";

    $conn = connect();

    $sql = "create table users( id INT AUTO_INCREMENT, name VARCHAR(20) NOT NULL, salary INT NOT NULL, primary key (id) )";

    if($conn->query($sql) === TRUE){
        echo "Tao table thanh cong!!";
    } else {
        echo "Tao tao tables that bai";
    };

    $conn->close();
?>