<?php
if(isset($_COOKIE["account_homedesign"])){
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    var_dump($id_client);
    $name_cart="cart_homedesign_".$id_client."";
}
?>