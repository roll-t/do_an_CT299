

<!DOCTYPE html>
<html lang="en">
<?php include './head.php'?>
<link rel="stylesheet" href="./assets/css/product-details.css">

<body>
    <div class="wrapper">
    <header id="top" class="header  header-banner">
            <?php include './header.php' ?>
            <div class="banner-product">
                <div class="background-product">
                    <img src="./images/banner-header/background-product.png" alt="">
                </div>
                <div class="address">
                    <h2 class="title-address">
                        Sản Phẩm Nổi Bật
                    </h2>
                    <ul class="list-link">
                        <li class="link-items"><a href="index.html">Trang Chủ</a></li>
                        <span></span>
                        <li class="link-items"><a href="./room.html">Phòng khách</a></li>
                    </ul>
                </div>
                <div class="container-book">
                    <h1 class="title-book">
                      Golden space <br>of creativity
                    </h1>
                  
                    <div class="credit">
                      * Enjoy your living space
                    </div>
                  
                    <div class="book">
                      <div class="gap"></div>
                      <div class="pages">
                        <div class="page"></div>
                        <div class="page"></div>
                        <div class="page"></div>
                        <div class="page"></div>
                        <div class="page"></div>
                        <div class="page"></div>
                      </div>
                      <div class="flips">
                        <div class="flip flip1">
                          <div class="flip flip2">
                            <div class="flip flip3">
                              <div class="flip flip4">
                                <div class="flip flip5">
                                  <div class="flip flip6">
                                    <div class="flip flip7"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
    </header>
    <?php
        include './connect.php';
        $id_product=isset($_GET["id_product"])?$_GET["id_product"]:0;
        $sql_product="SELECT * from `chitiet_sanpham` JOIN `sanpham` on `sanpham`.SP_ID=`chitiet_sanpham`.SP_ID WHERE `chitiet_sanpham`.SP_ID=$id_product";
        $arr_detaile=select_value($sql_product);
        if(isset($arr_detaile)){
            $arr_product=$arr_detaile;
        }else{
            $sql_default="SELECT * from `chitiet_sanpham` JOIN `sanpham` on `sanpham`.SP_ID=`chitiet_sanpham`.SP_ID WHERE `chitiet_sanpham`.SP_ID=15";
            $default_detail=select_value($sql_default);
            $arr_product=$default_detail;
        }
        $main_img=$arr_product["SP_IMG_1"];
        $arr_img=explode(",",$arr_product["CSP_DS_IMG"]);
        $name_product=$arr_product["SP_TEN"];
        $product_price=$arr_product["SP_GIA"];
        $size=$arr_product["CSP_KICHTHUOC"];
        $arr_size=explode(",",$size);
        $id_material=$arr_product["CHL_ID"];
        $name_material=select_value("SELECT CHL_TEN FROM CHAT_LIEU WHERE CHL_ID=$id_material");
    ?>
        <div class="container">
            <div  id="new-arrival" class="body-2 body-2-product product-detail">
                <div class="link-address">
                        <li class="link-items"><a href="#">Trang chủ</a></li>
                        <li class="link-items"><a href="#">Ngoại Thất</a></li>
                        <li class="link-items"><a href="#">Ghế Ngoài Trời</a></li>
                </div>
                <div class="body-detail">
                    <div class="left-detail">
                        <div class="control">
                            <ion-icon name="chevron-up-outline"></ion-icon>
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>
                        <ul class="list-img">
                            <?php
                          echo '<li class="img-items">';
                             echo '<img src="'.$main_img.'" alt="">';
                          echo '</li>';
                            foreach($arr_img as $items){
                          echo '      <li class="img-items">';
                          echo '      <img src="'.$items.'" alt="">';
                          echo '      </li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="center-detail">
                        <div class="main-img-detail">
                        <?php echo '<img src="'.$main_img.'" alt="">' ?>
                        </div>
                    </div>
                    <div class="right-detail">  
                        <?php
                        
                    echo '    <h2 class="name-product">'.$name_product.'</h2>';
                    echo '    <div class="info-product">';
                    echo '    <div class="product-price"><ion-icon name="heart-outline"></ion-icon><span>'.number_format($product_price).'</span><p>đ </p></div>';
                    echo '    <div class="material"><p class="title-material">Vật Liệu: </p><span>'. $name_material["CHL_TEN"].'</span></div>';
                    echo '    <div class="size"><p class="title-size">Kích Thước: </p> <span>D'.$arr_size[0].' - R'.$arr_size[1].' - C'.$arr_size[2].' cm</span></div>';
                    echo '    <div class="des-1"><p>Hàng sẳn có:</p><a href="#">Xem cửa hàng trưng bày</a></div>';
                    echo '    <div class="id-product"><p>Mã:</p><span>'.$arr_product["SP_ID"].'*1092'.$arr_product["SP_ID"]+.13.'</span></div>';
                    echo '    <div class="ctl"><p>Danh mục: </p> <span>Ghế ngoài trời, ngoại thất</span></div>';
                        
                        ?>
                       
                    </div>
                       <div class="add-cart">
                        <div class="quantity">
                            <div class="left">-</div>
                            <div class="center">1</div>
                            <div class="right">+</div>
                        </div>
                        <div class="btn-by-now">
                            <?php
                        echo '    <input value="'.$id_product.'" type="hidden" class="id_checkout_product">';
                        if(isset($_COOKIE["account_homedesign"])){
                            echo '<a class="btn_by_now" style="color:white;" href="./checkout.php?id_product='.$id_product.'&quantity_product=1">Mua Ngay</a>';
                        }else {
                            echo '<a style="color:white;" href="./account.php">Mua Ngay</a>';
                        }
                        ?>
                        </div>
                            <div class="btn-add-cart">
                            <?php
                            echo'<a style="border:none" class="btn-add-cart" href="./cart/add-cart.php?id_product='.$id_product.'&img_product='.$main_img.'&name_product='.$name_product.'&price_product='.$product_price.'
                                ">
                                    Thêm Vào Giỏ
                                </a>
                            </div>';
                            ?>
                       </div>
                       <div class="contact-us">
                        <p>Liên hệ tư vấn mua hàng: <span>1800 8801</span></p>
                       </div>
                       <div class="status-product">
                        <div class="headline-status">
                            <div class="healine-items active">Đánh Giá</div>
                            <div class="healine-items">Bảo Hành</div>
                            <div class="healine-items">Vận Chuyển</div>
                        </div>
                        <div class="content-status">
                            <div class="list-content">
                                <div class="content-items danhgia ">
                                    <p>Chưa có đánh giá nào</p>
                                    <div class="cmt">
                                        <h2>Viết đánh giá cho "Armchair ngoài trời Albert kuip trắng 1200169Z" </h2>
                                        <div class="cmt-items">
                                            You must be logged in to post a review.
                                        </div>

                                    </div>
                                </div>
                                <div class="content-items baohanh">
                                    <ul class="list-baohanh">
                                        <li class="items-baohanh">
                                            <ion-icon name="checkmark-outline"></ion-icon>
                                            <p>Các sản phẩm nội thất tại Nhà Xinh đa số đều được sản xuất tại nhà máy của công ty cổ phần xây dựng kiến trúc AA với đội ngũ nhân viên và công nhân ưu tú cùng cơ sở vật chất hiện đại (http://www.aacorporation.com/). Nhà Xinh đã kiểm tra kỹ lưỡng từ nguồn nguyên liệu cho đến sản phẩm hoàn thiện cuối cùng.</p>
                                        </li>
                                        <li class="items-baohanh">
                                            <ion-icon name="checkmark-outline"></ion-icon>
                                            <p>Nhà Xinh bảo hành một năm cho các trường hợp có lỗi về kỹ thuật trong quá trình sản xuất hay lắp đặt.Nhà Xinh bảo hành một năm cho các trường hợp có lỗi về kỹ thuật trong quá trình sản xuất hay lắp đặt.</p>
                                        </li>
                                        <li class="items-baohanh">
                                            <ion-icon name="checkmark-outline"></ion-icon>
                                            <p> Quý khách không nên tự sửa chữa mà hãy báo ngay cho Nhà Xinh qua hotline: 1800 7200.</p>
                                        </li>
                                        <li class="items-baohanh">
                                            <ion-icon name="checkmark-outline"></ion-icon>
                                            <p>Sau thời gian hết hạn bảo hành, nếu quý khách có bất kỳ yêu cầu hay thắc mắc thì vui lòng liên hệ với Nhà Xinh để được hướng dẫn và giải quyết các vấn đề gặp phải.</p>
                                        </li>
                                    </ul>
                                    </div>
                                    <div class="content-items vanchuyen">
                                        <h2>Giao Hàng Tận Nơi</h2>
                                        <ul>
                                            <li>
                                                Nhà Xinh cung cấp dịch vụ giao hàng tận nơi, lắp ráp và sắp xếp vị trí theo đúng ý muốn của quý khách:
                                            </li>
                                            <li>
                                                - MIỄN PHÍ giao hàng trong các Quận nội thành Tp.Hồ Chí Minh và Hà Nội, áp dụng cho các đơn hàng trị giá trên 10 triệu.
                                            </li>
                                            <li>
                                                - Đối với khu vực các tỉnh lân cận: Tính phí hợp lý theo dựa trên quãng đường vận chuyển
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './footer.php' ?>
    </div>
    <a href="#top" class="go-to-top"><ion-icon name="chevron-up-outline"></ion-icon></a>

</body>
<script src="./assets/javascript/delete-cart.js"></script>
<script src="./assets/javascript/show-search.js"></script>
<script src="./assets/javascript/sticky-header.js"></script>
<script src="./assets/javascript/cr-menu-item-product.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/filter-product.js"></script>
<script src="./assets/javascript/cart.js"></script>
<script src="./assets/javascript/product-details.js"></script>
</html>