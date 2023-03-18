<?php 
include '../connect.php';
include '../query.php';
 $count_index=10;
 $index=isset($_GET["page"])?$_GET["page"]:1;
 $start_from = ($index - 1) * $count_index;

 if(isset($_GET["cate_id"])){
     $arr_id=explode(" ",$_GET["cate_id"]);
     var_dump($_GET["cate_id"]);
    $cate_id=$arr_id[0];
    $room_id=isset($arr_id[1])?$arr_id[1]:false;
    var_dump($_GET["cate_id"]);
    $sql_count="SELECT COUNT(*) AS total FROM `SANPHAM` WHERE DM_ID=$cate_id";
 }else{
     $sql_count="SELECT COUNT(*) AS total FROM `sanpham`";
 }
 $count_page=$conn->query($sql_count)->fetch_assoc();
 $page_items=ceil(($count_page["total"]) / $count_index);
 echo '<input class="quantity-page" type="hidden" value='.$page_items.' />';
 if($page_items>=4){
     echo '      <a href="./paging-admin.php?page=1" class="page-items page-per"><ion-icon name="chevron-back-outline"></ion-icon></a>';
 }
 $quantity_paging=$page_items>3?3:$page_items;

   for($i=1;$i<=$quantity_paging;$i++){
           echo '      <a href="paging-admin.php?page='.$i.'" class="page-items page-index">'.$i .'</a>';
                  }
 if($page_items>=4){
     echo '      <a href="./paging-admin.php?page=4" class="page-items page-next"><ion-icon name="chevron-forward-outline"></ion-icon></a>';
 }
 echo '<script src="./javascript/paging-admin.js"></script>';
?>