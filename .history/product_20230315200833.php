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

$sql = "SELECT * FROM `nhom_danhmuc` where 1 ";

$result=$conn->query($sql);

$result_all=$result->fetch_all(); 


$sql_room ="SELECT * FROM `phong` where 1 ";


$result_2_room=$conn->query($sql_room);

$result_room_2=$result_2_room->fetch_all();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeDesign</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Akshar&family=Archivo+Black&family=Assistant:wght@200;300&family=Bangers&family=Carter+One&family=Dancing+Script:wght@500;600&family=Fjalla+One&family=Gulzar&family=Hind+Siliguri:wght@400;500;700&family=Karla:wght@200&family=Lato&family=Ms+Madi&family=Mukta:wght@300;800&family=Nunito:wght@200;300&family=Orelega+One&family=Oswald&family=Oxygen:wght@700&family=PT+Sans+Narrow&family=Permanent+Marker&family=Poppins:wght@100&family=Quicksand:wght@500&family=Roboto+Mono:wght@300&family=Roboto:ital,wght@0,500;0,900;1,500&family=Rubik&family=Square+Peg&family=The+Nautigal:wght@400;700&family=Varela+Round&family=Vollkorn:wght@500&display=swap" rel="stylesheet">
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/book.css">
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon">
</head>
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
                <ul  class="list-product main-list-product">
                    <?php
                    $count_index=8;
                    $index=1;
                    $sql_product="SELECT * FROM `SANPHAM` LIMIT 0,$count_index";
                    $result_product=$conn->query($sql_product);
                    $arr_product=$result_product->fetch_all();
                    function render_list_product($arr_product){
                                            foreach($arr_product as $items){
                        echo '                        <li class="product-items">';
                        echo '                        <div class="top-product">';
                        echo '                           <img src='.$items[5].' alt="">';
                        echo '                            <a href="./product-details.php?id_product='.$items[0].'"><img src='.$items[6].' alt="" class="img-zoom"></a>';
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
                </ul>
                <div class="padding">
                <?php
                $count_page=$conn->query("SELECT COUNT(*) AS total FROM `sanpham`")->fetch_assoc();
                $page_items=ceil(($count_page["total"]) / $count_index);
                echo '<input class="quantity-page" type="hidden" value='.$page_items.' />';
                if($page_items>=4){
                    echo '      <a href="./paging/paging-product.php?page=1" class="page-items page-per"><ion-icon name="chevron-back-outline"></ion-icon></a>';
                }
                $quantity_paging=$page_items>3?3:$page_items;

                for($i=1;$i<=$quantity_paging;$i++){
                        echo '      <a href="./paging/paging-product.php?page='.$i.'" class="page-items page-index">'.$i .'</a>';
                               }
                if($page_items>=4){
                    echo '      <a href="./paging/paging-product.php?page='.($count_index).'" class="page-items page-next"><ion-icon name="chevron-forward-outline"></ion-icon></a>';
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
<script src="./assets/javascript/cr-menu-item-product.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/filter-product.js"></script>
<script src="./assets/javascript/cart.js"></script>
</html>