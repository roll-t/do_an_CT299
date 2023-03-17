<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_bannoithat";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<?php
 $quantity_page=8;
 $index=isset($_GET["page"])?$_GET["page"]:1;
 $start_page=($index-1) * $quantity_page;
 $sql_product="SELECT * FROM `SANPHAM` LIMIT $start_page,$quantity_page";
 $result_product=$conn->query($sql_product);
 $arr_product=$result_product->fetch_all();
 function render_list_product($arr_product){
    foreach($arr_product as $items){
        echo '                        <li class="product-items">';
        echo '                        <div class="top-product">';
        echo '                           <img src='.$items[5].' alt="">';
        echo '                             <a href="./product-details.php?id_product='.$items[0].'"><img src='.$items[6].' alt="" class="img-zoom"></a>';
        echo '                            <div class="add-cart">';
        echo '                                <div class="left-add">';
        echo '                                    <ion-icon name="cart-outline"></ion-icon>';
        echo '                                    <p>Add to cart</p>';
        echo '                                </div>';
        echo '                                <div class="right-add">';
        echo '                                    <ion-icon name="heart-outline"></ion-icon>';
        echo '                                    <ion-icon name="expand-outline"></ion-icon>';
        echo '                                </div>';
        echo '                            </div>';
        echo '                            <div class="texture"></div>';
        echo '                            <div class="sale-ticker">';
        echo '                                Sale';
        echo '                            </div>';
        echo '                        </div>';
        echo '                        <div class="product-content">';
        echo '                            <h3 class="name-product">'.$items[3].'</h3>';
        echo '                            <div class="product-price"><span>$</span><p>'.$items[4].'</p></div>';
        echo '                        </div>';
        echo '                    </li>';
            }
    }
    
render_list_product($arr_product);
?>