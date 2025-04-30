<?php

    header("Access-Control-Allow-Method: PUT, PATCH");
    header("content-Type: application/json");

    include("../config/Config.php");
    $config=new Config();

    if($_SERVER['REQUEST_METHOD']=="PUT" || $_SERVER['REQUEST_METHOD']=="PATCH"){
        $input=file_get_contents("php://input");
        parse_str($input,$_UPDATE);
        $id=$_UPDATE['id'];
        $name=$_UPDATE['name'];
     
        $res=$config->updateRailway($id,$name);
        if($res){
            $arr['data']="Railway data updated Successfuly";
        }else{
            $arr['error']="Railway data updation failed";
        }
    }else{
        $arr['error']="there were allowed only PUT OR PATCH HTTP request ";
    }
    echo json_encode($arr);

?>