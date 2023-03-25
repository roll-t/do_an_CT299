<?php
include '../connect.php';
include '../query.php';
include './validate.php';
$arr_client_sever=select_value_all("SELECT KH_ID,KH__TEN FROM KHACHHANG WHERE 1");
$name="";
$id_user="";
$password_2="";
if(isset($_GET["name_login"])){
    $find=false;
    $name=$_GET["name_login"];
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
        $password_2=$password["KH_MATKHAU"];
        var_dump($password_2);
    }
}
if(isset($_GET["password_login"])){
    $password_login=$_GET["password_login"];
    echo var_dump($password_2);
    // if($password_login!=$password["KH_MATKHAU"]){
    //     echo "Mật khẩu không đúng !";
    // }
}
?>