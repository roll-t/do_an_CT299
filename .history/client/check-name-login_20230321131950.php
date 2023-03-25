<?php
include '../connect.php';
include '../query.php';
include './validate.php';
$arr_client_sever=select_value_all("SELECT KH_ID,KH__TEN FROM KHACHHANG WHERE 1");
if(isset($_GET["name_login"])){
    $name="";
    $find=false;
    $name=$_GET["name_login"];
    foreach($arr_client_sever as $items){
        if(in_array($name,$items)){
            $find=true;
            break;
        }
    }
    if(!$find){
        echo "Tài khoản không tồn tại !"; 
    }
}
if(isset($_GET["password_login"])){
}
?>