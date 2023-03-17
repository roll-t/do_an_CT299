
<?php 
include './connect.php';
include './query.php';
include './color_material.php';

function show_detail_product(){
    global $arr_chl,$arr_ms;
    if(isset($_GET["id_detail_change"])){
      $id_pd=$_GET["id_detail_change"];
  
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