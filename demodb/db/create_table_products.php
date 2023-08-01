<?php 
    include "../connect_db.php";

    $conn = connect();

    $sql = "create table products( id INT AUTO_INCREMENT, name VARCHAR(200) NOT NULL, description VARCHAR(500),image VARCHAR(200), category_id INT,  primary key (id) )";

    if($conn->query($sql) === TRUE){
        echo "Tao table thanh cong!!";
    } else {
        echo "Tao tao tables that bai";
    };

    $conn->close();
?>