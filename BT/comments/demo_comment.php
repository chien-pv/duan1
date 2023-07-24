<?php
    session_start();
?>
<?php 
include "./home.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
    <?php 
    foreach ($arr as $value) { ?>
        <div class='friend'>
            <img src='chrome-extension://ejmmioggcokagpjlajeilkakgphhmmbj/images/extension_icon.png'>
            <h3><?= $value["Name"] ?></h3>
            <p><?= $value["Content"] ?></p>
        </div>
    <?php }?>
    <form action="" method="post">
        <input type="hidden" name="user_id" value="1">
        <input name="content" type="text">
        <input type="submit" value="Send">
    </form>
</section>
<style>
      body {
    font: 14px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #333;
}
    a {
    color: #333;
    text-decoration: none;
    }

    h1, h2, h3 {
    font-weight: 400;
    }

    h1 {
    font-size: 30px;
    }

    h2 {
    font-size: 24px;
    }

    h3 {
    font-size: 20px;
    }

    img {
      height: auto;
      width: 100%;
    }

    section {
    padding: 30px 60px;
    }

    .friend img {
    height: 70px;
    width: 100px;
    display: block;
    }
</style>
</body>
</html>