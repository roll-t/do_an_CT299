<?php
if(isset($_COOKIE["account_homedesign"])){
    $info_product=[$_GET["id_product"],$_GET["img_product"],$_GET["name_product"],$_GET["price_product"]];
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $name_cart="cart_homedesign_".$id_client."";
    $arr_product_cart=explode(",",$_COOKIE["$name_cart"]);
    array_push($arr_product_cart,implode(",",$info_product));
    setcookie($name_cart,implode(",",$arr_product_cart), time() + (86400 * 30), "/");
    setcookie($name_cart,implode(",",$arr_product_cart), time() - (86400 * 30), "/");
    var_dump($arr_product_cart);
}
?>