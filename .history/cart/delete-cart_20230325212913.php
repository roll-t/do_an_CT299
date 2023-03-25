<?php
if(isset($_GET["id_product"])){
    $index_cart=$_GET["id_product"];
    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
    $name_cart="cart_homedesign_".$id_client."";
    $arr_product_cart=json_decode($_COOKIE["$name_cart"],true);
    if(count($arr_product_cart)>0){
       array_splice($arr_product_cart,$index_cart,1); 
       setcookie($name_cart,json_encode($arr_product_cart), time() + (86400 * 30), "/");
    }
    if(count($arr_product_cart)>0){
        foreach($arr_product_cart as $key=>$items){
            echo'
            <li class="product-cart-items">
            <input type="checkbox" class="check-confirm">
            <div class="left-item">
                <img src="'.$items[1].'" alt="">
            </div>
            <div class="center-item">
                <h3 class="product-name">'.$items[2].'</h3>
                <div class="product-price"><span>'.$items[3].'</span><span>đ</span></div>
            </div>
            <div class="right-item">
                <div class="detele-product"><a class="link_delete_product_cart" href="./cart/delete-cart.php?id_product='.$key.'"><ion-icon name="trash-outline"></ion-icon></a></div>
                <div class="quantity"><input type="number" min="1" value="1"></div>
            </div>
            </li>
            ';
        }
    }
    echo  
    echo' <script src="../assets/javascript/delete-cart.js"></script>';
}
?>