
<?php
include '../connect.php';
include '../query.php';
include './validate.php';
$arr_client_sever=select_value_all("SELECT * FROM KHACHHANG WHERE 1");

if(isset($_POST["singn_up_account"])){
    $username=$_POST["username"];
    $name_client=trim($username," ");
    $password=$_POST["password"];
    $email=$_POST["emailAdress"];
    $confirm_client=true;
    foreach($arr_client_sever as $items){
        if(in_array($name_client,$items)){
            $confirm_client=false;
            break;
        }
    }
    if($confirm_client){
        $sql="INSERT INTO `khachhang` (`KH_ID`, `KH__TEN`, `KH_MATKHAU`, `KH_SDT`, `KH_EMAIL`) VALUES (NULL, 'pham phuoc truong ', '1234567', '0812608562', 'phuoctruong@gmail.com')";
    }
}


?>