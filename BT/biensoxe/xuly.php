<?php 
    include './data.php';

    $tinhthanh = [];

    foreach ($data as $value) {
        $tinhthanh[]=$value["city"];
    };

    if(isset($_GET["tinh"])){
        foreach ($data as $tinh) {
            if($tinh["city"] == $_GET["tinh"]){
                $number = $tinh["plate_no"];
            };
        };
        $number??="Khong tim thay du lieu";
    } else {
        $number = "29,30,31,32,33,40";
    };
    
?>