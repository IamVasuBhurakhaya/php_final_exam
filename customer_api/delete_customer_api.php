<?php

    header("Access-Control-Allow-Method: DELETE");
    header("content-Type: application/json");

    include("../config/Config.php");
    $config=new Config();

    if($_SERVER['REQUEST_METHOD']=="DELETE"){
        $input=file_get_contents("php://input");
        parse_str($input,$_DELETE);
        $id=$_DELETE['id'];
        $res=$config->deleteCustomer($id);
        if($res){
            $arr['data']="customer data deleted Successfuly";
        }else{
            $arr['error']="customer data deletion failed";
        }
    }else{
        $arr['error']="There were allowed only DELETE HTTP request";
    }
    echo json_encode($arr);

?>