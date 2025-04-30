<?php
    header("Access-Control-Allow-Methods: PUT, PATCH");
    header('content-Type: application/json');

    include('../config/config.php');
    $config=new config();

    if($_SERVER['REQUEST_METHOD']=="PUT" || $_SERVER['REQUEST_METHOD']=="PATCH"){
        $input=file_get_contents("php://input");
        parse_str($input,$_UPDATE);
        $name=$_UPDATE['name'];
        $id=$_UPDATE['id'];
        $trainId=$_UPDATE['trainId'];

        $res=$config->updateCustomer($trainId,$id,$name);

        if($res){
            $arr['msg']="Customer data update successfully";

        }else{

            $arr['msg']="Customer data updation failed";
        }     
        
    }else{
        $arr['error']="You have to select PUT OR PATCH both";
    }
    echo json_encode($arr);
?>
