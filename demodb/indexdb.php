<?php 
    include "./connect_db.php";
    $conn = connect();
    
    if(isset($_GET["search"])){
        $search = $_GET["search"];
        $sql = "SELECT * FROM users WHERE name LIKE '%$search%'";
    } else {
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        $totalPage = ceil(($result->num_rows)/5);
    }

    if(isset($_GET["page"])){
        $page = (int)$_GET["page"];
        $start_from = ($page-1)*5;
        $sql = $sql." LIMIT $start_from, 5";
    } else {
        $sql = $sql." LIMIT 0, 5";
    }

    $result = $conn->query($sql);
    $dataUsers = [];
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $dataUsers[]= $row;
    }
    } else {
        $noresult = "0 Result";
    }
    $conn->close();
    
?>