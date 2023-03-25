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
    var_dump($id_client);
    var_dump($_GET["add_address"]);
}
?>