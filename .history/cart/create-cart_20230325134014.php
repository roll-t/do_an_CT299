<?php
if(isset($_COOKIE["account_homedesign"])){
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $name_cart="cart_homedesign_".$id_client."";
    $value=[];
    setcookie($name_cart,$value, time() + (86400 * 30), "/");
}
?>