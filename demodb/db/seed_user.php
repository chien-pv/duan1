<?php 
    include "../connect_db.php";

    $conn = connect();

    for($i=1; $i < 10; $i++) { 
        $sql = "INSERT INTO users(name, salary) VALUES ('Tran Van $i','$i')";
        echo $sql;
        $conn->query($sql);
    }

    $conn->close();
?>