<?php 
function change_room(){
  global $conn;
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
}
change_room();
?>