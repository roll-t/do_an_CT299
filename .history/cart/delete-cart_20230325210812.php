<?php
if(isset($_GET["id_product"])){
    $index_cart=$_GET["id_product"];
    $arr_product_cart=json_decode($_COOKIE["$name_cart"],true);
}
?>