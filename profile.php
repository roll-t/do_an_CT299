
<!DOCTYPE html>
<html lang="en">
<?php 
include './profile/info-profile.php';
include './head.php' ;
// include './query.php';
?>
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
                            <?php
                            if(isset($name_account)){
                            echo '<h4>'.$name_account.'</h4>';
                            }else{
                             echo '<h4>Your profile</h4>';
                            }
                            ?>
                            <p><ion-icon name="pencil-outline"></ion-icon><span>sửa hồ sơ</span></p>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <li class="items-profile">
                        <ion-icon name="person-outline"></ion-icon><p>Tài Khoản Của Tôi</p> 
                        <ul class="menu-content">
                            <li class="items"><a href="#">Hồ sơ</a></li>
                            <li class="items"><a href="#">Đổi mật khẩu</a></li>
                            <li class="items"><a href="./client/logout-account.php?logout=account_homedesign">Đăng xuất</a></li>
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
                                <form action="#" method="get" >
                                    <div class="group-input input-validate">
                                        <?php 
                                        echo '    <label for="name">Tên: </label>';
                                        if(isset($_COOKIE["account_homedesign"])){
                                            $name_client=isset(explode(",",$_COOKIE[ "account_homedesign"])[2])?explode(",",$_COOKIE["account_homedesign"])[2]:false;
                                            if($name_client){
                                                echo '<div class="name_client">'.$name_client.'</div>';
                                            }
                                            else{
                                        
                                            echo '    <div class="wrap_name">';
                                            echo '        <input name="name" type="text" placeholder="Nhập vào tên ...">';
                                            echo '    </div>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="group-input phone-number">
                                        <label for="phone">Số điện thoại: </label>
                                        <?php 
                                            if(isset($phone_number)){
                                                echo '<div class="phone_number validate_phone"><span>'.$phone_number.'</span><a style="padding-left:10px;   " href="#" class="change_phone_number">Thay đổi</a></div>';
                                            }else{
                                                echo '<input name="phone" type="text" placeholder="Số điện thoại ">';
                                            }
                                        ?>
                                    </div>
                                            <?php 
                                            if(isset($_COOKIE["address_homedesign"])){
                                                $info_address=explode(",",$_COOKIE["address_homedesign"]);
                                            }
                                            ?>
                                    <div class="group-input input-validate">
                                        <span>Tỉnh / Thành Phố:</span>
                                        <a href="./profile/address-client.php" style="position:absolute" class="get_tinh"></a>
                                        <?php
                                        if(isset($info_address)){
                                            echo $info_address[0];
                                        }else{
                                        echo '     <select class="tinh" name="" id="">';
                                        echo '     <option value="" selected disabled>Chọn Tỉnh</option>';
                                                $arr_tinh=select_value_all("SELECT * FROM TINH");
                                                foreach($arr_tinh as $items){
                                        echo  '<option value="'.$items[0].'">'.$items[1].'</option>';
                                                 }
                                        echo '</select>';
                                        }
                                        ?>
                                      
                                    </div>
                                    <div class="group-input input-validate">
                                        <span>Quận / Huyện:</span>
                                        <?php
                                         if(isset($info_address)){
                                            echo $info_address[1];
                                         }else{
                                         echo'    <select class="huyen" disabled name="" id="">';
                                             echo '<option value="" selected disabled>Chọn Huyện</option>';  
                                          echo'   </select>';
                                         }
                                        ?>
                                    </div>
                                    <div class="group-input input-validate">
                                        <span>Chi tiết địa chỉ:</span>
                                        <?php
                                         if(isset($info_address)){
                                            echo $info_address[2];
                                         }else{
                                           echo '  <textarea placeholder="Ấp/xã/đường/số nhà  ...." name="" id="" cols="10" rows="3"></textarea>';
                                         }
                                        ?>
                                    </div>
                                    <div class="confrim-info">
                                        <a href="#" class="btn_confirm_info">Lưu</a>
                                        <a href="" style="position:absolute" class="add_name"></a>
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
                            <li class="menu-item"><a href="profile.php?all_order">Tất cả</a></li>
                            <li class="menu-item"><a href="profile.php?confirm_order">Chờ Xác Nhận</a></li>
                            <li class="menu-item"><a href="profile.php?delivery">Vận chuyển</a></li>
                            <li class="menu-item"><a href="#">Đang giao</a></li>
                            <li class="menu-item"><a href="#">Hoàng thành</a></li>
                        </ul>
                        
                    </div>
                    <div class="container-right">
                         <?php
                         if(isset($_GET["all_order"])){
                            include './order/all-order.php';
                         }else if(isset($_GET["confirm_order"])){
                            include './order/confirm-order.php';
                         }else if(isset($_GET["delivery"])){
                            include './order/delivery.php';
                         }
                         ?>
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
<script src="./assets/javascript/validate-profile.js"></script>
</html>