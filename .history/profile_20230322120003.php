
<!DOCTYPE html>
<html lang="en">
<?php 
include './profile/info-profile.php';
include './head.php' ?>
<link rel="stylesheet" href="./assets/css/profile.css">
<body>
    <div class="wrapper">
    <header id="top" class="header header-profile header-banner">
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
                            <li class="items"><a href="#">Đổi mật khẩu</a></li>
                            <li class="items"><a href="#">Đăng xuất</a></li>
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