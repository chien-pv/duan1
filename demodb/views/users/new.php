<?php 
    include './controllers/user_ctr.php';
    // var_dump($_POST);
    if(!empty($_POST["user"])){
        $user = $_POST["user"];
        $data = create($user);
    } 
?>

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