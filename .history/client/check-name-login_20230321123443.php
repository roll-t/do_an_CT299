<?php
include '../connect.php';
include '../query.php';
include './validate.php';
$arr_client_sever=select_value_all("SELECT KH__TEN FROM KHACHHANG WHERE 1");
if(isset($_GET["name_login"])){
    $name=$_GET["name_login"];
    $find=false;
    foreach($arr_client_sever as $items){
        if(in_array($name,$items)){
            $find=true;
        }
    }
    if(!$find){
        echo "Tài khoản không tồn tại !"; 
    }else{
        echo "";
    }
}
?>