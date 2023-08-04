<?php 
include "./connect_db.php";

function get_all_users() {
    $conn = connect();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $datas = get_data_from_result($result);
    $conn->close();
    return $datas;
}

function get_users_by_name($search) {
    $conn = connect();
    $sql = "SELECT * FROM users WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);
    $datas = get_data_from_result($result);
    $conn->close();
    return $datas;
}

function get_users_by_id($user_id){
    $conn = connect();
    $sql = "SELECT * FROM users WHERE id ='%$user_id%'";
    $result = $conn->query($sql);
    $datas = get_data_from_result($result);
    $conn->close();
    return $datas;
}

function get_data_from_result($result){
    $data =[];
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data[]= $row;
        };
    }
    return $data;
}

function insert_user($user) {
    $name = $user["name"];
    $salary = $user["salary"];
    $conn = connect();
    $sql = "INSERT INTO users(name, salary) VALUES ('$name','$salary')";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function insert_user_repare($user) {
    $name = $user["name"];
    $salary = $user["salary"];
    $conn = connect();
    $sql = "INSERT INTO users(name, salary) VALUES (?,?)";
    $smt = $conn->prepare($sql);
    $smt->bind_param("ss", $name, $salary);
    $result = $smt->execute();

    // $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function get_user_by_id($user_id) {
    $conn = connect();
    $sql = "SELECT * FROM users WHERE id = '$user_id'";
    $result = $conn->query($sql);
    $datas = get_data_from_result($result);
    $conn->close();
    return $datas[0];
}


function update_user_by_id($param_update, $user_id) {
    $name = $param_update["name"];
    $salary = $param_update["salary"];
    $conn = connect();
    $sql = "UPDATE users SET name='$name', salary='$salary' WHERE id='$user_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function delete_user_by_id($user_id) {
    $conn = connect();
    $sql = "DELETE FROM users WHERE id='$user_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result; 
}

?>