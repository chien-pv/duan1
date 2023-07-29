

<?php 
    include "../connect_db.php";
    $conn = connect_db();

    for ($i=1; $i < 10; $i++) { 
        $sql = "INSERT INTO users(name, salary) VALUES ('Nguyen Van $i','$i')";
        $conn->query($sql);
    }

    $conn->close();
?>




