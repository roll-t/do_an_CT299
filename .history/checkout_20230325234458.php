<!DOCTYPE html>
<html lang="en">
<?php
include './head.php';
?>
<link rel="stylesheet" href="./assets/css/checkout.css">
<body>
    <div class="wrapper">
        <header id="top" class="header  header-banner">
            <?php
            include './header.php';
            ?>
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
                <?php
                include './query.php';
                if(isset($_GET["id_product"])){
                    $id_product=$_GET["id_product"];
                    $value_product=select_value("SELECT * FROM SANPHAM WHERE SP_ID=$id_product");
                    $name_product=$value_product["SP_TEN"];
                    $price_product=$value_product["SP_GIA"];
                    $img_product=$value_product["SP_IMG_1"];
                    
                }
                ?>
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