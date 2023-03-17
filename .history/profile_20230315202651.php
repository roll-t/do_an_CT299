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
                    <a href="./account.php" class="account"><ion-icon name="person-circle-outline"></ion-icon><h3>Account</h3></a>
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

        <?php include './footer.php' ?>
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