<?php

    header("Access-Control-Allow-Methods: GET");
    header("content-Type: application/json");

    include("../config/Config.php");
    $config=new Config();

    if($_SERVER['REQUEST_METHOD']=="GET"){
        $data=$config->fetchRailway();
        $all_railway=[];
        while($result=mysqli_fetch_assoc($data)){
            array_push($all_railway,$result);
        }
        $arr['data']=$all_railway;
    } else{
        $arr['error'] ="there were allowed only GET HTTP Request types";
    }
    echo json_encode($arr);

?>