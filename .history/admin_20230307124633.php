

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

session_start();
$sql = "SELECT * FROM `nhom_danhmuc` where 1 ";

$sql_2 = "SELECT * FROM `danhmuc` where 1 ";

$sql_3 ="SELECT * FROM `phong` where 1 ";

$result_2=$conn->query($sql_2);

$result=$conn->query($sql);

$result_3=$conn->query($sql_3);

$result_all=$result->fetch_all();

$result_all_2=$result_2->fetch_all();

$result_all_3=$result_3->fetch_all();
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeDesign Admin</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/product-details.css">

</head>
<body>
<header><span class="logo">Home<span style="color:darkorange">Design</span></span>
      <div class="right">
        <div class="setting">
            <ion-icon name="settings-outline"></ion-icon>
            <span>cài đặt</span>
        </div>
        <div class="thongbao">
            <ion-icon name="notifications-outline"></ion-icon>
            <span>Thông báo</span>
        </div>
        <div class="new">
            <ion-icon name="chatbubbles-outline"></ion-icon>
            <span>tin nhắn</span>
        </div>
        <div class="account">
            <div class="img">
                <img src="./images/demo-body-3/img-2.png" alt="">
            </div>
            <div class="name">admim</div>
        </div>
      </div>
    </header>
    <div class="warp">
        <div class="left-side">
        <div class="top"><ion-icon name="grid-outline"></ion-icon><h3 class="title-menu">Quản trị trang web</h3></div>
        <ul class="menu">
            <li class="menu-items menu-thongke">
                <p>Thống kê</p>
                  <div class="category">
                    <div class="category-items">Doanh Thu</div>
                  </div>
            </li>
            <li class="menu-items menu-order">
                <p>Quản Lý Kho Hàng</p>
                  <div class="category">
                    <div class="category-items">Nhập Kho Sản Phẩm</div>
                    <div class="category-items">Xuất Kho Sản Phẩm</div>
                    <div class="category-items">Nhập Xuất Tồn Kho</div>
                    <div class="category-items">Thẻ Kho</div>
                  </div>
            </li>
            <li class="menu-items menu-kho">
                <p>Quản Lý Đơn Đặt Hàng</p>
                  <div class="category">
                      <div class="category-items">Tổng số đơn đặt hàng </div>
                    <div class="category-items">Đơn đặt hàng thành công</div>
                    <div class="category-items">Đơn đặt đã hủy </div>
                  </div>
            </li>
            <li class="menu-items menu-category">
                <p>Danh Mục</p>
                <div class="category">
                    <div class="category-items">Thêm danh sách danh mục</div>
                    <div class="category-items">Xóa danh sách danh mục</div>
                    <div class="category-items">sửa danh sách danh mục</div>
                    <div class="category-items">Thêm danh mục</div>
                    <div class="category-items">xóa danh mục</div>
                    <div class="category-items">sửa danh mục</div>
                </div>
            </li> 
            <li class="menu-items menu-room">
                <p>Phòng</p>
                <div class="category">
                    <div class="category-items">Thêm phòng</div>
                    <div class="category-items">Xóa phòng</div>
                    <div class="category-items">Sửa phòng</div>
                </div>
            </li> 
            <li class="menu-items menu-product">
                <p>Sản phẩm</p>
                <div class="category">
                    <div class="category-items">Thêm sản phẩm</div>
                    <div class="category-items">Điều chỉnh sản phẩm</div>
                </div>
            </li> 
        </ul>
        </div>
        <div class="right-side">
            <div class="body-add-category">
              <form action="./add_category.php" method="post" class="group-input">
                    <span>Nhập Tên Danh Sách Danh Mục</span>
                    <div class="wrap-input">
                        <input name="name_catalog_list" class="input" type="text" placeholder="Nhập tên danh mục ...">
                        <input name="add_catalog_list" class="btn" type="submit" value="Xác Nhận">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
              <form action="./add_category.php" method="post" class="group-input">
                    <span>Chọn Tên Danh Sách Danh mục muốn xóa</span>
                    <?php 
                    
                    echo '<div class="wrap-input">';
                    echo '<select name="value_select" class="detele-catalog-list">';
                        foreach($result_all as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                    </select>
                        <input name="detele_catalog_list" class="btn" type="submit" value="Xác Nhận Xóa">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
              <form action="./add_category.php" method="post" class="group-input">
                    <span>Chọn Tên Danh Sách Danh mục muốn sửa</span>
                    <div class="wrap-input">
                    <select name="value_select" class="detele-catalog-list">
                        <?php 
                        foreach($result_all as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                    </select>
                    </div>
                    <div class="wrap-input">
                        <input name="name_catalog_list" class="input" type="text" placeholder="Nhap vào tên mới ....">
                        <input name="change_catalog_list" class="btn" type="submit" value="Thay đổi">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
                <form action="./add_category.php" method="post" class="group-input">
                   <div class="wrap-input">
                    <span>Chọn danh sách danh mục: </span>
                    <select name="value_select" class="select_catalog_list">
                        <?php 
                        foreach($result_all as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                    </select>
                   </div>
                    <span>Nhập Tên danh mục</span>
                    <div class="wrap-input">
                        <input name="name_category" class="input" type="text" placeholder="Nhập tên danh mục ...">
                        <input name="add_category" class="btn" type="submit" value="Xác Nhận">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
                <form action="./add_category.php" method="post" class="group-input">
                    <div class="wrap-input">
                       <span>Chọn danh sách danh mục:</span>
                       <?php 
                        echo '<select name="value_select" class="select_catalog_list select-none-parent">';
                        foreach($result_all as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                    </select>
                    <a href="#" class="btn-filter">Chọn</a>
                       </div>
                    <span>Chọn Tên Danh mục muốn xóa</span>
                    <div class="wrap-input">   
                       <select name="category_id" class="detele-catalog-list select-none-chilrent">

                       </select>
                        <input name="detele_category" class="btn" type="submit" value="Xác Nhận Xóa">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
                <form action="./add_category.php" method="post" class="group-input">
                    <div class="wrap-input">
                       <span>Chọn danh sách danh mục:</span>
                       <?php 
                        echo '<select name="value_select" class="select_catalog_list select-none-parent">';
                        foreach($result_all as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                    </select>
                    <a href="#" class="btn-filter">Chọn</a>
                       </div>

                    <span>Chọn Tên Danh mục muốn sửa</span>
                    <div class="wrap-input">   
                       <select name="category_id" class="detele-catalog-list select-none-chilrent">
                        
                       </select>
                    </div>
                    <div class="wrap-input">
                     <input name="name_category" type="text" class="input" placeholder="Nhập vào tên mới ..">
                     <input name="change_category" class="btn" type="submit" value="Thay Đổi">
                 </div>
                </form>
            </div>
            <div class="body-add-category body-add-room">
                <form action="./add_category.php" method="post" class="group-input"  enctype="multipart/form-data">
                    <span>Nhập Tên Phòng</span>
                    <div class="wrap-input room-input">
                        <input name="name-room" class="input" type="text" placeholder="Nhập tên phòng ..."> 
                        <span>Nhập mô tả chi tiết</span>
                        <textarea name="des" placeholder="Nhập vào mô tả .." cols="20" rows="5"></textarea>
                            <span>Chèn ảnh banner phòng</span>
                            <input name="img-room" type="file">
                        <input name="add-room" class="btn" type="submit" value="Xác Nhận">
                    </div>
                </form>
            </div>
            <div class="body-add-category body-add-room">
                <form action="./add_category.php" method="post" class="group-input">
                    <span>Chọn Tên Phòng muốn xóa</span>
                    <div class="wrap-input">
                       <select name="select_value" class="detele-catalog-list select-none-parent">
                       <?php 
                        foreach($result_all_3 as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                       </select>
                        <input name="detele-room" class="btn" type="submit" value="Xác Nhận Xóa">
                    </div>
                </form>
            </div>
            <div class="body-add-category body-add-room">
                <form action="./add_category.php" method="post" class="group-input" enctype="multipart/form-data">
                    <span>Chọn Tên Phòng muốn sửa</span>
                    <div class="wrap-input">
                       <select name="select_value" class="detele-catalog-list select-none-parent">
                       <?php 
                        foreach($result_all_3 as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                       </select>
                       <a href="#" class="btn-filter btn-change-room">Chọn</a>
                    </div>
                    <div class="wrap-input room-input body-change-room">
                   
                    </div>
                </form>
            </div>
            <div class="body-add-category body-add-product">
                <form action="./add-product.php" method="post" enctype="multipart/form-data" class="group-input">
                    <span>Chọn Nơi Thêm Sản Phẩm</span>
                    <div class="address-save">
                        <div class="wrap-input">
                            <a class="address_1" style="position: absolute;opacity:0;" href=""></a>
                           <label for="category-pd">Nhóm danh muc</label>
                           <select name="select_value category-pd" class="detele-catalog-list">
                           <?php 
                            foreach($result_all as $row){
                               echo "<option value=".$row[0].">".$row[1]."</option>";
                            }
                            ?>
                           </select>
                        </div>   
                        <div class="wrap-input">
                           <label for="category-pd">Danh Mục</label>
                           <select name="cate_id" class="detele-catalog-list">
                            <?php 
                            foreach($result_all_2 as $row){
                               echo "<option value=".$row[0].">".$row[2]."</option>";
                            }
                            ?>
                           </select>
                        </div>   
                        <div class="wrap-input">
                           <label for="category-pd">Phòng</label>
                           <select name="rooms_id" class="detele-catalog-list">
                           <?php 
                            foreach($result_all_3 as $row){
                               echo "<option value=".$row[0].">".$row[1]."</option>";
                            }
                            ?>
                           </select>
                        </div>   
                    </div>
                    <div class="info-product-add">
                        <div class="left-side-add add-product">
                            <div class="wrap-input">
                                <label for="name-product">Tên sản phẩm</label>
                                <input type="text" name="name-product" placeholder="Nhap vao ten san pham">
                            </div>
                            <div class="wrap-input">
                                <label for="price-product">Giá sản phẩm</label>
                                <input type="number" name="price-product" placeholder=".....VDN">
                            </div>
                            <div class="wrap-input">
                                <label for="des_product">Mô tả</label>
                                <textarea  name="des_product" id="" cols="30" rows="5"></textarea>
                            </div>
                            <div class="wrap-input">
                                <label for="img_1">Thêm ảnh 1</label>
                                <input type="file" name="img_1" placeholder="Nhap vao ten san pham">
                            </div>
                            <div class="wrap-input">
                                <label for="img_2">Thêm ảnh zoom</label>
                                <input type="file" name="img_2" placeholder="Nhap vao ten san pham">
                            </div>
                            <div class="wrap-input">
                             <input name="confirm_add_product" class="btn-add-product" type="submit" value="Xác Nhận Thêm">
                            </div>
                        </div>
                        <div class="right-side-add">
                            <a href="#" class="preview">Xem thử</a>
                            <li class="product-items">
                                <div class="top-product">
                                    <img src="./images/collection/arrivals1.png" alt="">
                                    <img src="./images/room/phong_khach.png" alt="" class="img-zoom">
                                    <div class="add-cart">
                                        <div class="left-add">
                                            <ion-icon name="cart-outline"></ion-icon>
                                            <p>Add to cart</p>
                                        </div>
                                        <div class="right-add">
                                            <ion-icon name="heart-outline"></ion-icon>
                                            <ion-icon name="expand-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="texture"></div>
                                    <div class="sale-ticker">
                                        Sale
                                    </div>
                                </div>
            
                                <div class="product-content">
                                    <h3 class="name-product">Wooden Chair</h3>
                                    <div class="product-price"><span>$</span><p>65.00</p></div>
                                </div>
                            </li>
                        </div>
                    </div>
                </form>
            </div>
            <div class="body-add-category body-add-product body-detele-product">
                <form action="./product/update_product.php" method="post" class="group-input">
                    <span>Tìm Kiếm</span>
                    <div class="address-save">
                    <div class="wrap-input">
                            <a class="address_1" style="position: absolute;opacity:0;" href=""></a>
                           <label for="category-pd">Nhóm danh muc</label>
                           <select name="select_value category-pd" class="detele-catalog-list">
                           <?php 
                            foreach($result_all as $row){
                               echo "<option value=".$row[0].">".$row[1]."</option>";
                            }
                            ?>
                           </select>
                        </div>   
                        <div class="wrap-input">
                           <label for="category-pd">Danh Mục</label>
                           <select name="select_value category-pd" class="detele-catalog-list">
                            <?php 
                            foreach($result_all_2 as $row){
                               echo "<option value=".$row[0].">".$row[2]."</option>";
                            }
                            ?>
                           </select>
                        </div>   
                        <div class="wrap-input">
                           <label for="category-pd">Phòng</label>
                           <select name="select_value category-pd" class="detele-catalog-list">
                           <?php 
                            foreach($result_all_3 as $row){
                               echo "<option value=".$row[0].">".$row[1]."</option>";
                            }
                            ?>
                           </select>
                        </div> 
                        <div class="wrap-input">
                            <a href="#" class="btn-confirm">Chọn</a>
                        </div>   
                    </div>
                    <div class="product-detele">
                    <span>Danh sách sản phẩm</span>
                    <ul class="list-product-select">
                        <form action="./product/update_product.php" method="post">
                            <li class="items-product-select">
                                <div class="img"><img src="./images/collection/arrivals4.png" alt=""></div>
                                <div class="name">san pham 1</div>
                                <div class="price">$300</div>
                                <div class="remove">
                                    <a href="./product/update_product.php?id_detail=6" class="update_detail">Cập nhật chi tiết sản phẩm </a>
                                    <a href="./product/update_product.php?id_change=6" name="change" class="change">Thay đổi</a>
                                    <a href=""><ion-icon name="trash"></ion-icon></a>
                                </div>
                            </li>
                        </form>
                    </ul>
                    </div>
                </form>
            </div> 
            <div class="body-add-category body-thongke ">
                <div class="headline">
                    <div class="item">
                       <div class="top-items">
                        <ion-icon name="eye-outline"></ion-icon>
                        <span>5555</span>
                       </div>
                       <div class="bottom-items">
                        Ghé thăm
                       </div>
                    </div>
                    <div class="item">
                       <div class="top-items">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <span>5555</span>
                       </div>
                       <div class="bottom-items">
                        Người dùng đăng ký
                       </div>
                    </div>
                    <div class="item">
                       <div class="top-items">
                        <ion-icon name="cart-outline"></ion-icon>
                        <span>5555</span>
                       </div>
                       <div class="bottom-items">
                        sản phẩm bán ra
                       </div>
                    </div>
                    <div class="item">
                       <div class="top-items">
                        <ion-icon name="git-compare-outline"></ion-icon>
                        <span>444</span>
                       </div>
                       <div class="bottom-items">
                        Giao dịch
                       </div>
                    </div>
                </div>
                <div class="bieudothongke">
                    <div class="title">Thống kê doanh thu</div>
                    <div class="thuocdo">
                        <div class="item">
                            <div class="sodo">0</div>
                            <div class="mucdo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="sodo">10</div>
                            <div class="mucdo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="sodo">20</div>
                            <div class="mucdo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="sodo">30</div>
                            <div class="mucdo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="sodo">40</div>
                            <div class="mucdo">
                            </div>
                        </div>
                        <div class="item">
                            <div class="sodo">50</div>
                            <div class="mucdo">
                            </div>
                        </div>
                    </div>
                    <div class="body-bieudo">
                        <div class="item">
                            <div class="muc" style="--i:12;"></div>
                            <div class="thang">Một</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:1;"></div>
                            <div class="thang">hai</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:2;"></div>
                            <div class="thang">ba</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:1;"></div>
                            <div class="thang">tư</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:5;"></div>
                            <div class="thang">năm</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:7;"></div>
                            <div class="thang">sáu</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:9;"></div>
                            <div class="thang">bảy</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:7;"></div>
                            <div class="thang">tám</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:1;"></div>
                            <div class="thang">chín</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:5;"></div>
                            <div class="thang">mười</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:1;"></div>
                            <div class="thang">mười một</div>     
                        </div>
                        <div class="item">
                            <div class="muc"  style="--i:3;"></div>
                            <div class="thang">mười hai</div>     
                        </div>
                    </div>
                </div>
                <div class="doanhthu">
                    <div class="title">kiểm tra doanh thu theo tháng </div>
                    <div class="body-kiemtra">
                        <select name="" id="">
                            <option value="1">thang 1</option>
                            <option value="1">thang 2</option>
                            <option value="1">thang 3</option>
                            <option value="1">thang 4</option>
                            <option value="1">thang 5</option>
                            <option value="1">thang 6</option>
                            <option value="1">thang 7</option>
                            <option value="1">thang 8</option>
                            <option value="1">thang 9</option>
                            <option value="1">thang 10</option>
                            <option value="1">thang 11</option>
                            <option value="1">thang 12</option>
                        </select>
                        <input type="submit" value="kiểm tra">
                    </div>
                    <div class="list-ketqua">
                        <div class="tong item">
                            <span>Tổng doanh thu thang: <span></span></span>
                            <p>100000000000000</p>
                        </div>
                        <div class="sanpham item">
                            <span>sản phẩm bán chạy nhất</span>
                            <p>ms4</p>
                        </div>
                    </div>
                </div>
              </div>
              <div class="body-add-category body-order">
                <h3 class="title">Kiểm tra nhập kho</h3>
                <ul class="menu">
                    <div class="items">Xem tất cả</div>
                    <div class="items">Thêm lô nhập</div>
                </ul>
                <div class="body-see-order body_1 active">    
                    <table>
                        <tr>
                            <th>Ngày nhập</th>
                            <th>Nhà cung cấp</th>
                            <th>Mã hàng</th>
                            <th>tên hàng</th>
                            <th>số lô</th>
                            <th>Số lượng</th>
                        </tr>
                        <tr>
                            <td>01/01/2023</td>
                            <td>luon vui tuoi</td>
                            <td>001</td>
                            <td>tên hàng 01</td>
                            <td>139</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>01/01/2023</td>
                            <td>luon vui tuoi</td>
                            <td>001</td>
                            <td>tên hàng 01</td>
                            <td>139</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>01/01/2023</td>
                            <td>luon vui tuoi</td>
                            <td>001</td>
                            <td>tên hàng 01</td>
                            <td>139</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>01/01/2023</td>
                            <td>luon vui tuoi</td>
                            <td>001</td>
                            <td>tên hàng 01</td>
                            <td>139</td>
                            <td>200</td>
                        </tr>
                    </table>
                </div>
                <div class="body-see-order body_2 "> 
                    <div class="add-lo">
                    <div class="head">
                        <div class="items">Ngày nhập</div>
                        <div class="items">Nhà cung cấp</div>
                        <div class="items">Mã sản phẩm</div>
                        <div class="items">Tên sản phẩm</div>
                        <div class="items">số lô</div>
                        <div class="items">số lượng</div>
                        <div class="items">xác nhận</div>
                    </div>
                    <div class="body">
                        <div class="items">
                            <input type="date">
                        </div>
                        <div class="items">
                            <select>
                                <option value="1">nha cung cap 1</option>
                                <option value="1">nha cung cap 2</option>
                                <option value="1">nha cung cap 3</option>
                                <option value="1">nha cung cap 4</option>
                                <option value="1">nha cung cap 5</option>
                                <option value="1">nha cung cap 6</option>
                            </select>
                        </div>
                        <div class="items">
                            <input type="text" placeholder="nhap vao ma san ">
                        </div>
                        <div class="items">
                            <input type="text" placeholder="nhap vao ten san pham">
                        </div>
                        <div class="items">
                            <input type="text" placeholder="nhap vao so lo">
                        </div>
                        <div class="items">
                            <input type="number" placeholder="nhap vao so luong">
                        </div>
                        <div class="items">
                            <input type="submit" class="btn" value="Thêm lô">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="body-add-category body-order ">
                <h3 class="title">Kiểm tra xuất kho</h3>
                <ul class="menu">
                    <div class="items">Thêm lô xuất</div>
                    <div class="items">lịch sử xuất kho</div>
                </ul>
                <div class="body-see-order body_2"> 
                    <div class="add-lo">
                    <div class="head">
                        <div class="items">mã lô</div>
                        <div class="items">ngày nhập</div>
                        <div class="items">nhà cung cấp</div>
                        <div class="items">mã sản phẩm</div>
                        <div class="items">Tên sản phẩm</div>
                        <div class="items">số lượng</div>
                        <div class="items">xác nhận</div>
                    </div>
                    <div class="body">
                        <div class="items">
                            <select>
                                <option value="1">ma lo 1</option>
                                <option value="1">ma lo 2</option>
                                <option value="1">ma lo 3</option>
                                <option value="1">ma lo 4</option>
                                <option value="1">ma lo 5</option>
                                <option value="1">ma lo 6</option>
                            </select>
                        </div>
                        <div class="items">
                            <input type="date">
                        </div>
                        <div class="items">
                            <select>
                                <option value="1">nha cung cap 1</option>
                                <option value="1">nha cung cap 2</option>
                                <option value="1">nha cung cap 3</option>
                                <option value="1">nha cung cap 4</option>
                                <option value="1">nha cung cap 5</option>
                                <option value="1">nha cung cap 6</option>
                            </select>
                        </div>
                        <div class="items">
                            <input type="text" placeholder="nhap vao ma san ">
                        </div>
                        <div class="items">
                            <input type="text" placeholder="nhap vao ten san pham">
                        </div>
                      
                        <div class="items">
                            <input type="number" placeholder="nhap vao so luong">
                        </div>
                        <div class="items">
                            <input type="submit" class="btn" value="xuất lô">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="body-see-order body_1 active">    
                    <table>
                        <tr>
                            <th>Ngày nhập</th>
                            <th>Nhà cung cấp</th>
                            <th>Mã hàng</th>
                            <th>tên hàng</th>
                            <th>số lô</th>
                            <th>Số lượng</th>
                        </tr>
                        <tr>
                            <td>01/01/2023</td>
                            <td>luon vui tuoi</td>
                            <td>001</td>
                            <td>tên hàng 01</td>
                            <td>139</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>01/01/2023</td>
                            <td>luon vui tuoi</td>
                            <td>001</td>
                            <td>tên hàng 01</td>
                            <td>139</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>01/01/2023</td>
                            <td>luon vui tuoi</td>
                            <td>001</td>
                            <td>tên hàng 01</td>
                            <td>139</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>01/01/2023</td>
                            <td>luon vui tuoi</td>
                            <td>001</td>
                            <td>tên hàng 01</td>
                            <td>139</td>
                            <td>200</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="body-add-category body-order">
                  <h3 class="title">Nhập xuất Tồn kho</h3>
                <div class="body-see-order body_1 enty">    
                    <div class="menu-date">
                        <div class="left">
                            <div class="group-input">
                                <label for="to">Từ ngày: </label>
                                <input name="to" type="date">
                            </div>
                            <div class="group-input">
                                <label for="from">Đến ngày: </label>
                                <input name="from" type="date">
                            </div>
                        </div>
                        <div class="right-menu">
                            <input type="submit" value="xem">
                        </div>
                    </div>

                    <table>
                        <tr>
                            <th>số lô</th>
                            <th>Mã hàng</th>
                            <th>tên hàng</th>
                            <th>tồn đầu</th>
                            <th>Nhập</th>
                            <th>xuất</th>
                            <th>Tồn cuối</th>
                            <th>tiền tồn</th>
                        </tr>
                        <tr>
                            <td>A12</td>
                            <td>ms01</td>
                            <td>san pham 2</td>
                            <td>100</td>
                            <td>-</td>
                            <td>-</td>
                            <td>100</td>
                            <td>1000000</td>
                        </tr>
                        <tr>
                            <td>A12</td>
                            <td>ms01</td>
                            <td>san pham 3</td>
                            <td>140</td>
                            <td>-</td>
                            <td>100</td>
                            <td>240</td>
                            <td>1000000</td>
                        </tr>
                        <tr>
                            <td>A12</td>
                            <td>ms01</td>
                            <td>san pham 1</td>
                            <td>140</td>
                            <td>20</td>
                            <td>100</td>
                            <td>60</td>
                            <td>1000000</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="body-add-category body-order">
                  <h3 class="title">thẻ vật tư</h3>
                <div class="body-see-order body_1 enty">    
                    <div class="menu-date">
                        <div class="left">
                            <div class="group-input">
                                <label for="to">Từ ngày: </label>
                                <input name="to" type="date">
                            </div>
                            <div class="group-input">
                                <label for="from">Đến ngày: </label>
                                <input name="from" type="date">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-see-order body_2 active enty"> 
                    <div class="add-lo">
                    <div class="head">
                        <div class="items">Mã sản phẩm</div>
                        <div class="items">Tên sản phẩm</div>
                        <div class="items">số lô</div>
                        <div class="items">xác nhận</div>
                    </div>
                    <div class="body">
                        <div class="items">
                            <select>
                                <option value="1">ma san pham 01</option>
                                <option value="1">ma san pham 02</option>
                                <option value="1">ma san pham 03</option>
                                <option value="1">ma san pham 04</option>
                                <option value="1">ma san pham 05</option>
                                <option value="1">ma san pham 06</option>
                            </select>
                        </div>
                        <div class="items">
                            <input type="text" placeholder="nhap vao ten san pham">
                        </div>
                        
                        <div class="items">
                            <select>
                                <option value="1">AO123</option>
                                <option value="1">AO124</option>
                                <option value="1">AO125</option>
                                <option value="1">AO126</option>
                                <option value="1">AO127</option>
                                <option value="1">AO128</option>
                            </select>
                        </div>
                        <div class="items">
                            <input type="submit" class="btn" value="Xem">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="body-see-order body_3 enty"> 
                    <table>
                        <tr>
                            <th>Ngày</th>
                            <th>số CT</th>
                            <th>Nhập</th>
                            <th>Xuất</th>
                            <th>Ghi chú</th>
                        </tr>
                        <tr>
                            <td class="clo-1" colspan="4">Tồn đầu: <span>-</span> </td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>01/01/2023</td>
                            <td></td>
                            <td>500</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>01/01/2023</td>
                            <td></td>
                            <td></td>
                            <td>50</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tổng:</td>
                            <td>500</td>
                            <td>50</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tồn Cuối:</td>
                            <td>450</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div> 
            <div class="body-add-category body-kho">
                <h2 class="title">
                    Tổng đơn đặt hàng
                </h2>
                <div class="body-see-order body_1 enty">    
                    <div class="menu-date">
                        <div class="left">
                            <div class="group-input">
                                <label for="to">Từ ngày: </label>
                                <input name="to" type="date">
                            </div>
                            <div class="group-input">
                                <label for="from">Đến ngày: </label>
                                <input name="from" type="date">
                            </div>
                        </div>
                        <div class="right-menu">
                            <input type="submit" value="xem">
                        </div>
                    </div>
                    <div class="list-order">
                        <table>
                            <tr>
                                <th>ngày đặt </th>
                                <th>Tên khách hàng </th>
                                <th>số điện thoại </th>
                                <th>Mã hàng</th>
                                <th>tên hàng </th>
                                <th>số lượng </th>
                                <th>tổng tiền </th>
                                <th>mã hóa đơn </th>
                                <th>Mã vận chuyển</th>
                                <th>trạng thái</th>
                                <th>xem chi tiết</th>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>         
            </div>
            <div class="body-add-category body-kho">
                <h2 class="title">
                    Tổng đơn đặt hàng
                </h2>
                <div class="body-see-order body_1 enty">    
                    <div class="menu-date">
                        <div class="left">
                            <div class="group-input">
                                <label for="to">Từ ngày: </label>
                                <input name="to" type="date">
                            </div>
                            <div class="group-input">
                                <label for="from">Đến ngày: </label>
                                <input name="from" type="date">
                            </div>
                        </div>
                        <div class="right-menu">
                            <input type="submit" value="xem">
                        </div>
                    </div>
                    <div class="list-order">
                        <table>
                            <tr>
                                <th>ngày đặt </th>
                                <th>Tên khách hàng </th>
                                <th>số điện thoại </th>
                                <th>Mã hàng</th>
                                <th>tên hàng </th>
                                <th>số lượng </th>
                                <th>tổng tiền </th>
                                <th>mã hóa đơn </th>
                                <th>Mã vận chuyển</th>
                                <th>trạng thái</th>
                                <th>xem chi tiết</th>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>         
            </div>
            <div class="body-add-category body-kho">
                <h2 class="title">
                    Tổng đơn đặt hàng
                </h2>
                <div class="body-see-order body_1 enty">    
                    <div class="menu-date">
                        <div class="left">
                            <div class="group-input">
                                <label for="to">Từ ngày: </label>
                                <input name="to" type="date">
                            </div>
                            <div class="group-input">
                                <label for="from">Đến ngày: </label>
                                <input name="from" type="date">
                            </div>
                        </div>
                        <div class="right-menu">
                            <input type="submit" value="xem">
                        </div>
                    </div>
                    <div class="list-order">
                        <table>
                            <tr>
                                <th>ngày đặt </th>
                                <th>Tên khách hàng </th>
                                <th>số điện thoại </th>
                                <th>Mã hàng</th>
                                <th>tên hàng </th>
                                <th>số lượng </th>
                                <th>tổng tiền </th>
                                <th>mã hóa đơn </th>
                                <th>Mã vận chuyển</th>
                                <th>trạng thái</th>
                                <th>xem chi tiết</th>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                                <tr>
                                    <td>01/01/2023</td>
                                    <td>pham pham phuoc truong</td>
                                    <td>00912812</td>
                                    <td>B123</td>
                                    <td>ghe ngoai troi</td>
                                    <td>4</td>
                                    <td>3000000vnd</td>
                                    <td>MK2000</td>
                                    <td>VT300</td>
                                    <td>đã giao</td>
                                    <td><input class="btn" type="submit" value="xem thêm"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>         
            </div>   
        </div>
    </div>
</body>
<script src="./assets/javascript/admin.js"></script>
</html>