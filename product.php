<!DOCTYPE html>
<html lang="en">
<?php include './head.php'?>
<body>
    <div class="wrapper">
        <header id="top" class="header  header-banner">
            <?php include './header.php' ?>
            <div class="banner-product">
                <div class="background-product">
                    <img src="./images/banner-header/background-product.png" alt="">
                </div>
                <?php include './address-product.php' ?>
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
        <div id="headlist" class="container">
            <div  id="new-arrival" class="body-2 body-2-product">
                <div class="filter-product">
                    <div class="filter-price filter-items">
                        <div class="title-filter">
                            Giá
                        </div>
                        <div class="input-filter">
                            <p>Chọn mức giá</p><ion-icon name="chevron-down-outline"></ion-icon>
                        </div>
                        <div class="list-select">
                          <div class="select-items">
                            Theo mức độ phổ biến
                          </div>  
                          <div class="select-items">
                            Mới nhất
                          </div>  
                          <div class="select-items">
                            Theo Giá: từ cao đến thấp
                          </div>  
                          <div class="select-items">
                            Theo Giá: từ thấp đến cao
                          </div>  
                        </div>
                    </div>
                    <div class="filter-material filter-items">
                        <div class="title-filter">
                            Chất Liệu
                        </div>
                        <div class="input-filter">
                            <p>Chọn chất liệu</p><ion-icon name="chevron-down-outline"></ion-icon>
                        </div>
                        <div class="list-select">
                          <div class="select-items">
                            Chất Liệu Gỗ
                          </div>  
                          <div class="select-items">
                            Chất Liệu Kim Loại
                          </div>  
                          <div class="select-items">
                            Chất Liệu Đá
                          </div>   
                        </div>
                    </div>

                    <button class="confirm-filter">
                        Áp Dụng
                    </button>
                </div>
                <ul class="list-product main-list-product">
                    <?php
                    $page_cate=false;
                    $page_search=false;
                    $count_index=20;
                    $index=1;
                    
                    if(isset($_GET["value_search"])){
                      $page_search=true;
                      $result_search=$_GET["value_search"];
                      $sql_product="SELECT * FROM `sanpham` where `SP_TEN` LIKE '%".$result_search."%'  LIMIT 0,$count_index ";
                    }else if(isset($_GET["id_product_page"])){
                      $page_cate=true;
                      $id_page=$_GET["id_product_page"];
                      $sql_product="SELECT * FROM `SANPHAM`,`danhmuc` where sanpham.DM_ID=danhmuc.DM_ID and danhmuc.DM_ID=$id_page  LIMIT 0,$count_index";
                    }else{
                      $sql_product="SELECT * FROM `SANPHAM` LIMIT 0,$count_index";
                    }
                    $arr_product=select_value_all($sql_product);
                    
                    function render_list_product($arr_product){
                                            foreach($arr_product as $items){
                        echo '                        <li class="product-items">';
                        echo '                        <div class="top-product">';
                        echo '                           <img src='.$items[5].' alt="">';
                        echo '                            <a href="./product-details.php?id_product='.$items[0].'"><img src='.$items[6].' alt="" class="img-zoom"></a>';
                        echo '                            <div class="add-cart">';
                        echo '                                <div class="left-add">';
                        echo '                                    <a style ="color:white;display:flex;gap:5px;"'; 
                                                                   if(isset($_COOKIE["account_homedesign"])){
                                                                     echo 'class="btn-add-cart" href="./cart/add-cart.php?id_product='.$items[0].'&img_product='.$items[5].'&name_product='.$items[3].'&price_product='.$items[4].'"><ion-icon name="cart-outline"></ion-icon>';
                                                                   }else{
                                                                    echo 'href="./account.php"><ion-icon name="cart-outline"></ion-icon>';
                                                                   }
                        echo '                                    <p>Thêm giỏ hàng</p></a>';
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
                        echo '                            <div class="product-price"><p style="padding-right:3px;">'.number_format($items[4]).'</p><span>VND</span></div>';
                        echo '                        </div>';
                        echo '                    </li>';
                                            }
                    }
                    render_list_product($arr_product);
                    ?>
                </ul>
                <div class="padding">
                <?php
                if($page_cate){
                  $sql_count="SELECT COUNT(*) AS total FROM `sanpham`,`danhmuc` where sanpham.DM_ID=danhmuc.DM_ID and danhmuc.DM_ID=$id_page";
                }else if($page_search){
                  $sql_count="SELECT COUNT(*) AS total FROM `sanpham` where `SP_TEN` LIKE '%".$result_search."%' ";
                }else{
                  $sql_count="SELECT COUNT(*) AS total FROM   `sanpham`";
                }
                $count_page=$conn->query($sql_count)->fetch_assoc();
                $page_items=ceil(($count_page["total"]) / $count_index);
                echo '<input class="quantity-page" type="hidden" value='.$page_items.' />';
                if($page_items>=4){
                    echo '      <a href="./paging/paging-product.php?page=1" class="page-items page-per"><ion-icon name="chevron-back-outline"></ion-icon></a>';
                }
                $quantity_paging=$page_items>3?3:$page_items;
                if($page_cate){
                    for($i=1;$i<=$quantity_paging;$i++){
                      echo '      <a href="./paging/paging-product.php?page='.$i.'&cate_id='.$id_page.' " class="page-items page-index">'.$i .'</a>';
                            }
                }else{
                  for($i=1;$i<=$quantity_paging;$i++){
                          if($page_search){
                          echo '      <a href="./paging/paging-product.php?page='.$i.'&page_search='.$result_search.'" class="page-items page-index">'.$i .'</a>';
                          }else{
                            echo '      <a href="./paging/paging-product.php?page='.$i.'" class="page-items page-index">'.$i .'</a>';
                          }
                                 }
                }
                if($page_items>=4){
                    echo '      <a href="./paging/paging-product.php?page=4" class="page-items page-next"><ion-icon name="chevron-forward-outline"></ion-icon></a>';
                }
                    echo '<script src="./assets/javascript/paging-product.js"></script>';
                ?>
                </div>

                <div class="body-intro-room">
                    <ul class="list-room">

                        <li class="room-items">
                            <div class="room-img">
                                <img src="./images/room/phong_khach.png" alt="">
                            </div>
                        </li>
                        
                        <li class="room-items">
                            <div class="room-content">
                                <h3 class="title">Mẫu Thiết Kế<br> Phòng Khách</h3>
                                <p class="text">Phòng khách là không gian chính của ngôi nhà, là nơi sum họp gia đình</p>
                                <a href="./room.html" class="link-to-room"><span>MẪU PHÒNG KHÁCH</span><ion-icon name="arrow-forward-outline"></ion-icon></a>
                            </div>
                        </li>
                        <li class="room-items">
                            <div class="room-img">
                                <img src="./images/room/phong_lam_viec.png" alt="">
                            </div>
                        </li>
                        <li class="room-items">
                            <div class="room-content">
                                <h3 class="title">Phòng Làm Việc</h3>
                                <p class="text">Phòng khách là không gian chính của ngôi nhà</p>
                                <a href="#" class="link-to-room"><span>MẪU PHÒNG LÀM VIỆC</span><ion-icon name="arrow-forward-outline"></ion-icon></a>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-room">

                        <li class="room-items">
                            <div class="room-img">
                                <img src="./images/room/phong_ngu.png" alt="">
                            </div>
                        </li>
                        
                        <li class="room-items">
                            <div class="room-content">
                                <h3 class="title">Mẫu Thiết Kế Phòng ngủ</h3>
                                <p class="text">Những mẫu phòng ngủ của Nhà Xinh mang đến cảm giác ấm cúng, gần gũi và thoải mái</p>
                                <a href="#" class="link-to-room"><span>MẪU PHÒNG NGỦ</span><ion-icon name="arrow-forward-outline"></ion-icon></a>
                            </div>
                        </li>
                        <li class="room-items">
                            <div class="room-img">
                                <img src="./images/room/bep.png" alt="">
                            </div>
                        </li>
                        <li class="room-items">
                            <div class="room-content">
                                <h3 class="title">Mẫu Phòng Bếp </h3>
                                <p class="text">Phòng khách là không gian chính của ngôi nhà</p>
                                <a href="#" class="link-to-room"><span>MẪU PHÒNG BẾP</span><ion-icon name="arrow-forward-outline"></ion-icon></a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <?php include './footer.php' ?>
    </div>
    <a href="#top" class="go-to-top"><ion-icon name="chevron-up-outline"></ion-icon></a>
</body>
<script src="./assets/javascript/show-search.js"></script>
<script src="./assets/javascript/sticky-header.js"></script>
<script src="./assets/javascript/current-menu-items.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/filter-product.js"></script>
<script src="./assets/javascript/cart.js"></script>
</html>