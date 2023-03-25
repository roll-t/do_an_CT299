<!DOCTYPE html>
<html lang="en">
<!-- <head>
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
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="stylesheet" href="./assets/css/slide-2-banner.css">
    <link rel="stylesheet" href="./assets/css/room.css">
    <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon">
</head> -->
<?php
include './head.php';
?>
<link rel="stylesheet" href="./assets/css/checkout.css">
<body>
    <div class="wrapper">
        <header id="top" class="header  header-banner">
            <div class="headline">
                <div class="left-headline"  >
                    <div class="show-menu"><ion-icon name="menu-outline"></ion-icon></div>
                    <h2 class="logo">Third<span style="color:#E99C2E;">Group</span></h2>
                </div>
                <div class="center-headline">
                    <nav class="menu">
                        <li class="menu-items menu-items-product"><a href="./index.html">Home</a></li>
                        <li class="menu-items menu-items-product  active"><a href="./product.html">Sản Phẩm</a><ion-icon name="chevron-down-outline"></ion-icon>
                        <div class="menu-level-2">
                            <ul class="list-menu-level-2">
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Sofa</a></li>
                                    <li class="items-menu-level-2"><a href="#">Sofa góc</a></li>
                                    <li class="items-menu-level-2"><a href="#">Ghế thư giản</a></li>
                                    <li class="items-menu-level-2"><a href="#">Armchair</a></li>
                                    <li class="items-menu-level-2"><a href="#">Ghế dài & đôn</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ TV</a></li>
                                    <li class="items-menu-level-2"><a href="#">Kệ trưng bày</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ Giày</a></li>
                                </ul>
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Bàn ăn</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ ăn</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ Ly</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ bếp</a></li>
                                </ul>
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Giường ngủ</a></li>
                                    <li class="items-menu-level-2"><a href="#">Bàn đầu giường</a></li>
                                    <li class="items-menu-level-2"><a href="#">Bàn trang điểm</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ áo</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tủ âm tường</a></li>
                                    <li class="items-menu-level-2"><a href="#">Niệm</a></li>
                                </ul>
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Bàn làm việc</a></li>
                                    <li class="items-menu-level-2"><a href="#">Ghế làm việc</a></li>
                                    <li class="items-menu-level-2"><a href="#">Kệ sách</a></li>
                                    <li class="items-menu-level-2"><a href="#">Bàn ngoài trời</a></li>
                                    <li class="items-menu-level-2"><a href="#">Bàn ngoài trời</a></li>
                                    <li class="items-menu-level-2"><a href="#">Ghế ngoài trời</a></li>
                                </ul>
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Đèn trang trí </a></li>
                                    <li class="items-menu-level-2"><a href="#">Thảm trang trí</a></li>
                                    <li class="items-menu-level-2"><a href="#">Bình trang trí</a></li>
                                    <li class="items-menu-level-2"><a href="#">Tranh</a></li>
                                    <li class="items-menu-level-2"><a href="#">Đồng hồ</a></li>
                                    <li class="items-menu-level-2"><a href="#">Khung hình</a></li>
                                </ul>
                                <ul class="group-list">
                                    <li class="items-menu-level-2"><a href="#">Dụng cụ bếp</a></li>
                                    <li class="items-menu-level-2"><a href="#">Hàng trang trí khác</a></li>
                                </ul>
                            </ul>
                        </div>
                        </li>
                        <li class="menu-items menu-items-product"><a href="./room.html">Phòng</a><ion-icon name="chevron-down-outline"></ion-icon>
                            <div class="menu-level-2 kitchen">
                                <ul class="list-menu-level-2">
                                    <ul class="group-list">
                                        <li class="items-menu-level-2"><a href="#">Phòng Khách</a></li>
                                        <li class="items-menu-level-2"><a href="#">Phòng Ăn</a></li>
                                        <li class="items-menu-level-2"><a href="#">Phòng Ngủ</a></li>
                                        <li class="items-menu-level-2"><a href="#">Phòng Làm việc</a></li>
                                        <li class="items-menu-level-2"><a href="#">Phòng Bếp</a></li>
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
            <div class="body-left-meu">
                <div class="left-menu">
                    <ul class="list-menu-left">
                        <li class="items-menu-left">
                            <span>Sofa and Armchair</span><ion-icon name="chevron-down-outline"></ion-icon>
                            <ul class="list-menu-chilrent">
                                <li class="menu-chilrent-items"><a href="">Sofa</a></li>
                                <li class="menu-chilrent-items"><a href="#">Sofa góc</a></li>
                                <li class="menu-chilrent-items"><a href="#">Armchair</a></li>
                                <li class="menu-chilrent-items"><a href="#">Ghế dài</a></li>
                                <li class="menu-chilrent-items"><a href="#">Đôn</a></li>
                            </ul>
                        </li>
                        <li class="items-menu-left">
                            <span>Bàn</span><ion-icon name="chevron-down-outline"></ion-icon>
                            <ul class="list-menu-chilrent">
                                <li class="menu-chilrent-items"><a href="#">Bàn Nước</a></li>
                                <li class="menu-chilrent-items"><a href="#">Bàn Ăn</a></li>
                                <li class="menu-chilrent-items"><a href="#">Bàn Bên</a></li>
                                <li class="menu-chilrent-items"><a href="#">Bàn Làm Việc</a></li>
                                <li class="menu-chilrent-items"><a href="#">Bàn Trang Điểm</a></li>
                            </ul>
                        </li>
                        <li class="items-menu-left">
                            <span>Ghế</span><ion-icon name="chevron-down-outline"></ion-icon>
                            <ul class="list-menu-chilrent">
                                <li class="menu-chilrent-items"><a href="#">Ghế Ăn</a></li>
                                <li class="menu-chilrent-items"><a href="#">Ghế Bar</a></li>
                                <li class="menu-chilrent-items"><a href="#">Ghế Làm Việc</a></li>
                            </ul>
                        </li>
                        <li class="items-menu-left">
                            <span>Giường Ngủ</span><ion-icon name="chevron-down-outline"></ion-icon>
                             <ul class="list-menu-chilrent">
                                <li class="menu-chilrent-items"><a href="#">Giường</a></li>
                                <li class="menu-chilrent-items"><a href="#">Bàn Đầu Giường</a></li>
                                <li class="menu-chilrent-items"><a href="#">Nệm</a></li>
                            </ul>
                        </li>
                        <li class="items-menu-left">
                            <span>Tủ Và Kệ</span><ion-icon name="chevron-down-outline"></ion-icon>
                             <ul class="list-menu-chilrent">
                                <li class="menu-chilrent-items"><a href="#">Tủ TiVi</a></li>
                                <li class="menu-chilrent-items"><a href="#">Tủ Áo</a></li>
                                <li class="menu-chilrent-items"><a href="#">Tủ Ly</a></li>
                                <li class="menu-chilrent-items"><a href="#">Tủ Giầy</a></li>
                                <li class="menu-chilrent-items"><a href="#">Kệ Phòng Khách</a></li>
                            </ul>
                        </li>
                        <li class="items-menu-left">
                            <span>Bếp</span><ion-icon name="chevron-down-outline"></ion-icon>
                             <ul class="list-menu-chilrent">
                                <li class="menu-chilrent-items"><a href="#">Tủ Bếp</a></li>
                                <li class="menu-chilrent-items"><a href="#">Phụ Kiện Bếp</a></li>
                            </ul>
                        </li>
                        <li class="items-menu-left">
                            <span>Hàng Tran Trí</span><ion-icon name="chevron-down-outline"></ion-icon>
                             <ul class="list-menu-chilrent">
                                <li class="menu-chilrent-items"><a href="#">Đồng Hồ</a></li>
                                <li class="menu-chilrent-items"><a href="#">Khung Hình</a></li>
                                <li class="menu-chilrent-items"><a href="#">Tranh</a></li>
                                <li class="menu-chilrent-items"><a href="#">Thảm</a></li>
                                <li class="menu-chilrent-items"><a href="#">Đèn trang trí</a></li>
                                <li class="menu-chilrent-items"><a href="#">Bình Trang Trí</a></li>
                            </ul>
                        </li>
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
        <div class="body-checkout">
            <div class="left-checkout">
                <h3 class="title">ĐỊA CHỈ GIAO HÀNG</h3>
                <form class="form-input" action="#">
                    <div class="input-group">
                        <span>Họ Và Tên</span>
                        <input type="text" placeholder="Nhập Họ Và Tên">
                    </div>
                    <div class="input-group">
                        <span>Số Điện Thoại</span>
                        <input type="text" placeholder="Nhập Số Điện Thoại">
                    </div>
                    <div class="input-group">
                        <span>Địa Chỉ Email</span>
                        <input type="text" placeholder="Nhập Địa Chỉ Email">
                    </div>
                    <div class="input-group">
                        <span>Tỉnh / Thành Phố</span>
                        <input type="text" placeholder="Nhập Tỉnh/Thành phố">
                    </div>
                    <div class="input-group">
                        <span>Quận / Huyện</span>
                        <input type="text" placeholder="Nhập Quận/Huyện">
                    </div>
                    <div class="input-group">
                        <span>Địa Chỉ</span>
                        <input type="text" placeholder="Nhập Địa Chỉ">
                    </div>
                </form>
                <div class="more-info">
                    <div class="create-account">
                        <input type="checkbox">
                        <p>Create an account?</p>
                    </div>
                    <h3 class="title">THÔNG TIN THÊM</h3>
                    <h4 class="note">Lưu ý cho đơn hàng (tuỳ chọn)</h4>
                    <textarea class="comment" name="" id="" cols="30" rows="10" placeholder="Viết các lưu ý cho đơn hàng của bạn: vd....."></textarea>
                </div>
                <div class="pay">
                    <h3 class="title">PHƯƠNG THỨC THANH TOÁN</h3>
                    <ul class="list-pay">
                        <li class="items-pay">
                            <ion-icon name="cash-outline"></ion-icon>
                            <p>Thanh Toán Khi Nhận Hàng</p>
                        </li>
                        <li class="items-pay">
                            <ion-icon name="journal-outline"></ion-icon>
                            <p>Chuyển Khoản Ngân Hàng</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-checkout">
                <h3 class="title">Tóm Tắt Đơn Hàng</h3>
                <div class="body-bill">
                    <li class="bill-items">
                        <p>Thành Tiền</p><span>819,998</span><p>đ</p>
                    </li>
                    <li class="bill-items">
                        <p>Vận Chuyển</p><span>Liên hệ phí vận chuyển sau</span>
                    </li>
                    <li class="bill-items">
                        <p>Tổng Cộng</p><span>819,998</span><p>đ</p>
                    </li>
                </div>
                <div class="product-bill">
                    <h3 class="title">Sản Phẩm</h3>
                    <div class="list-product-bill">
                        <li class="items-bill">
                            <div class="left">
                                <img src="./images/collection/arrivals2.png" alt="">
                            </div>
                            <div class="center">
                                <div class="name-product">
                                    Ban treo chia khoa
                                </div>
                                <span>2</span>
                            </div>
                            <div class="right">
                                <span>819,998</span><p>đ</p>
                            </div>
                        </li>
                    </div>
                    <div class="baohanh">
                        <h3 class="title">Chính Sách Bảo Hành</h3>
                        <div class="text">

                        </div>
                    </div>
                    <div class="confirm-baohanh">
                        
                        <p><input type="checkbox">Tôi đã đọc và đồng ý điều kiện đổi trả hàng, giao hàng, chính sách bảo mật, điều khoản dịch vụ mua hàng online * </p>
                    </div>
                    <div class="btn-confirm">
                        ĐẶT MUA
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
</body>
<script src="./assets/javascript/show-search.js"></script>
<script src="./assets/javascript/sticky-header.js"></script>
<script src="./assets/javascript/cr-menu-item.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/cart.js"></script>
</html>