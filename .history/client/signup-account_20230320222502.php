
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
    $phone_number=$_POST["phone"];
    $confirm_client=true;
    if($confirm_client){
        $sql="INSERT INTO `khachhang` (`KH_ID`, `KH__TEN`, `KH_MATKHAU`, `KH_SDT`, `KH_EMAIL`) VALUES 
        (NULL, '$name_client', '$password', '$phone_number', '$email')";
        $result=$conn->query($sql);
        if($result){
            alert("Đăng ký tài khoản thành công");
        }
    }else{
        alert("Tên tài khoản đã được sử dụng !");
    }
}


?>