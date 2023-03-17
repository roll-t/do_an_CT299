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
$id_product=isset($_GET["id_product"])?$_GET["id_product"]:0;
$sql_product="SELECT * from `chitiet_sanpham` JOIN `sanpham` on `sanpham`.SP_ID=`chitiet_sanpham`.SP_ID WHERE `chitiet_sanpham`.SP_ID=26";

$result_product=$conn->query($sql_product);

$arr_product=$result_product->fetch_all();

$main_img=$arr_product[0][15];
$arr_img=[$arr_product[0][2],$arr_product[0][6],$arr_product[0][7],$arr_product[0][8]];

var_dump($arr_img);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroupThree</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Akshar&family=Archivo+Black&family=Assistant:wght@200;300&family=Bangers&family=Carter+One&family=Dancing+Script:wght@500;600&family=Fjalla+One&family=Gulzar&family=Hind+Siliguri:wght@400;500;700&family=Karla:wght@200&family=Lato&family=Ms+Madi&family=Mukta:wght@300;800&family=Nunito:wght@200;300&family=Orelega+One&family=Oswald&family=Oxygen:wght@700&family=PT+Sans+Narrow&family=Permanent+Marker&family=Poppins:wght@100&family=Quicksand:wght@500&family=Roboto+Mono:wght@300&family=Roboto:ital,wght@0,500;0,900;1,500&family=Rubik&family=Square+Peg&family=The+Nautigal:wght@400;700&family=Varela+Round&family=Vollkorn:wght@500&display=swap" rel="stylesheet">
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/book.css">
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/product-details.css">
</head>

<body>
    <div class="wrapper">
         <header id="top" class="header  header-banner">
            <div class="headline">
                <div class="left-headline">
                    <div class="show-menu"><ion-icon name="menu-outline"></ion-icon></div>
                    <h2 class="logo">Home<span style="color:#E99C2E;">Design</span></h2>
                </div>
                <div class="center-headline">
                    <nav class="menu">
                        <li class="menu-items menu-items-product"><a href="./index.php">Home</a></li>
                        <li class="menu-items menu-items-product  active"><a href="./product.php">Sản Phẩm</a><ion-icon name="chevron-down-outline"></ion-icon>
                        <div class="menu-level-2 product-menu">
                            <ul class="list-menu-level-2 " style="--row:<?php echo count($result_all)?>">
                            <?php           
                            foreach($result_all as $value){
                                echo ' <ul class="group-list">';
                                            $sql_2 ="SELECT * FROM `danhmuc` as a JOIN `nhom_danhmuc` as b WHERE a.NDM_ID=b.NDM_ID and a.NDM_ID=$value[0]";
                                            $result_2=$conn->query($sql_2);
                                            $result_all_2=$result_2->fetch_all();
                                            foreach($result_all_2 as $items){
                                                echo '<li class="items-menu-level-2">';
                                                echo '<a href="#">'.$items[2].'</a>';
                                                echo '</li>';
                                            }
                                echo'   </ul>';
                            }
                        ?>
                            </ul>
                        </div>
                        </li>
                        <li class="menu-items menu-items-product"><a href="./room.php">Phòng</a><ion-icon name="chevron-down-outline"></ion-icon>
                            <div class="menu-level-2 kitchen">
                                <ul class="list-menu-level-2">
                                    <ul class="group-list">
                                    <?php 
                                    foreach($result_room_2 as $row){
                                        echo '<li class="items-menu-level-2"><a href="#">'.$row[1].'</a></li>';
                                    }
                                    ?>
                                    </ul>
                                </ul>
                            </div>
                       </li>
                        <li class="menu-items menu-items-product"><a href="./design.html">Góc Cảm Hứng</a></li>
                    </nav>
                </div>
                <div class="right-headline">
                    <div class="search"><input class="input-search" type="text" placeholder=""><ion-icon name="search-outline"></ion-icon></div>
                    <div class="cart"><div class="quantity-items-cart"></div><ion-icon name="cart-outline"></ion-icon></div>
                    <a href="./account.html" class="account"><ion-icon name="person-circle-outline"></ion-icon><h3>Account</h3></a>
                </div>
            </div>
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
            <div class="body-left-meu">
                <div class="left-menu">
                    <ul class="list-menu-left">
                    <?php           
                    foreach($result_all as $value){
                        echo ' <li class="items-menu-left">';
                        echo '        <span>'.$value[1].'</span><ion-icon name="chevron-down-outline"></ion-icon>';
                        echo '        <ul class="list-menu-chilrent">';
                                    $sql_2 ="SELECT * FROM `danhmuc` as a JOIN `nhom_danhmuc` as b WHERE a.NDM_ID=b.NDM_ID and a.NDM_ID=$value[0]";
                                    $result_2=$conn->query($sql_2);
                                    $result_all_2=$result_2->fetch_all();
                                    foreach($result_all_2 as $items){
                                        echo '<li class="menu-chilrent-items">';
                                        echo '<a href="#">'.$items[2].'</a>';
                                        echo '</li>';
                                    }
                        echo'       </ul>';
                        echo'   </li>';
                    }
                        ?>
                    </ul>
                    
                </div>
                <div class="list-right">
                    <div class="point-exit"><ion-icon name="close-outline"></ion-icon></div>
                </div>
            </div>
            <div class="body-cart">
                <div class="main-cart">
                    <div class="headline-cart">
                        <h3 class="title-cart">Giỏ Hàng</h3>
                        <div class="total-price">Tổng Tiền: <span>0</span><p>VND</p></div>
                        <div class="check-all"><input name="check-all" type="checkbox"><label for="check-all">All</label></div>
                    </div>

                    <ul class="list-product-cart">
                    </ul>
                    <div class="checkout">
                        Thanh Toán
                    </div>
                </div>
                <div class="space-left">
                    <div class="point-exit"><ion-icon name="close-outline"></ion-icon></div>
                </div>  
            </div>
        </header>
        
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
                            <li class="img-items">
                                <img src="./images/collection/arrivals4.png" alt="">
                            </li>
                            <li class="img-items">
                                <img src="./images/collection/arrivals5.png" alt="">
                            </li>
                            <li class="img-items">
                                <img src="./images/collection/arrivals6.png" alt="">
                            </li>
                            <li class="img-items">
                                <img src="./images/collection/arrivals7.png" alt="">
                            </li>
                            <li class="img-items">
                                <img src="./images/collection/arrivals8.png" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="center-detail">
                        <div class="main-img-detail">
                            <img src="./images/collection/arrivals3.png" alt="">
                        </div>
                    </div>
                    <div class="right-detail">
                        <h2 class="name-product">Armchair ngoài trời Albert kuip trắng 1200169Z</h2>
                       <div class="info-product">
                        <div class="product-price"><ion-icon name="heart-outline"></ion-icon><span>12740000</span><p>VND</p></div>
                        <div class="material"><p class="title-material">Vật Liệu: </p><span>Nhôm</span></div>
                        <div class="size"><p class="title-size">Kích Thước: </p> <span>D600 - R600 - C600 mm</span></div>
                        <div class="des-1"><p>Hàng sẳn có:</p><a href="#">Xem cửa hàng trưng bày</a></div>
                        <div class="id-product"><p>Mã:</p><span>3*109228</span></div>
                        <div class="ctl"><p>Danh mục: </p> <span>Ghế ngoài trời, ngoại thất</span></div>
                       </div>
                       <div class="add-cart">
                        <div class="quantity">
                            <div class="left">-</div>
                            <div class="center">1</div>
                            <div class="right">+</div>
                        </div>
                        <div class="btn-by-now">
                            Mua Ngay
                        </div>
                        <div class="btn-add-cart">
                            Thêm Vào Giỏ
                        </div>
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
        <div  class="body-6">
            <ul class="list-client">
                <li class="clients">
                    <img src="./images/clients/c1.png" alt="">
                </li>
                <li class="clients">
                    <img src="./images/clients/c2.png" alt="">
                </li>
                <li class="clients">
                    <img src="./images/clients/c3.png" alt="">
                </li>
                <li class="clients">
                    <img src="./images/clients/c4.png" alt="">
                </li>
                <li class="clients">
                    <img src="./images/clients/c5.png" alt="">
                </li>
            </ul>
        </div>
        <div id="contact" class="body-7">
            <div class="list-contact">
                <div class="list-contact-items">
                    <li class="items-contact title">
                        Information 
                    </li>
                    <li class="items-contact"><a href="#">
                        About Us
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Contact Us
                    </a></li>
                    <li class="items-contact"><a href="#">
                        News
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Store
                    </a></li>
                </div>
                <div class="list-contact-items">
                    <li class="items-contact title">
                        Collections
                    </li>
                    <li class="items-contact"><a href="#">
                        Wooden Chair
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Royal Cloth Sofa
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Accent Chair
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Bed
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Hanging Lamp
                    </a></li>
                </div>
                <div class="list-contact-items">
                    <li class="items-contact title">
                        My Accounts
                    </li>
                    <li class="items-contact"><a href="#">
                        My Account
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Wishlist
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Community
                    </a></li>
                    <li class="items-contact"><a href="#">
                        Order History
                    </a></li>
                    <li class="items-contact"><a href="#">
                        My Cart
                    </a></li>
                </div>
                <div class="list-contact-items">
                    <li class="items-contact title">
                        Newsletter
                    </li>
                    <li class="items-contact"><a href="#">
                        Subscribe to get latest news,update and information
                    </a></li>
                    <li class="items-contact">
                        <div class="letter">
                            <input class="input-letter" type="text" placeholder="Enter Email Here...">
                            <ion-icon name="send"></ion-icon>
                        </div>
                    </li>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="list-icon">
                <li class="icon-items"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li class="icon-items"><a href="#"><ion-icon name="logo-pinterest"></ion-icon></a></li>
                <li class="icon-items"><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                <li class="icon-items"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li class="icon-items"><a href="#"><ion-icon name="logo-behance"></ion-icon></a></li>
            </div>
            <div class="text">©Copyright. Designed And Developed By Themesine</div>
        </footer>
    </div>
    <a href="#top" class="go-to-top"><ion-icon name="chevron-up-outline"></ion-icon></a>

</body>
<script src="./assets/javascript/show-search.js"></script>
<script src="./assets/javascript/sticky-header.js"></script>
<script src="./assets/javascript/cr-menu-item-product.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/filter-product.js"></script>
<script src="./assets/javascript/cart.js"></script>
<script src="./assets/javascript/product-details.js"></script>
</html>