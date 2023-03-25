
<?php 
  // include './query.php';
  $link=isset($_COOKIE["account_homedesign"])?'./profile.php':'./account.php';
  $name_account=isset($_COOKIE["account_homedesign"])?$_COOKIE["account_homedesign"][1]:'Tài khoản';
  if(isset($_COOKIE["account_homedesign"])){
    $id_client=$_COOKIE["account_homedesign"];
    $info_client=select_value("SELECT * FROM KHACHHANG WHERE KH__TEN=".$id_client."");
    var_dump($id_client);
  }

?>