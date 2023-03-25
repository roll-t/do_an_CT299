<?php
include '../connect.php';
include '../query.php';
include './validate.php';

$arr_client_sever=select_value_all("SELECT * FROM KHACHHANG WHERE 1");
foreach($arr_client_sever as $items){
    if(in_array($name_client,$items)){
        $confirm_client=false;
        break;
    }
}
?>