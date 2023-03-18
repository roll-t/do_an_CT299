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
session_start();

isset($_GET["page_next"])? $index=$_GET["page_next"]+1:$index=1;
isset($_GET["page_prve"])? $index=$_GET["page_prve"]-1:false;

$current_index=$index;

$results_per_page=10;

$current_page=$current_index;

$start_from = ($current_page - 1) * $results_per_page;

$see_all=isset($_SESSION['check'])?$_SESSION['check']:false;

$see_sort=false;

function show_list($arr){
  global $current_index;
  if(count($arr)>0){  
    foreach($arr as $items){
      $sql="SELECT * FROM `CHITIET_SANPHAM` WHERE SP_ID=$items[0]";
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
      echo '   <div class="btn-page">';
      if($current_index>1){
        echo '   <a class="page" href="./filter.php?page_prve='.$current_index.'" class="next"><ion-icon name="chevron-back-outline"></ion-icon></a>';
      }else{
        echo '   <div class="page" class="next"><ion-icon name="chevron-back-outline"></ion-icon></div>';
      }
      if(count($arr)>=10){
        echo '   <a class="page" href="./filter.php?page_next='.$current_index.'" class="next"><ion-icon name="chevron-forward-outline"></ion-icon></ion-icon></a>';
      }else{
        echo '   <div class="page" class="next"><ion-icon name="chevron-forward-outline"></ion-icon></ion-icon></a>';
      }
      echo '   </div>';
      echo '<script src="./javascript/update-detail-product.js"></script>';
  }else{
    echo "<p>Không tìm thấy sản phẩm</p>";
  }
  }



  if(isset($_GET["see-all-product"])){
    $sql="SELECT * FROM `sanpham`
    LIMIT $start_from, $results_per_page";
    $arr_pd=select_value_all($sql);
  }
  else if(isset($_GET["confirm_search"])){
      $value_search=$_GET["confirm_search"];
      $sql="SELECT * FROM `sanpham`  
      WHERE SP_TEN LIKE '%".$value_search."%' LIMIT $start_from, $results_per_page";
      $arr_pd=select_value_all($sql);
  }
  else if(isset($_GET["sort_product_detail"])){
     
    $arr_id=explode(' ',$_GET["sort_product_detail"]);  
 
    $_SESSION['cate_id']=$arr_id[0];
    if(isset($arr_id[1])){
      $_SESSION['rooms_id']=$arr_id[1];
    }
    isset($arr_id[0])? $cate_id=$arr_id[0]: $cate_id=$_SESSION['cate_id'];
    isset($arr_id[1])? $rooms_id=$arr_id[1]: $rooms_id=$_SESSION['rooms_id'];
    if(isset($rooms_id)){
    $sql="SELECT * FROM `sanpham` as a JOIN `phong` as b on a.P_ID=b.P_ID  
    WHERE a.DM_ID= $cate_id and b.P_ID=$rooms_id LIMIT $start_from, $results_per_page";
    }else{
      $sql="SELECT * FROM `sanpham`  
      WHERE DM_ID= $cate_id LIMIT $start_from, $results_per_page";
    }
  $arr_pd=select_value_all($sql);
  }
  show_list($arr_pd);
?>



<!-- <div class="padding">
                <?php
                if($page_cate){
                  $sql_count="SELECT COUNT(*) AS total FROM `sanpham`,`danhmuc` where sanpham.DM_ID=danhmuc.DM_ID and danhmuc.DM_ID=$id_page";
                }else if($page_search){
                  $sql_count="SELECT COUNT(*) AS total FROM `sanpham` where `SP_TEN` LIKE '%".$result_search."%' ";
                }else{
                  $sql_count="SELECT COUNT(*) AS total FROM `sanpham`";
                }

                $count_page=$conn->query($sql_count)->fetch_assoc();

                $page_items=ceil(($count_page["total"]) / $count_index);
                echo '<input class="quantity-page" type="hidden" value='.$page_items.' />';
                if($page_items>=4){
                    echo '      <a href="./paging/paging-product.php?page=1" class="page-items page-per"><ion-icon name="chevron-back-outline"></ion-icon></a>';
                }
                $quantity_paging=$page_items>3?3:$page_items;
                if($page_cate){
                    for($i=1;$i<=$quantity_paging;$i++){
                      echo '      <a href="./paging/paging-product.php?page='.$i.'&cate_id='.$id_page.' " class="page-items page-index">'.$i .'</a>';
                            }
                }else{
                  for($i=1;$i<=$quantity_paging;$i++){
                          echo '      <a href="./paging/paging-product.php?page='.$i.'" class="page-items page-index">'.$i .'</a>';
                                 }
                }
                if($page_items>=4){
                    echo '      <a href="./paging/paging-product.php?page='.($count_index).'" class="page-items page-next"><ion-icon name="chevron-forward-outline"></ion-icon></a>';
                }
                    echo '<script src="./assets/javascript/paging-product.js"></script>';
                ?>
                </div> -->