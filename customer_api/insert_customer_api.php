<?php

    header("Access-Control-Allow-Methods: POST");
    header('content-Type: application/json');

    include('../config/config.php');
    $config=new config();

    if($_SERVER['REQUEST_METHOD']=="POST"){        
        $name=$_POST['name'];
        $id=$_POST['id'];

        $res=$config->insertCustomer($id,$name);

        if($res){
            http_response_code(201);
            $arr['msg']= "Customer data insert successfully";

        }else{
            $arr['msg'] ="Customer data insertion failed";
        }
    }else{
        $arr['error']= "You have to select SELECT POST Method";
    }
    echo json_encode($arr);    

?>