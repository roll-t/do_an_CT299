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
    $info_address=explode(",",$_GET["add_address"]);
    $name_huyen=select_value("SELECT H_TEN FROM HUYEN WHERE H_ID=$info_address[1]");
    $sql="INSERT INTO `diachi` (`DC_ID`, `KH_ID`, `T_ID`, `DC_MOTA`, `DC_HUYEN`) VALUES (NULL, '".$id_client."', '".$info_address[0]."','".$info_address[2]."', '".$name_huyen["H_TEN"]."')";
    $result=$conn->query($sql);
    $name_tinh=select_value("SELECT T_TEN FROM TINH WHERE T_ID=$info_address[0]");
    $main_address=[$name_tinh["T_TEN"],$name_huyen["H_TEN"],$info_address[2]];
    if($result){
        setcookie("address_homedesign", implode(",",$main_address), time() + (86400 * 30), "/");
        $message="Đã thêm địa chỉ ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0.1;url=../profile.php');
    }
}
?>