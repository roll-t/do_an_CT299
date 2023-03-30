<?php
include '../connect.php';
$id_client=explode(",",$_COOKIE["account_homedesign"])[0];
$arr_address=$conn->query("SELECT * FROM DIACHI WHERE KH_ID=$id_client")->fetch_all();
if(count($arr_address)>2){
  $min_address=100000;
  foreach($arr_address as $items){
    if($items[0]<$min_address){
      $min_address=$items[0];
    }
  }
  $sql_dl="DELETE FROM diachi WHERE `diachi`.`DC_ID` = $min_address";
  $result_dl=$conn->query($sql_dl);
}
if(isset($_GET["name"])){
  $name_client=$_GET["name"];
  $tinh=$_GET["tinh"];
  $huyen=$_GET["huyen"];
  $des=$_GET["des"];
  $sql="INSERT INTO `diachi` (`DC_ID`, `KH_ID`, `T_ID`, `DC_MOTA`, `H_ID`, `KH_TEN`) 
        VALUES (NULL, '".$id_client."', '".$tinh."', '".$des."', '".$huyen."', '".$name_client."')";
        $result=$conn->query($sql);
}
?>