<?php
if(isset($_COOKIE["account_homedesign"])){
    $info_product=[$_GET["id_product"],$_GET["img_product"],$_GET["name_product"],$_GET["price_product"]];
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $name_cart="cart_homedesign_".$id_client."";
    $arr_product_cart=json_decode($_COOKIE["$name_cart"]);
    var_dump($arr_product_cart);
    array_push($arr_product_cart,implode("-",$info_product));
    // setcookie($name_cart,implode(",",$arr_product_cart), time() + (86400 * 30), "/");

    if(count($arr_product_cart)>0){
        foreach($arr_product_cart as $items){
            $items=explode(",", $items);
            echo'
            <li class="product-cart-items">
            <input type="checkbox" class="check-confirm">
            <div class="left-item">
                <img src="'.$items[1].'" alt="">
            </div>
            <div class="center-item">
                <h3 class="product-name">'.$items[2].'</h3>
                <div class="product-price"><span>$</span><span>'.$items[3].'</span></div>
            </div>
            <div class="right-item">
                <div class="detele-product"><ion-icon name="trash-outline"></ion-icon></div>
                <div class="quantity"><input type="number" min="1" value="1"></div>
            </div>
            </li>
            ';
        }
    }
}
?>