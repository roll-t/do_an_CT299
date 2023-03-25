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
            $check_name=false;
            break;
        }
    }
    if(!$check_name){
        echo "<a class='error_account' style='position:absolute'></a>";
        echo "Tài khoản tồn tại !";  
    }
}
?>