<?php 
    include './controllers/user_ctr.php';
    if(!empty($_POST["user"])){
        $user = $_POST["user"];
        create($user);
    } 
?>

<h1>
     Create User
</h1>
<hr>
<form action="/demodb/?controller=users&&action=new" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="user[name]" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Salary</label>
    <input type="text" name="user[salary]" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>