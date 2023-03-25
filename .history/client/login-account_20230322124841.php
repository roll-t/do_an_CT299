<?php
include '../connect.php';
include '../query.php';
include './validate.php';
$arr_client_sever=select_value_all("SELECT KH_ID,KH__TEN FROM KHACHHANG WHERE 1");
if(isset($_GET["name_login"])){
    $name="";
    $id_user="";
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
        echo '<input class="id_password_login" type="hidden" value="'.$id_user.'" />';
    }
}
if(isset($_GET["confirm_password"])){
    $value_password=$_GET["input_password"];
    $id_password=$_GET["confirm_password"];
    $password=select_value("SELECT KH_MATKHAU,KH__TEN,KH_ID FROM KHACHHANG WHERE KH_ID=$id_password");
    if($value_password===$password["KH_MATKHAU"]){
        $name_cookie="account_homedesign";
        $cookie_name="account_homedesign";
        $cookie_value=[$password["KH_ID"],$password["KH__TEN"]];
        setcookie($cookie_name, implode(",",$cookie_value), time() + (86400 * 30), "/");
        alert("Đăng Nhập Thành công");
        echo'<input type="hidden" class="login_sucess" />';
    }else{
        echo "Sai mật khẩu đăng nhập !";
    }
}
?>