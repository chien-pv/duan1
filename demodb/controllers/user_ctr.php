<?php 
    // include "./connect_db.php";
    include './models/user.php';

    function index_users(){
        // $conn = connect();
        // $dataUsers = [];
        // if(isset($_GET["search"])){
        //     $search = $_GET["search"];
        //     $sql = "SELECT * FROM users WHERE name LIKE '%$search%'";
        // } else {
            // $sql = "SELECT * FROM users";
            // $result = $conn->query($sql);
            // $totalPage = ceil(($result->num_rows)/5);
        // }
    
        // if(isset($_GET["page"])){
        //     $page = (int)$_GET["page"];
        //     $start_from = ($page-1)*5;
        //     $sql = $sql." LIMIT $start_from, 5";
        // } else {
        //     $sql = $sql." LIMIT 0, 5";
        // }
    
        // $result = $conn->query($sql);
       
        // if ($result->num_rows > 0) {
        // // output data of each row
        //     while($row = $result->fetch_assoc()) {
        //         $dataUsers[]= $row;
        //     };
        // } else {
        //     $noresult = "0 Result";
        // }

        if(isset($_GET["search"])){
            $search = $_GET["search"];
            $dataUsers = get_users_by_name($search);
        } else {
            $dataUsers = get_all_users();
        }
        return ["user_data"=> $dataUsers, "total_page"=> 5];
    }

    function create($user){
        $result = insert_user_repare($user);
        if ($result ) {
            page_redirect('/demodb/?controller=users');
        }
    }

    function edit_user($user_id){
        $data = get_user_by_id($user_id);
        return $data;
    }

    function update_user($param_update, $user_id) {
        $result = update_user_by_id($param_update, $user_id);

        if ($result ) {
            page_redirect('/demodb/?controller=users');
        }
    }

    function delete_user($user_id) {
        $result = delete_user_by_id($user_id);

        if ($result ) {
            page_redirect('/demodb/?controller=users');
        }  
    }
?>