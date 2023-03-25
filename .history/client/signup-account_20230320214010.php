
<?php
include '../connect.php';
include '../query.php';
$arr_client_sever=select_value_all("SELECT * FROM KHACHHANG WHERE 1");

if(isset($_POST["singn_up_account"])){
    $username=$_POST["username"];
    foreach($arr_client_sever as $items){
        // if()
    }
}


?>