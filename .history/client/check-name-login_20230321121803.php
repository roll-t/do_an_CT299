<?php
include '../connect.php';
include '../query.php';
include './validate.php';
$arr_client_sever=select_value_all("SELECT KH__TEN FROM KHACHHANG WHERE 1");
if(isset($_GET["name_login"])){
    $name=$_GET["name_login"];
    foreach($arr_client_sever as $items){
        if(!in_array($name,$items)){
        var_dump($name);

            echo "Sai tài khoản đăng nhập !";
            break;
        }else{

        }
    }
}
?>