
<?php
include './connect.php';
include './query.php';
include './color_material.php';

function change_info_product(){
    if(isset($_GET["id_change"])){
    $id_product_change=$_GET["id_change"];

    $arr_change=select_value_all("SELECT * FROM `sanpham` where SP_ID=$id_product_change");
    $cate_address=select_value("SELECT DM_TEN FROM `DANHMUC` WHERE DM_ID=".$arr_change[0][1]." ");
    $room_address=select_value("SELECT P_TEN FROM `phong` WHERE P_ID=".$arr_change[0][2]." ");

    function render_item($arr_change,$cate_address,$room_address){
      echo '    <form method="post" action="./add-product.php" enctype="multipart/form-data">';
      echo '    <input class="cate-id-hidden" type="hidden" value="0" name="id-cate"/> ';
      echo '    <input class="rooms-id-hidden" type="hidden" value="0" name="id-rooms"/> ';
      echo '    <input type="hidden" name="id-product" value="'. $arr_change[0][0].'"/>';
      echo '    <p style="background:white;padding:10px 2%;" ><span>'.$cate_address["DM_TEN"].'</span>/<span>'.$room_address["P_TEN"].'</span></p>';
      echo '    <div class="info-product-add">';
      echo '    <div class="left-side-add"> ';
      echo '    <div class="wrap-input"> ';
      echo '        <label for="name-product">Tên sản phẩm</label> ';
      echo '        <input type="text" name="name-product" value="'.$arr_change[0][3].'" placeholder="San pham 1....."> ';
      echo '    </div> ';
      echo '    <div class="wrap-input"> ';
      echo '        <label for="name-product">Giá sản phẩm</label> ';
      echo '        <input type="text" name="price-product" value="'.$arr_change[0][4].'" placeholder="...VND"> ';
      echo '    </div> ';
      echo '    <div class="wrap-input"> ';
      echo '        <label for="name-product">Mô tả</label> ';
      echo '        <textarea  name="des-product" id="" cols="30" rows="5">'.$arr_change[0][7].'</textarea> ';
      echo '    </div> ';
      echo '    <div class="wrap-input"> ';
      echo '        <label for="name-product">Ảnh sản phẩm</label> ';
      echo '        <input type="file" name="img-1" "> ';
      echo '    </div> ';
      echo '    <div class="wrap-input"> ';
      echo '        <label for="name-product">Ảnh sản phẩm zoom</label> ';
      echo '        <input type="file" name="img-2" "> ';
      echo '    </div> ';
      echo '    <div class="wrap-input">';
      echo '     <input class="btn-add-product" name="change_info_product" type="submit" value="Xác Nhận Thay Đổi"> ';
      echo '    </div> ';
      echo '</div> ';
      echo '<div class="right-side-add"> ';
      echo '    <div class="preview">Xem thử</div> ';
      echo '    <li class="product-items"> ';
      echo '        <div class="top-product"> ';
      echo '            <img src='.$arr_change[0][5].' alt=""> ';
      echo '            <div class="add-cart"> ';
      echo '                <div class="left-add"> ';
      echo '                    <ion-icon name="cart-outline"></ion-icon> ';
      echo '                    <p>Add to cart</p> ';
      echo '                </div> ';
      echo '                <div class="right-add"> ';
      echo '                    <ion-icon name="heart-outline"></ion-icon> ';
      echo '                    <ion-icon name="expand-outline"></ion-icon> ';
      echo '                </div> ';
      echo '            </div> ';
      echo '            <div class="texture"></div> ';
      echo '            <div class="sale-ticker"> ';
      echo '                Sale ';
      echo '            </div> ';
      echo '        </div> ';
      echo '        <div class="product-content"> ';
      echo '            <h3 class="name-product">'.$arr_change[0][3].'</h3> ';
      echo '            <div class="product-price"><span>$</span><p>'.$arr_change[0][4].'</p></div> ';
      echo '        </div> ';
      echo '    </li> ';
      echo '</div> ';
      echo '</div>';
      echo '</form>';
    }
    render_item($arr_change,$cate_address,$room_address);
  }
}  

change_info_product();

function show_detail_product(){
  global $arr_chl,$arr_ms;
  if(isset($_GET["id_detail"])){
    $id_pd=$_GET["id_detail"];

    $arr_pd=select_value_all("SELECT * FROM `sanpham` where SP_ID='".$id_pd."'");
    $ct_sanpham=select_value("SELECT * FROM `chitiet_sanpham` where SP_ID='".$id_pd."'");
    if(isset($ct_sanpham)){
      $size=explode(",",$ct_sanpham["CSP_KICHTHUOC"]);
    }
  echo '   <div class="body-detail body-detail-admin">';
  echo '                            <div class="left-side-add add-product">';
  echo '                            <form action="add-product.php" method="post" enctype="multipart/form-data">';
  echo '                                <input type="hidden" name="id_pd" value="'.$id_pd.'" />';
  echo '                                  <h3>Tên sản phẩm: '.$arr_pd[0][3].'</h3>';
  echo '                                <div class="wrap-input">';
  echo '                                 <label for="name-product">Chất liệu</label>';

  echo '                                <select name="material" id="">';
                                             if(isset($ct_sanpham)){
                                               echo "<option value=".$ct_sanpham["CHL_ID"].">".$arr_chl[$ct_sanpham["CHL_ID"]-1][1]."</option>";
                                             }
                                            foreach($arr_chl as $row){
                                              echo "<option value=".$row[0].">".$row[1]."</option>";
                                            }
  echo '                                </select>';
  echo '                                </div>';
  echo '                                <div class="wrap-input">';
  echo '                                 <label for="name-product">Màu sắc</label>';

  echo '                                 <select class="get-color" name="color">';
                                            if(isset($ct_sanpham)){
                                              echo "<option value=".$ct_sanpham["MS_ID"].">".$arr_ms[$ct_sanpham["MS_ID"]-1][1]."</option>";
                                            }
                                            foreach($arr_ms as $row){
                                              echo "<option value=".$row[0].">".$row[1]."</option>";
                                            }
  echo '                                  </select>';

  echo '                                </div>';
  echo '                                <div class="wrap-input">';
  echo '                                    <label for="name-product">kích thước (cm)</label>';
  echo '                                    <div class="wrap-input size">';
                                            if(isset($ct_sanpham)){
                                              echo ' <input name="width" type="number" name="name-product" value='.$size[0].' min="1" placeholder="Ngang">';
                                              echo ' <input name="wide" type="number" name="name-product" value='.$size[1].' min="1" placeholder="Rộng">';
                                              echo ' <input name="height" type="number" name="name-product" value='.$size[2].' min="1" placeholder="Cao ">';
                                            }else{
                                              echo ' <input name="width" type="number" name="name-product" min="1" placeholder="Ngang">';
                                              echo ' <input name="wide" type="number" name="name-product"  min="1" placeholder="Rộng">';
                                              echo ' <input name="height" type="number" name="name-product"  min="1" placeholder="Cao ">';
                                            }
  echo '                                    </div>';
  echo '                                </div>';
  echo '                                <div class="wrap-input">';
  echo '                                    <label for="name-product">Mô tả chất liệu</label>';
  echo '                                    <textarea  name="des_detail" id="" cols="30" rows="5">';  
                                            if(isset($ct_sanpham)){
                                              echo $ct_sanpham["CSP_MOTA"];
                                            }
  echo '                                    </textarea>';
  echo '                                </div>';
  echo '                                <div class="wrap-input img">';
  echo '                                    <label for="name-product">Hình 1</label>';
  echo '                                    <input type="file" name="img_detail_1">';
  echo '                                </div>';
  echo '                                <div class="wrap-input img">';
  echo '                                    <label for="name-product">Hình 2</label>';
  echo '                                    <input type="file" name="img_detail_2">';
  echo '                                </div>';
  echo '                                <div class="wrap-input img">';
  echo '                                    <label for="name-product">Hình 3</label>';
  echo '                                    <input type="file" name="img_detail_3">';
  echo '                                </div>';
  echo '                                <div class="wrap-input img">';
  echo '                                    <label for="name-product">Hình 4</label>';
  echo '                                    <input type="file" name="img_detail_4">';
  echo '                                </div>';
  echo '                                <div class="wrap-input">';
                                         if(isset($ct_sanpham)){
                                            echo ' <input class="btn-add-product" name="product_detail_change" type="submit" value="Xác Nhận Thay Đổi">';
                                         }else{
                                           echo '  <input class="btn-add-product" name="product_detail_add" type="submit" value="Thêm Chi Tiết">';
                                         }
  echo '                                </div>';
  echo '                                 </form>';
  echo '                            </div>';
  echo '                             <div class="body-right">';
  echo '                            <div class="left-detail">';
  echo '                                <div class="control">';
  echo '                                    <ion-icon name="chevron-up-outline"></ion-icon>';
  echo '                                    <ion-icon name="chevron-down-outline"></ion-icon>';
  echo '                                </div>';
  echo '                                <ul class="list-img">';
  echo '                                    <li class="img-items">';
  echo '                                        <img src="./images/collection/arrivals4.png" alt="">';
  echo '                                    </li>';
  echo '                                    <li class="img-items">';
  echo '                                        <img src="./images/collection/arrivals5.png" alt="">';
  echo '                                    </li>';
  echo '                                    <li class="img-items">';
  echo '                                        <img src="./images/collection/arrivals6.png" alt="">';
  echo '                                    </li>';
  echo '                                    <li class="img-items">';
  echo '                                        <img src="./images/collection/arrivals7.png" alt="">';
  echo '                                    </li>';
  echo '                                    <li class="img-items">';
  echo '                                        <img src="./images/collection/arrivals8.png" alt="">';
  echo '                                    </li>';
  echo '                                </ul>';
  echo '                            </div>';
  echo '                            <div class="center-detail">';
  echo '                                <div class="main-img-detail">';
                                         if(isset($arr_pd)){
                                           echo ' <img src="'.$arr_pd[0][5].'" alt="">';
                                         }else{
                                           echo ' <img src="" alt="">';
                                         }
  echo '                                </div>';
  echo '                            </div>';
  echo '                             <div class="preview">Xem Thử</div>';
  echo '                              </div>';
  echo '                        </div>';
  echo '<script src="./javascript/detail-admin.js"></script>';
  }
}
show_detail_product();
?>
