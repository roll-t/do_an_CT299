
<?php
include '../connect.php';
include '../query.php';
$arr_client_sever=select_value_all("SELECT * FROM KHACHHANG");
if(isset($_POST["singn_up_account"])){
    echo "hello";
}


?>