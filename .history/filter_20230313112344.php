
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
if(isset($_GET["id_menu"])){
  $id_menu=$_GET["id_menu"];
  $sql_items="SELECT * FROM `danhmuc` as a join `nhom_danhmuc` as b on a.NDM_ID=b.NDM_ID WHERE a.NDM_ID=$id_menu";
  $result=$conn->query($sql_items);
  $result_all=$result->fetch_all();
  foreach($result_all as $row){
      echo "<option value=".$row[0].">".$row[2]."</option>";
  }
}
?> 

<?php 
if(isset($_GET["id_product_add"])){
  $id_cate=$_GET["id_product_add"];
  $sql_items="SELECT * FROM `danhmuc` as a join `nhom_danhmuc` as b on a.NDM_ID=b.NDM_ID WHERE a.NDM_ID=$id_cate";
  $result=$conn->query($sql_items);
  $result_all=$result->fetch_all();
  foreach($result_all as $row){
      echo "<option value=".$row[0].">".$row[2]."</option>";
  }
}
?>

<?php 
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
    echo ' <li class="items-product-select"> ';
    echo '  <div class="img"><img src="./images/collection/arrivals4.png" alt=""></div>';
    echo '  <div class="name">'.$items[3].'</div>';
    echo '  <div class="price">'.$items[4].'</div>';
    echo '  <div class="remove">';
    
    echo '      <a href="./product/update_product.php?id_detail='.$items[0].'" class="update_detail">Cập nhật chi tiết sản phẩm </a>';
    echo '      <a href="./product/update_product.php?id_change='.$items[0].'" name="change" class="change">Thay đổi</a>';
    echo '      <div ><a class="delete-now" href="./add-product.php?id_delete='.$items[0].'"><ion-icon name="trash"></ion-icon></a></div>';
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
      echo '<script src="./assets/javascript/update-detail-product.js"></script>';
  }else{
    echo "<p>Không tìm thấy sản phẩm</p>";
  }
}

if(isset($_GET["see-all-product"])){
  $_SESSION['check']=true;
}
if(isset($_GET["sort_product_detail"])){
  $see_sort=true;
  $_SESSION['check']=false;
  $see_all=false;
}


if($see_all && $_SESSION['check']){
  $sql_all="SELECT * FROM `sanpham`
  LIMIT $start_from, $results_per_page";
  $result_pd_all=$conn->query($sql_all);
  $arr_pd_all=$result_pd_all->fetch_all();
  show_list($arr_pd_all);
}


if($see_sort || $_SESSION['check']==false){
  if(isset($_GET["sort_product_detail"])){
   
    $arr_id=explode(' ',$_GET["sort_product_detail"]);  
 
    $_SESSION['cate_id']=$arr_id[0];
  
    $_SESSION['rooms_id']=$arr_id[1];

  };
  isset($arr_id[0])? $cate_id=$arr_id[0]: $cate_id=$_SESSION['cate_id'];
  isset($arr_id[1])? $rooms_id=$arr_id[1]: $rooms_id=$_SESSION['rooms_id'];

  $sql_product="SELECT * FROM `sanpham` as a JOIN `phong` as b on a.P_ID=b.P_ID  
  WHERE a.DM_ID= $cate_id and b.P_ID=$rooms_id LIMIT $start_from, $results_per_page";
  $result_product=$conn->query($sql_product);
  $arr_product=$result_product->fetch_all();
  show_list($arr_product);
}

?>
