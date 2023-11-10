<?php
function connect_db() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "duan1";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
?>