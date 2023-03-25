<?php
if(isset($_COOKIE["account_homedesign"])){
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $name_cart="cart_homedesign_".$id_client."";
    $arr_product_cart=explode(" ",$_COOKIE["$name_cart"]);
    var_dump($arr_product_cart);
}
?>