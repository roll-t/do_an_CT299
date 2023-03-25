
<?php 
  include './query.php';
  $link=isset($_COOKIE["account_homedesign"])?'./profile.php':'./account.php';
  $name_account=isset($_COOKIE["account_homedesign"])?$_COOKIE["account_homedesign"]:'Tài khoản';
  if(isset($_COOKIE["account_homedesign"])){
    $id_client=$_COOKIE["account_homedesign"];
    // $info_client=select_value("SELECT * FROM KHACHHANG WHERE KH_TEN=$id_client");
    var_dump($info_client);
  }

?>