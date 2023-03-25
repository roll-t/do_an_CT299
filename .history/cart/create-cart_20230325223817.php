<?php
if(isset($_COOKIE["account_homedesign"])){
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $name_cart="cart_homedesign_".$id_client."";
    if(isset($_COOKIE[$name_cart])){
        $date_cart=[];
    }
    setcookie($name_cart,json_encode($date_cart), time() + (86400 * 30), "/");
}
?>