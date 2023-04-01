<!DOCTYPE html>
<html lang="en">
  <?php include './head.php'?>
  <link rel="stylesheet" href="./assets/css/room-detail.css" />
  <link rel="stylesheet" href="./assets/css/slide-2-banner.css">
 <link rel="stylesheet" href="./assets/css/room.css">
  <body>
    <div class="wrapper">
      <header class="header header-banner">
        <?php include './header.php' ?>
      </header>
    <div class="room-container">
      <div class="room-content-top">
        <div class="room-content-top-1">
          <div class="room-L-content-top-1">
            <div class="room-L-content-top-1-inside">
              <div class="room-info-1">
                <div class="room-title">
                  KHÔNG GIAN MỘNG MƠ VỚI SOFA PENNY THANH LỊCH
                </div>
                <p>
                  Trong ngôn ngữ màu sắc, màu trắng thường tượng trưng cho sự
                  thuần khiết, tao nhã, màu đen là sự sang trọng, quyền lực. Còn
                  sắc màu xanh tím dịu dàng lại mang thông điệp của sự sáng tạo,
                  phá cách pha với chút mộng mơ. Cùng tạo nên không gian phòng
                  khách khác lạ với nhân vật chủ đạo là chiếc ghế sofa Penny
                  quen thuộc.
                </p>
              </div>
              <img src="./images/room/room1.png" alt="" />
            </div>
          </div>
          <div class="room-R-content-top-1">
            <img src="./images/room/room2.png" alt="" />
          </div>
        </div>
        <div class="room-content-top-2">
          <div class="room-L-content-top-2">
            <img src="./images/room/room3.png" alt="" />
          </div>
          <div class="room-R-content-top-2">
            <div class="room-R-content-top-2-inside">
              <p>
                Ghế Penny 3 chỗ bọc vải là một trong những chiếc ghế sofa cơ bản
                mà bạn có thể đặt vào bất kỳ không gian nào, dễ dàng phối hợp
                cùng các sản phẩm khác theo ý tưởng sáng tạo riêng. Nhờ vào kiểu
                dáng đơn giản, hiện đại, đường nét gọn gàng, đậm nét phong cách
                Bắc Âu. Sofa được bọc với chất liệu vải cao cấp và chân kim loại
                sơn màu đen, còn có nhiều màu sắc đa dạng để tùy chọn, cũng dễ
                dàng trong việc lau dọn vệ sinh. Chiếc ghế này là lựa chọn hoàn
                hảo cho cả không gian tại gia và văn phòng, ghế sofa 3 chỗ là
                nơi mọi người họp mặt hay tiếp khách mang đến cảm giác gần gũi,
                gắn kết giữa các mối quan hệ hơn.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="room-content-bottom">
        <div class="room-L-content-bottom">
          <img src="./images/room/room4.png" alt="" />
          <ul>
            <li>Xem các mẫu ghế Sofa <a href="">tại đây</a></li>
            <li>Xem các mẫu bàn nước <a href="">tại đây</a></li>
          </ul>
        </div>
        <div class="room-R-content-bottom">
          <img src="./images/room/room5.png" alt="" />
          <ul>
            <li>Xem các mẫu tranh trang trí <a href="">tại đây</a></li>
            <li>Xem các mẫu bình trang trí <a href="">tại đây</a></li>
          </ul>
        </div>
      </div>
      <h1 class="room-product-title">SẢN PHẨM TRONG PHÒNG</h1>
      <div id="new-arrival" class="body-2 body-2-product" style ="padding-inline : 0;">
        <ul class="list-product main-list-product">
          <?php
          $room_product = "SELECT * FROM sanpham WHERE `DM_ID` = 8";
          $arr_product = $conn->query($room_product)->fetch_all();
          function render_list_product($arr_product)
          {
            $count = 0;
            
            foreach ($arr_product as $items) {
              if($count < 4){
              echo '                        <li class="product-items">';
              echo '                        <div class="top-product">';
              echo '                           <img src=' . $items[5] . ' alt="">';
              echo '                            <a href="./product-details.php?id_product=' . $items[0] . '"><img src=' . $items[6] . ' alt="" class="img-zoom"></a>';
              echo '                            <div class="add-cart">';
              echo '                                <div class="left-add">';
              echo '                                    <a style ="color:white;display:flex;gap:5px;"';
              if (isset($_COOKIE["account_homedesign"])) {
                echo 'class="btn-add-cart" href="./cart/add-cart.php?id_product=' . $items[0] . '&img_product=' . $items[5] . '&name_product=' . $items[3] . '&price_product=' . $items[4] . '"><ion-icon name="cart-outline"></ion-icon>';
              } else {
                echo 'href="./account.php"><ion-icon name="cart-outline"></ion-icon>';
              }
              echo '                                    <p>Thêm giỏ hàng</p></a>';
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
              echo '                            <h3 class="name-product">' . $items[3] . '</h3>';
              echo '                            <div class="product-price"><p>' . number_format($items[4]) . '</p><span>đ</span></div>';
              echo '                        </div>';
              echo '                    </li>';
          }  
           $count++; 
        }
      }
          render_list_product($arr_product);
          ?>
        </ul>   
      </div>
      <h1 class="room-product-title">THAM KHẢO CÁC SẢN PHẨM TƯƠNG TỰ</h1>
      <div id="new-arrival" class="body-2 body-2-product" style ="padding-inline : 0;">
        <ul class="list-product main-list-product">
          <?php
          $room_product = "SELECT * FROM sanpham WHERE `DM_ID` = 9";
          $arr_product = $conn->query($room_product)->fetch_all();
          render_list_product($arr_product);
          ?>
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
<script src="./assets/javascript/current-menu-items.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/slide-2-banner.js"></script>
<script src="./assets/javascript/sticky-header.js"></script>
<script src="./assets/javascript/cart.js"></script>

</html>