<?php include './layouts/header.php' ?>
<?php 
switch ($_GET["controller"]) {
    case 'users':
        switch ($_GET["action"]) {
            case 'index':
                include './pages/users/index.php';
                break;
            case 'new':
                include './pages/users/new.php';
                break;
            
            default:
                include './pages/users/index.php';
                break;
        }
        break;
    case 'products':
        include './pages/products/index.php';
        break;
    
    default:
        include './pages/dashboard.php';
        break;
}
 ?>
<?php include './layouts/footer.php' ?>
