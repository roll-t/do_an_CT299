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
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="stylesheet" href="./assets/css/slide-2-banner.css">
    <link rel="stylesheet" href="./assets/css/room.css">
    <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon">
</head>
<body>
    <div class="wrapper">
        <header id="top" class="header  header-banner">
            <?php include './header.php' ?>
            <div class="banner-room">
                <div class="address address-room">
                    <h2 class="title-address">
                        Phòng Khách
                    </h2>
                    <ul class="list-link">
                        <li class="link-items"><a href="index.html">Trang Chủ</a></li>
                        <span></span>
                        <li class="link-items"><a href="#">Phòng khách</a></li>
                    </ul>
                </div>
                <div class="carousel">
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Paris</div>
                        <div class="num">01</div>
                        <img src="./images/room/living-room/img-1.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Warsaw</div>
                        <div class="num">02</div>
                        <img src="./images/room/living-room/img-2.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Moscow</div>
                        <div class="num">03</div>
                        <img src="./images/room/living-room/img-3.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Sydney</div>
                        <div class="num">04</div>
                        <img src="./images/room/living-room/img-4.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Istanbul</div>
                        <div class="num">05</div>
                        <img src="./images/room/living-room/img-5.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Prague</div>
                        <div class="num">06</div>
                        <img src="./images/room/living-room/img-6.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Munich</div>
                        <div class="num">07</div>
                        <img src="./images/room/living-room/img-7.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Venice</div>
                        <div class="num">08</div>
                        <img src="./images/room/living-room/img-8.png" />
                    </div>
                    </div>
                
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">Oslo</div>
                        <div class="num">09</div>
                        <img src="./images/room/living-room/img-9.png" />
                    </div>
                    </div>
                    <div class="carousel-item">
                    <div class="carousel-box">
                        <div class="title">London</div>
                        <div class="num">10</div>
                        <img src="./images/room/living-room/img-10.png" />
                    </div>
                    </div>
                </div>
                <div class="cursor"></div>
                <div class="cursor cursor2"></div>
            </div>
        </header>
        <div class="container container-room">
            <div class="left-body-room">
               <div class="content-left-room">
                <h3 class="title">Nội Thất Phòng Khách</h3>
                <h4 class="des">Mẫu Phòng Khách</h4>
                <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Sofa</a></li>
                    <li class="title-items-product"><a href="#">Sofa góc</a></li>
                    <li class="title-items-product"><a href="#">Sofa da</a></li>
                    <li class="title-items-product"><a href="#">Sofa</a></li>
                </ul>
                <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Ghế Thư Giản</a></li>
                    <li class="title-items-product"><a href="#">Amchair</a></li>
                    <li class="title-items-product"><a href="#">Ghế Dài & Đôn</a></li>
                </ul>
                <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Bàn Nước</a></li>
                    <li class="title-items-product"><a href="#">Bàn Bên</a></li>
                    <li class="title-items-product"><a href="#">Bàn console</a></li>
                    <li class="title-items-product"><a href="#">Tủ TiVi</a></li>
                </ul>
               </div>
            </div>
            <div class="right-body-room">
                <ul class="list-living-room">
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-1.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-2.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-3.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-4.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-5.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-6.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-7.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-8.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-9.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                    <li class="living-room-items">
                        <div class="top-items">
                            <img src="./images/room/living-room/living-rom-posts/img-10.jpg" alt="">
                        </div>
                        <div class="content-items">
                            <h3 class="title">
                                Phòng Khách Mang Cảm Hứng Miền Nhiệt Đới
                            </h3>
                            <p class="des-content">
                                Với Những màu sắc rực rở trên nền xanh dịu [...]
                            </p>
                           <button class="btn-see-more"> <a href="#">Xem Chi Tiết</a></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="body-find-store">
            <div class="content">
                <h2 class="title" data-text="Xem,Chạm Và Cảm Nhận">Xem,Chạm Và Cảm Nhận</h2>
                <button class="btn-find"><a href="#">Tìm Cửa Hàng</a><ion-icon name="chevron-forward-outline"></ion-icon></button>
            </div>
        </div>
        <?php include './footer.php' ?>
    </div>
<a href="#top" class="go-to-top"><ion-icon name="chevron-up-outline"></ion-icon></a>

</body>
<script src="./assets/javascript/show-search.js"></script>
<script src="./assets/javascript/cr-menu-item-product.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/slide-2-banner.js"></script>
<script src="./assets/javascript/sticky-header.js"></script>
<script src="./assets/javascript/cart.js"></script>
</html>