<?php

    header("Access-Control-Allow-Methods: POST");
    header('content-Type: application/json');

    include('../config/Config.php');
    $config=new Config();

    if($_SERVER['REQUEST_METHOD']=="POST"){        
        $name=$_POST['name'];

        $res=$config->insertRailway($name);

        if($res){
            $arr['msg']= "Railway insert successfully";

        }else{
            $arr['msg'] ="Railway insertion failed";
        }
    }else{
        $arr['msg']= "PLEASE SELECT POST Method";
    }
    echo json_encode($arr);    

?>