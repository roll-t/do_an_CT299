<?php 
include '../connect.php';
include '../query.php';
if(isset($_GET["id_menu"])){
  $id_menu=$_GET["id_menu"];
  $sql_items="SELECT * FROM `danhmuc` as a join `nhom_danhmuc` as b on a.NDM_ID=b.NDM_ID WHERE a.NDM_ID=$id_menu";
  $result=$conn->query($sql_items);
  $result_all=$result->fetch_all();
  foreach($result_all as $row){
      echo "<option value=".$row[0].">".$row[2]."</option>";
  }
}

if(isset($_GET["id_product_add"])){
  $id_cate=$_GET["id_product_add"];
  $result_all=select_value_all("SELECT * FROM `danhmuc` as a join `nhom_danhmuc` as b on a.NDM_ID=b.NDM_ID WHERE a.NDM_ID=$id_cate");
  
  foreach($result_all as $row){
      echo "<option value=".$row[0].">".$row[2]."</option>";
  }
}
  function show_list($arr){
    if(count($arr)>0){  
      foreach($arr as $items){
        $sql="SELECT * FROM `sanpham` WHERE SP_ID=$items[0]";
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
  $count_index=10;
  $index=isset($_GET["page"])?$_GET["page"]:1;
  $start_from = ($index - 1) * $count_index;
  if(isset($_GET["see-all-product"])){
    $sql="SELECT * FROM `sanpham` LIMIT $start_from, $count_index";
    $arr_pd=select_value_all($sql);
    show_list($arr_pd);
  }else if(isset($_GET["sort_product_detail"])){
    $arr_id=$_GET["sort_product_detail"];
    var_dump(explode(" ",$))
  }
?>

