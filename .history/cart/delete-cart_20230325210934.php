<?php
if(isset($_GET["id_product"])){
    $index_cart=$_GET["id_product"];
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $name_cart="cart_homedesign_".$id_client."";
    $arr_product_cart=json_decode($_COOKIE["$name_cart"],true);
    
}
?>