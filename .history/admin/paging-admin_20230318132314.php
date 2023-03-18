<?php
include '../connect.php';
include '../query.php';
$count_index=10;
$index=isset($_GET["page"])?$_GET["page"]:1;
$start_from = ($index - 1) * $count_index;
function show_list($arr){
    if(count($arr)>0){  
      foreach($arr as $items){
      $sql="SELECT * FROM `chitiet_sanpham` WHERE SP_ID=$items[0]";
      $arr_items=select_value($sql);
      echo ' <li class="items-product-select"> ';
      echo '  <div class="img"><img src="../images/collection/arrivals4.png" alt=""></div>';
      echo '  <div class="name">'.$items[3].'</div>';
      echo '  <div class="price">'.number_format($items[4]).'<o> đ</o></div>';
      echo '  <div class="remove">';
      if(isset($arr_items)){
        echo '      <a href="./product/update_product.php?id_detail='.$items[0].'" class="update_detail change_update_detail">Thay đổi chi tiết</a>';
      }else{
        echo '      <a href="./product/update_product.php?id_detail='.$items[0].'" class="update_detail">Thêm chi tiết</a>';
      }
      echo '      <a href="./product/update_product.php?id_change='.$items[0].'" name="change" class="change change_detail">Thay đổi</a>';
      echo '      <div class="delete-confirm" ><a class="delete-now" href="./add-product.php?id_delete='.$items[0].'" ><ion-icon name="trash"></ion-icon></a></div>';
      echo '  </div>';
      echo '</li>';
      }
        echo '<script src="./javascript/update-detail-product.js"></script>';
    }else{
      echo "<p>Không tìm thấy sản phẩm</p>";
    }
  }
if(isset($_GET["page"])){
  $sql="SELECT * FROM `sanpham` LIMIT $start_from, $count_index";
  $arr_pd=select_value_all($sql);
  show_list($arr_pd);
}else if(isset($_GET["page_cate"])){
  $arr_id=explode(" ",$_GET["sort_product_detail"]);
  $cate_id=$arr_id[0];
  $room_id=isset($arr_id[1])?$arr_id[1]:false;
  if($room_id){
    $sql="SELECT * FROM `SANPHAM` AS A,`PHONG` AS B WHERE A.P_ID=B.P_ID AND A.P_ID=$room_id and A.DM_ID=$cate_id ";
  }else{
    $sql="SELECT * FROM `SANPHAM` WHERE DM_ID=$cate_id";
  }
  $arr_pd=select_value_all($sql);
  show_list($arr_pd);
}

?>