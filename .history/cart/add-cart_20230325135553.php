<?php
if(isset($_COOKIE["account_homedesign"])){
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $name_cart="cart_homedesign_".$id_client."";
    $product_cart=$_COOKIE["$name_cart"];
    $product_cart=explode(" ",$product_cart);
    var_dump($product_cart);
}
?>