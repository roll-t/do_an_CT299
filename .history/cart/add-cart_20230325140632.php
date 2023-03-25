<?php
if(isset($_COOKIE["account_homedesign"])){
    $product=$_GET["id_product"];
    
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $name_cart="cart_homedesign_".$id_client."";
    $arr_product_cart=explode(" ",$_COOKIE["$name_cart"]);
    array_push($arr_product_cart,$product);
    setcookie($name_cart,implode(" ",$arr_product_cart), time() + (86400 * 30), "/");
    var_dump($arr_product_cart);
}
?>