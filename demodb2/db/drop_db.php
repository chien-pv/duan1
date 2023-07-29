<?php 
    include "../connect_db.php";
    $conn = connect_db();
    $sql = "DROP DATABASE example";

    if($conn->query($sql) === TRUE){
        echo "Xoa DB thanh cong.";
    } else {
        echo "Khong Xoa duoc db.";
    }

    $conn->close();
?>