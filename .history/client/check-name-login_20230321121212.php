<?php
include '../connect.php';
include '../query.php';
include './validate.php';
$arr_client_sever=select_value("SELECT KH_TEN FROM KHACHHANG WHERE 1");
if(isset($_GET["name_login"])){
    $name=$_GET["name_login"];
    var_dump($arr_client_sever);
}
?>