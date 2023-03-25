
<?php 
  include './connect.php';
  if(isset($_COOKIE["account_homedesign"])){
    $link='./profile.php';
    $name_account=explode(",",$_COOKIE["account_homedesign"])[1];
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $sql="SELECT * FROM KHACHHANG WHERE KH_ID=$id_client";
    $info_client=$conn->query($sql)->fetch_assoc();
    $phone_number=$info_client["KH_SDT"];
    $password_account=$info_client["KH_MATKHAU"];
  }
  if(isset($_GET["add_name"])){
    $value_client=explode(",",$_COOKIE["account_homedesign"]);
    array_push($value_client,$_GET["add_name"])
  }
?>