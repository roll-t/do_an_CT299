<?php
include './query.php';
if(isset($_GET["id_tinh"])){
    $arr_huyen=select_value_all("SELECT * FROM HUYEN");
}
?>