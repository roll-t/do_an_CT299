
<?php 
  include './connect.php';
  // include './query.php';
  $link=isset($_COOKIE["account_homedesign"])?'./profile.php':'./account.php';
  $name_account=isset($_COOKIE["account_homedesign"])?explode(",",$_COOKIE["account_homedesign"])[1]:'Tài khoản';
  if(isset($_COOKIE["account_homedesign"])){
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $info_client=select_value_all("SELECT * FROM KHACHHANG WHERE KH_ID=$id_client");
    // var_dump(explode(",",$_COOKIE["account_homedesign"]));
  }

?>