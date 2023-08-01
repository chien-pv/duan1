<?php 
  include './global.php';
  
  $_GET["controller"] ??= "homes";
  $_GET["action"] ??= "index";

  switch ( $_GET["controller"] ) {
    case 'homes':
      $layout = './views/homes/index.php';
      break;
    case 'users':
      switch ($_GET["action"]) {
        case 'index':
          $layout = './views/users/index.php';
          break;
        case 'new':
          $layout = './views/users/new.php';
          break;
        default:
          $layout = './views/users/index.php';
          break;
      }
      break;
    case 'products':
      $layout = './views/products/index.php';
      break;
    default:
      $layout =  './views/homes/index.php';
      break;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <?php include './layouts/header.php'?>
<body>
<div class="container-fluid">
  <div class="row flex-nowrap">
      <?php include './layouts/sidebar.php' ?>
      <div class="col py-3">
        <?php include $layout ?>
      </div>
  </div>
</div>
</body>
</html>