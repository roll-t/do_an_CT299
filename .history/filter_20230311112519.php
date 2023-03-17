
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
if(isset($_GET["id_room"])){
    $id_room=$_GET["id_room"];
    $sql_items="SELECT * FROM `phong` where `P_ID`= $id_room ";
    $result=$conn->query($sql_items);
    $result_all=$result->fetch_all();
    echo '    <span>Nhập Tên Phòng</span>';
    echo '    <input name="name-room" class="input" value="'.$result_all[0][1].'" type="text" placeholder="Nhập tên phòng ..."> ';
    echo ' <span>Nhập mô tả mới</span>';
    echo ' <textarea name="des" placeholder="Nhập vào mô tả .." cols="20" rows="5">'.$result_all[0][3].'</textarea>';
    echo '     <span>Thay đổi ảnh</span>';
    echo '     <input name="img-room" class="update-img" type="file" value='.$result_all[0][2].'>';
    echo ' <input name="change-room" class="btn" type="submit" value="Xác Nhận">';
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
echo"helo";
$results_per_page=10;
$current_page=isset($_GET["page"])?$_GET["page"]:1;
$start_from = ($current_page - 1) * $results_per_page;
$index_next=1;
$index_prve=$index_next-1;

function show_list($arr){
  global $index_next,$index_prve;
  if(count($arr)>0){  
    foreach($arr as $items){
    echo ' <li class="items-product-select"> ';
    echo '  <div class="img"><img src="./images/collection/arrivals4.png" alt=""></div>';
    echo '  <div class="name">'.$items[3].'</div>';
    echo '  <div class="price">'.$items[4].'</div>';
    echo '  <div class="remove">';
    echo '      <a href="./product/update_product.php?id_detail='.$items[0].'" class="update_detail">Cập nhật chi tiết sản phẩm </a>';
    echo '      <a href="./product/update_product.php?id_change='.$items[0].'" name="change" class="change">Thay đổi</a>';
    echo '      <a href=""><ion-icon name="trash"></ion-icon></a>';
    echo '  </div>';
    echo '</li>';
    }
    if(count($arr)>=10){
      echo '   <div class="btn-page">';
      echo '   <a class="page" href="./filter.php?page='.$index_prve.'" class="next"><ion-icon name="chevron-back-outline"></ion-icon></a>';
      echo '   <a class="page" href="./filter.php?page='.$index_next.'" class="next"><ion-icon name="chevron-forward-outline"></ion-icon></ion-icon></a>';
      echo '   </div>';
      }
      echo '<script src="./assets/javascript/update-detail-product.js"></script>';
  }else{
    echo "<p>Không tìm thấy sản phẩm</p>";
  }
}

if(isset($_GET["sort_product_detail"])){
  $arr_id=explode(' ',$_GET["sort_product_detail"]);  
  $cate_id=$arr_id[0];
  $rooms_id=$arr_id[1];
  $sql_product="SELECT * FROM `sanpham` as a JOIN `phong` as b on a.P_ID=b.P_ID  
  WHERE a.DM_ID= $cate_id and b.P_ID=$rooms_id LIMIT $start_from, $results_per_page";
  $result_product=$conn->query($sql_product);
  $arr_product=$result_product->fetch_all();
  show_list($arr_product);
}

 
if(isset($_GET["see-all-product"])){
  $sql_all="SELECT * FROM `sanpham`
  LIMIT $start_from, $results_per_page";

  $result_pd_all=$conn->query($sql_all);
  $arr_pd_all=$result_pd_all->fetch_all();
  show_list($arr_pd_all);
}
?>




<?php 


?>