<?php
include '../connect.php';
if(isset($_GET["id_tinh"])){
    $id_tinh=$_GET["id_tinh"];
    echo $id_tinh;
    $arr_huyen=$conn->query("SELECT * FROM HUYEN WHERE T_ID=$id_tinh")->fetch_all();
    foreach($arr_huyen as $items){
        echo "<option value='".$items[0]."'>".$items[2]."</option>";
    }
}
?>