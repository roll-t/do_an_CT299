<?php
include '../connect.php';
include '../query.php';
include './validate.php';
$arr_client_sever=select_value_all("SELECT KH_ID,KH__TEN FROM KHACHHANG WHERE 1");
if(isset($_GET["name_login"])){
    $name=$_GET["name_login"];
    $find=false;
    $id_user="";
    $password="";
    foreach($arr_client_sever as $items){
        if(in_array($name,$items)){
            $find=true;
            $id_user=$items[0];
            break;
        }
    }
    if(!$find){
        echo "Tài khoản không tồn tại !"; 
    }else{
        $password=select_value("SELECT KH_MATKHAU FROM KHACHHANG WHERE KH_ID=$id_user");
        
    }
}
?>