<?php
include './models/user.php';

function login($user_param_login){
    extract($user_param_login);

    $user_login = get_user_by_email($email);

    if($user_login){
        $pasmd5 = md5($password);
        if($user_login["password"] == $pasmd5){
            $_SESSION["user"]= $user_login;
            header("location: index.php");
        } else {
            global  $err;
            $err = "true";
        }
    } else {
        global  $err;
        $err = "true";
    }

    var_dump($user_login);

    // header("location: index.php");
}

function logout() {
    unset($_SESSION["user"]);
    header("location: login.php");
}
?>