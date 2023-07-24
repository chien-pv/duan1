<?php include './layouts/header.php'; ?>
    <main>
        <?php 
            switch ($_GET["action"]) {
                case 'contact':
                    include './pages/contact.php';
                    break;
                case 'product':
                    include './pages/product.php';
                    break;
                default:
                    include './pages/home.php';
                    break;
            }; 
        ?>
    </main>
<?php include './layouts/footer.php'; ?>
