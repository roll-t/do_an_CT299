
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
    $sql_items="SELECT * FROM `rooms` where `id`= $id_room ";
    $result=$conn->query($sql_items);
    $result_all=$result->fetch_all();
    echo '    <span>Nhập Tên Phòng</span>';
    echo '    <input name="name-room" class="input" value="'.$result_all[0][1].'" type="text" placeholder="Nhập tên phòng ..."> ';
    echo ' <span>Nhập mô tả mới</span>';
    echo ' <textarea name="des" placeholder="Nhập vào mô tả .." cols="20" rows="5">'.$result_all[0][2].'</textarea>';
    echo '     <span>Thay đổi ảnh</span>';
    echo '     <input name="img-room" class="update-img" type="file" value='.$result_all[0][3].'>';
    echo ' <input name="change-room" class="btn" type="submit" value="Xác Nhận">';
}
?>