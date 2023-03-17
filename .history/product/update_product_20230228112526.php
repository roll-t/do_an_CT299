<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_banhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>

<?php 
if(isset($_GET["id_change"])){
echo '      <div class="info-product-add">';
echo '    <div class="left-side-add"> ';
echo '    <div class="wrap-input"> ';
echo '        <label for="name-product">Tên sản phẩm</label> ';
echo '        <input type="text" name="name-product" placeholder="Nhap vao ten san pham"> ';
echo '    </div> ';
echo '    <div class="wrap-input"> ';
echo '        <label for="name-product">Giá sản phẩm</label> ';
echo '        <input type="text" name="name-product" placeholder="Nhap vao ten san pham"> ';
echo '    </div> ';
echo '    <div class="wrap-input"> ';
echo '        <label for="name-product">Giảm Giá (nếu có)</label> ';
echo '        <input type="text" name="name-product" placeholder="Nhap vao ten san pham"> ';
echo '    </div> ';
echo '    <div class="wrap-input"> ';
echo '        <label for="name-product">Mô tả</label> ';
echo '        <textarea  name="name-product" id="" cols="30" rows="5"></textarea> ';
echo '    </div> ';
echo '    <div class="wrap-input"> ';
echo '        <label for="name-product">Ảnh sản phẩm</label> ';
echo '        <input type="file" name="name-product" placeholder="Nhap vao ten san pham"> ';
echo '    </div> ';
echo '    <div class="wrap-input">';
echo '     <input class="btn-add-product" type="submit" value="Xác Nhận Thay Đổi"> ';
echo '    </div> ';
echo '</div> ';
echo '<div class="right-side-add"> ';
echo '    <div class="preview">Xem thử</div> ';
echo '    <li class="product-items"> ';
echo '        <div class="top-product"> ';
echo '            <img src="./images/collection/arrivals1.png" alt=""> ';
echo '            <div class="add-cart"> ';
echo '                <div class="left-add"> ';
echo '                    <ion-icon name="cart-outline"></ion-icon> ';
echo '                    <p>Add to cart</p> ';
echo '                </div> ';
echo '                <div class="right-add"> ';
echo '                    <ion-icon name="heart-outline"></ion-icon> ';
echo '                    <ion-icon name="expand-outline"></ion-icon> ';
echo '                </div> ';
echo '            </div> ';
echo '            <div class="texture"></div> ';
echo '            <div class="sale-ticker"> ';
echo '                Sale ';
echo '            </div> ';
echo '        </div> ';
echo '        <div class="product-content"> ';
echo '            <h3 class="name-product">Wooden Chair</h3> ';
echo '            <div class="product-price"><span>$</span><p>65.00</p></div> ';
echo '        </div> ';
echo '    </li> ';
echo '</div> ';
echo '</div>';
}

if(isset($_GET["id_detail"])){

    echo ' <div class="body-detail">';
    
    echo '</div>';

}

?>