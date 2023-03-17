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
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="stylesheet" href="./assets/css/slide-2-banner.css">
    <link rel="stylesheet" href="./assets/css/room.css">
    <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/profile.css">
</head>
<body>
    <div class="wrapper">
        <header id="top" class="header  header-banner">
            <?php include './header.php' ?>
        </header>
        <div class="container-profile">
            <div class="left-profile">
                <div class="head">
                    <div class="avata">
                        <div class="img">
                            <img src="./images/room/living-room/img-2.png" alt="">
                        </div>
                        <div class="name">
                            <h4>Pham Phuoc Truong</h4>
                            <p><ion-icon name="pencil-outline"></ion-icon><span>sửa hồ sơ</span></p>
                        </div>
                    </div>
                
                </div>
                <div class="body">
                    <li class="items-profile">
                        <ion-icon name="person-outline"></ion-icon><p>Tài Khoản Của Tôi</p> 
                        <ul class="menu-content">
                            <li class="items"><a href="#">Hồ sơ</a></li>
                            <li class="items"><a href="#">Ngân hàng</a></li>
                            <li class="items"><a href="#">Địa chỉ</a></li>
                            <li class="items"><a href="#">Đổi mật khẩu</a></li>
                        </ul>
                    </li>
                    <li class="items-profile">
                        <ion-icon name="document-text-outline"></ion-icon><p>Đơn Mua</p>
                        <ul></ul>
                    </li>
                    <li class="items-profile">
                        <ion-icon name="notifications-outline"></ion-icon><p>Thông Báo</p>  
                        <ul class="menu-content">
                            <li class="items"><a href="#">Hồ sơ</a></li>
                            <li class="items"><a href="#">Ngân hàng</a></li>
                            <li class="items"><a href="#">Địa chỉ</a></li>
                            <li class="items"><a href="#">Đổi mật khẩu</a></li>
                        </ul>   
                    </li>
                </div>
            </div>
            <div class="right-profile">
                <div class="items-right-profile my-profile">
                    <div class="head">
                        <h4>Hồ sơ của tôi</h4>
                        <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                    </div>
                        <div class="container-my-profile">
                            <div class="left">
                                <form action="">
                                    <div class="group-input">
                                        <label for="account">Tên Đăng nhập: </label>
                                        <input name="account" type="text" placeholder="Tên đăng nhập chỉ được đổi một lần !">
                                    </div>
                                    <div class="group-input">
                                        <label for="name">Tên: </label>
                                        <input name="name" type="text" placeholder="Nhập vào tên ...">
                                    </div>
                                    <div class="group-input">
                                        <label for="phone">Số điện thoại: </label>
                                        <input name="phone" type="text" placeholder="Số điện thoại ">
                                    </div>
                                    <div class="group-input gender">
                                        <span>Giới tính: </span>
                                        <p>
                                            <span><label for="gender">Nam</label><input name="gender" type="radio"></span>
                                            <span><label for="gender">Nữ</label><input name="gender" type="radio"></span>
                                            <span><label for="gender">Khác</label><input name="gender" type="radio"></span>
                                        </p>
                                    </div>
                                    <div class="group-input">
                                        <span>Tỉnh / Thành Phố</span>
                                        <select name="" id="">
                                            <option value="">chon 1</option>
                                            <option value="">chon 1</option>
                                            <option value="">chon 1</option>
                                            <option value="">chon 1</option>
                                        </select>
                                    </div>
                                    <div class="group-input">
                                        <span>Quận / Huyện</span>
                                        <select name="" id="">
                                            <option value="">chon 1</option>
                                            <option value="">chon 1</option>
                                            <option value="">chon 1</option>
                                            <option value="">chon 1</option>
                                        </select>
                                    </div>
                                    <div class="group-input">
                                        <span>Địa Chỉ</span>
                                        <textarea name="" id="" cols="10" rows="3"></textarea>
                                    </div>
                                    <div class="confrim-info">
                                        <input type="submit" value="Lưu">
                                    </div>
                                </form>
                                </div>
                                <div  class="right">
                                    <div class="avata">
                                        <div class="img">
                                            <img src="./images/room/living-room/img-2.png" alt="">
                                        </div>
                                        <div class="name">
                                            <input type="file">
                                            <p><span>Dụng lượng file tối đa 1 MB
                                                Định dạng:.JPEG, .PNG</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                </div>
                <div class="items-right-profile order  active">
                    <div class="header-right">
                        <ul class="menu">
                            <li class="menu-item"><a href="#">Tất cả</a></li>
                            <li class="menu-item"><a href="#">Chờ thanh toán</a></li>
                            <li class="menu-item"><a href="#">Vận chuyển</a></li>
                            <li class="menu-item"><a href="#">Đang giao</a></li>
                            <li class="menu-item"><a href="#">Hoàng thành</a></li>
                        </ul>
                    </div>
                    <div class="container-right">
                    </div>
                </div>
                
            </div>
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
<script src="./assets/javascript/cr-menu-item-product.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/slide-2-banner.js"></script>
<script src="./assets/javascript/sticky-header.js"></script>
<script src="./assets/javascript/cart.js"></script>
<script src="./assets/javascript/profile.js"></script>
</html>