<?php
include '../connect.php';
include '../query.php';
if(isset($_GET["order_id"])){
    $id_order=$_GET["order_id"];
    $sql="UPDATE `don_dat_hang` SET `TT_ID` = '2' WHERE `don_dat_hang`.`DDH_ID` = $id_order";
    $result=$conn->query($sql);
    if($result){
        $status_name=select_value("SELECT * FROM TRANGTHAI WHERE TT_ID=2")["TT_TEN"];
        echo '<span class="confirm true">'.$status_name.'</span>';
    }
}
?>