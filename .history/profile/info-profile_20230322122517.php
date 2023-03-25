
<?php 
  include './connect.php';
  $link=isset($_COOKIE["account_homedesign"])?'./profile.php':'./account.php';
  $name_account=isset($_COOKIE["account_homedesign"])?explode(",",$_COOKIE["account_homedesign"])[1]:'Tài khoản';
  if(isset($_COOKIE["account_homedesign"])){
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $sql="SELECT * FROM KHACHHANG WHERE KH_ID=$id_client";
    $info_client=$conn->query($sql)->fetch_assoc();
    $phone_number=$info_client["KH_SDT"];
    $password_account=$info_client["KH_MATKHAU"];
  }

?>