<?php 
if (!isset($_SESSION["users"])){
$_SESSION["users"] = [
    [ 
    "Id" => 1, 
    "Name" => "Nguyen Van A" 
    ],
    [ 
    "Id" => 2, 
    "Name" =>  "Nguyen Van B" 
    ], 
    [ 
    "Id" => 3, 
    "Name" => "Nguyen Van C" 
    ] 
    ];
  
    $_SESSION["comments"] = [ 
    [ 
    "Id" => 1, 
    "User_id" => 1, 
    "Content" => "Hello nodejs" 
    ], 
    [ 
    "Id" => 2, 
    "User_id" =>  3, 
    "Content" => "Hello nodejs JS" 
    ], 
    [ 
    "Id" =>  3, 
    "User_id" => 2, 
    "Content" => "Hello nodejs JS Hee" 
    ]
    ] ;
};
    
    if(isset($_POST["user_id"])){
        $_SESSION["comments"][] =  [ 
            "Id" =>  count($_SESSION["comments"]) + 1, 
            "User_id" => $_POST["user_id"], 
            "Content" => $_POST["content"] 
            ] ;
    };

    function checkarr($user, $comment)
    {
            if($user["Id"] == $comment["User_id"]){
                return true;
            } else {
                return false;
            }
    };
    
    $arr = [];

    foreach ($_SESSION["users"] as $user) {
        foreach ($_SESSION["comments"] as $comment) {
            if(checkarr($user, $comment)){
               $arr[] = [
                "Id" => $user["Id"],
                "Name" => $user["Name"],
                "Content" => $comment["Content"]
               ] ;
            } ;
        }
    };
    
    // var_dump($arr);

?>