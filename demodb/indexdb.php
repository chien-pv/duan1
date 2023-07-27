<?php 
    include "./connect_db.php";
    $conn = connect();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $dataUsers = [];
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $dataUsers[]= $row;
    }
    } else {
        echo "0 results";
    }
    $conn->close();
    
?>