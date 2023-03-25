<?php
include './query.php';
include './connect.php';
if(isset($_GET["id_tinh"])){
    $id_tinh=$_GET["id_tinh"];
    var_dump($id_tinh);
    $arr_huyen=select_value_all("SELECT * FROM HUYEN WHERE T_ID=$id_tinh");
    echo '<option value="" selected disabled>Chọn Huyện</option>';
    foreach($arr_huyen as $items){
        echo '<option value="'.$items[0].'">'.$items[2].'</option>';
    }
}
if(isset($_GET["add_address"])){
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    var_dump($id_client);
    $info_address=explode(",",$_GET["add_address"]);
    $name_huyen=select_value("SELECT H_TEN FROM HUYEN WHERE H_ID=$info_address[1]");
    $sql="INSERT INTO `diachi` (`DC_ID`, `KH_ID`, `T_ID`, `DC_MOTA`, `DC_HUYEN`) VALUES (NULL, '".$id_client."', '".$info_address."', 'hello', '".$name_huyen."')";
    $result=$conn->query($sql);
    if($result){

    }
}
?>