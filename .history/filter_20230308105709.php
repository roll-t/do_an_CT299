
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
if(isset($_GET["sort_product_detail"])){
  $arr_id=explode(' ',$_GET["sort_product_detail"]);
  $cate_id=$arr_id[0];
  $rooms_id=$arr_id[1];

  $sql_product="SELECT * FROM `sanpham` as a JOIN `phong` as b on a.P_ID=b.P_ID  WHERE a.DM_ID= $cate_id and b.P_ID=$rooms_id";
  
  $result_product=$conn->query($sql_product);
  $arr_product=$result_product->fetch_all();

  foreach($arr_product as $items){
  echo '  <div class="img"><img src="./images/collection/arrivals4.png" alt=""></div>';
  echo '  <div class="name">san pham 1</div>';
  echo '  <div class="price">$300</div>';
  echo '  <div class="remove">';
  echo '      <a href="./product/update_product.php?id_detail=6" class="update_detail">Cập nhật chi tiết sản phẩm </a>';
  echo '      <a href="./product/update_product.php?id_change=6" name="change" class="change">Thay đổi</a>';
  echo '      <a href=""><ion-icon name="trash"></ion-icon></a>';
  echo '  </div>';
  }
}
?>