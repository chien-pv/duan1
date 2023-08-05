<?php 
    session_start();
    if($_SESSION["user"]){
        header("location: index.php");
    }
    include './controllers/login_controller.php'; 
    $err = null;
    if(isset($_POST["user"])){
        $user_param_login = $_POST["user"];
        login($user_param_login);
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include './layouts/header.php';
 ?>
<body class="container">
    <?php 
        if(isset($err)){ 
    ?>
        <div class="alert alert-danger" role="alert">
            Login không thành công !!!
        </div>
    <?php }; ?>
<form method="post" action="login.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="user[email]" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="user[password]" type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>