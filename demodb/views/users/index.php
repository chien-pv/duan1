<?php 
    // include "./indexdb.php";
    include './controllers/user_ctr.php';
    $data = index_users();
    $dataUsers = $data["user_data"];
    $totalPage = $data["total_page"];
    $paramSearch = isset($_GET["search"]) ? $_GET["search"] : "";
    $curentPage = isset($_GET["page"]) ? $_GET["page"]: 1;
    $pageNext = ($curentPage == $totalPage) ? "" : "?page=".($curentPage + 1);
    $pagePrev = ($curentPage == 1) ? "" : "?page=".($curentPage - 1);

    if($_GET["action"]== "delete"){
        // var_dump($_GET["action"]);
        // var_dump($_GET["id"]);
        // die();
       $user_id = $_GET["id"] ;
       delete_user($user_id);
    }
?>
<h1>
    Users Management
</h1>
<hr>
<form class="row justify-content-end" action="/demodb" method="get">
<div class="col-6">
    <div class="input-group">
    <input type="hidden" name="controller" value="users">
    <input value="<?= $paramSearch ?>" name="search" type="text" class="form-control rounded" placeholder="Name" />
    <input type="submit" class="btn btn-outline-primary" value="Search"></input>
    </div>
    </div> 
</form>
<a href="/demodb/?controller=users&&action=new" class="btn btn-outline-info">New user</a>
<table class="table">
<thead>
    <tr>    
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Salary</th>
    <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($dataUsers as $key => $value) {  ?>
        <tr>
            <th scope="row"> <?= ($key + 1) ?></th>
            <td><?= $value["name"] ?></td>
            <td><?= $value["salary"] ?></td>
            <td>
                <a href="/demodb/?controller=users&&action=delete&&id=<?= $value["id"]?>"  type="button" class="btn btn-outline-danger">Delete</a>
                <a href="/demodb/?controller=users&&action=edit&&id=<?= $value["id"]?>" type="button" class="btn btn-outline-warning">Edit</a>
            </td>
        </tr>
    <?php }; ?>
    </tbody>
</table>

<nav aria-label="Page navigation example">
<ul class="pagination">
    <li class="page-item">
    <a class="page-link" href="<?= $pagePrev ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
    </a>
    </li>
    <?php 
    for ($i=1; $i <= $totalPage; $i++) {  ?>
        <?php 
        $active = ($i == $curentPage) ? "active" : "";
        ?>
        <li class="page-item <?= $active ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
    <?php }; ?>
    
    <li class="page-item">
    <a class="page-link" href="<?= $pageNext ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
    </a>
    </li>
</ul>
</nav>