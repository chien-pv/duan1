<?php 
    include './controllers/user_ctr.php'; 
    
    if(isset($_GET["id"])){
        $user_id = $_GET["id"];
       $user_edit = edit_user($user_id);
    };

    if(!empty($_POST["user"])){
        $param_update = $_POST["user"];
        update_user($param_update, $user_id);
    }
?>

<h1>
     Edit User
</h1>
<hr>

<form action="/demodb/?controller=users&&action=edit&&id=<?=$user_id?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input value="<?= $user_edit["name"] ?>" type="text" name="user[name]" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Salary</label>
    <input value="<?= $user_edit["salary"] ?>" type="text" name="user[salary]" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>