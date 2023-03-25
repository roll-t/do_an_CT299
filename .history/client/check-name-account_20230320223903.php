<?php
include '../connect.php';
include '../query.php';
include './validate.php';
$arr_client_sever=select_value_all("SELECT * FROM KHACHHANG WHERE 1");
if(isset($_GET["name_account"])){
    $name=$_GET["name_account"];
    $check_name=true;
    foreach($arr_client_sever as $items){
        if(in_array($name,$items)){
            echo "Tai khoan da duoc su dung";
            break;
        }else{
            echo $name;
        }
    }
}
?>