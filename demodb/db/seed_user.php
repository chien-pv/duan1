<?php 
    include "../connect_db.php";

    $conn = connect();
    $pass_default = md5("123456");
    for($i=1; $i < 10; $i++) { 
        $sql = "INSERT INTO users(name, salary, email, password) VALUES ('Tran Van $i','$i', 'nguyenvan$i@gmail.com', '$pass_default')";
        echo $sql;
        $conn->query($sql);
    }

    $conn->close();
?>