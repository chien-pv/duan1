<?php
include "./config/connect.php";
include "./dao/pdo.php";
include "./dao/useDAO.php";

// getAllUser();
// getUserById(10);
deleteUser(6); 

?>

<?php include './layouts/header.php'; ?>

<?php 
switch ($_GET["action"]) {
     case 'about':
        include './pages/about.php';
        break;
    case 'home':
        include './pages/home.php';
        break;
    default:
        include './pages/home.php';
        break;
}
?>

<?php include './layouts/footer.php' ?>