<?php

    header("Access-Control-Allow-Method: DELETE");
    header("content-Type: application/json");

    include("../config/Config.php");
    $config=new Config();

    if($_SERVER['REQUEST_METHOD']=="DELETE"){
        $input=file_get_contents("php://input");
        parse_str($input,$_DELETE);
        $id=$_DELETE['id'];
        $res=$config->deleteRailway($id);
        if($res){
            $arr['data']="railway data deleted Successfuly";
        }else{
            $arr['error']="railway data deletion failed";
        }
    }else{
        $arr['error']="there were allowed only DELETE HTTP request ";
    }
    echo json_encode($arr);

?>